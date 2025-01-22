@extends('frontend.layout.app')
@section('content')
    {{--  section 1 :Top 4 Articles  --}}
    <section>
        <div class="container">
            <div class="row">
                @foreach ($article as $item)
                    <div class="col-md-12 my-5">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('articles', $item->id) }}" style="text-decoration: none">
                                    <h1>{{ $item->title }}</h1>
                                </a>
                                <img src="{{ asset($item->image) }}" class="w-100%" alt="img">
                                <p>{!! $item->description !!}</p>
                                <h5>{{ $item->created_at->diffForHumans() }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--  Section 2: poilitices  --}}
    <section>
        <div class="container">
            <div class="row">
                {{-- left side 1 news --}}
                <div class="col-md-8">
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h3>Society</h3>
                            </div>
                            @isset($society)
                            <div class="card-body">
                                <h2>{{ $society->title }}</h2>
                                <img src="{{ asset('$society->image') }}" alt="img">
                                <p>{!! $society->description !!}</p>
                                <h5>{{ $society->created_at->diffForHumans() }}</h5>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>
                {{-- right side 3 news --}}
                <div class="col-md-4">
                    <div class="row">
                        @foreach ($sport as $item)
                            <div class="card">
                                <h2>{{ $item->title }}</h2>
                                <p>{{ $item->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
