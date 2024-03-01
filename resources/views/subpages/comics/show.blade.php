@extends('layouts.app')

@section('page-title', $comic['title'])

@section('main-content')

    <main>
        <div class="jumbotron-container mb-5">
            <div class="container">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                </div>
            </div>
        </div>
    
        <h1 class="mt-6">
            Single comic
        </h1>
    
        <div class="row">
            <div class="col-12 col-sm-3 mb-3">
                <div class="card">
                    
                    <div class="card-body">
                      <h5 class="card-title">{{ $comic['title'] }}</h5>
                      <p class="card-text">{{ $comic['description'] }}</p>
                        <ul>
                            <li>
                                Price: {{ $comic['price'] }}
                            </li>
                            <li>
                                Series: {{ $comic['series'] }}
                            </li>
                            <li>
                                Sale date: {{ $comic['sale_date'] }}
                            </li>
                            <li>
                                Type: {{ $comic['type'] }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
