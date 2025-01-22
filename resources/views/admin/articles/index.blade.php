@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Article </h4>
                                <div style="float: right">
                                    <a href="{{ route('articles.create') }} " class="btn btn-primary">Add </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @if (!empty($article))
                                            @foreach ($article as $item)
                                                <tr>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{!! $item->description !!}</td>
                                                    <td>{{ $item->created_at->diffForHumans() }}</td>
                                                    <td><img src="{{ asset($item->image) }}" alt="img1" width="120">
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('articles.edit', $item->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <a href="{{ route('articles.show', $item->id) }}"
                                                            class="btn btn-info">View</a>
                                                        <a href="{{ route('articles.destroy', $item->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
