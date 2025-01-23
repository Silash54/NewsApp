@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Category </h4>
                                <div style="float: right">
                                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <th> Company Name</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @if (!empty($data))
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->slug }}</td>
                                                    <td>
                                                        <a href="{{ route('category.edit', $item->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <form action="{{ route('category.destroy',$item->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
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
