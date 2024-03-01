@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')


    <main>
        <div class="bg-welcome">
            <div class="jumbotron-container mb-5">
                <div class="container">
                    <div class="title-container">
                        <h1>
                            CURRENT SERIES
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col">
                    </div>
                </div>
                <div class="row">
                    @foreach ($comics as $index => $comic)
                        <div class="col-12 col-sm-3 mb-3">
                            
                            <a href="{{ route('comics.show') }}?id={{ $index }}">
                                <div class="card">
                                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
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
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
