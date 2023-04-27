@php
    $page = request()->get('action', 'home');

    $pages = [
        'home' => ['name' => 'Home'],
        'about' => ['name' => 'About'],
        'news' => ['name' => 'News'],
        'registration' => ['name' => 'Registration', 'visible' => !auth()->check()],
        'login' => ['name' => 'Login', 'visible' => !auth()->check()],
        'profile' => ['name' => 'Profile', 'visible' => auth()->check()],
        'logout' => ['name' => 'Logout', 'visible' => auth()->check()],
    ];
@endphp

<header>
    <div class="brand">
        <a href="{{ url('/') }}" class="link brand">
            <img src="/arch.svg" alt="Arch Linux">
            <span>Arch Linux</span>
        </a>
    </div>

    <nav id="nav">
        <div class="menu">
            <ul>
                @foreach ($pages as $action => $options)
                    @if (!isset($options['visible']) || $options['visible'])
                        <li>
                            <a href="{{ url('/?action=' . $action) }}"
                                class="link {{ $action === $page ? 'active' : '' }}">
                                {{ $options['name'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
</header>
