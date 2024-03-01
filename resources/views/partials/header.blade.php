@php
    $links = [
        [
            'url' => '/',
            'name' => 'home',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'name' => null,
            'label' => 'Chi siamo',
            'active' => false,
        ],
        [
            'url' => '/contatti',
            'name' => null,
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp

<header>
    <div class="header-top">
        
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="img-container">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
            </div>
            <nav>
                <ul>
                    @foreach ($links as $link)
                        <li>
                            @if ($link['active'])
                                <a class="blue-text" href="{{ route($link['name']) }}">
                                    {{ $link['label'] }}
                                </a>
                            @else
                                <a>
                                    {{ $link['label'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
