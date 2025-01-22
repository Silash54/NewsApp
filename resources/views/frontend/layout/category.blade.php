@extends('frontend.layout.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <span style="background-color:blue " >
            <h3>{{ $category->name }}</h3>
            </span>
            @foreach ($articles as $item)
                <div class="col-md-12 my-5">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('articles',$item->id) }}" style="text-decoration:none" ><h1>{{ $item->title }}</h1></a>
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
@endsection