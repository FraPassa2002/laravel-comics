@php
    $links = [
        [
            'title' => 'DC COMICS',
            'list' => 'prova'
        ],
        [
            'title' => 'DC',
            'list' => 'prova'
        ],
        [
            'title' => 'SITES',
            'list' => 'prova'
        ],
        [
            'title' => 'SHOP',
            'list' => 'prova'
        ],

    ];
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            @foreach ($links as $link)
                <h5>
                    {{ $link['title'] }}
                </h5> 
                <ul>
                    <li>
                        <a href="#">
                            {{ $link['list'] }}
                        </a>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-primary">SIGN-UP NOW!!</button>
                    <h5>
                        FOLLOW US
                    </h5>
                </div>
            </div>
        </div>
    </div>
</footer>
