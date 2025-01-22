@extends('admin.layout.app')
@section()
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $article->title }}</h2>
                    <h4>{{ $article->category }}</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset($article->image) }}" alt="img" srcset="">
                    <hr>
                    <p>{{ $article->description }}</p>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection