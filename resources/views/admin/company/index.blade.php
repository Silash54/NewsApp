@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Company </h4>
                                @if(!empty($data))
                                <div style="float: right">
                                    <a href="{{ route('company.create') }}" class="btn btn-primary">Add com</a>
                                </div>
                                @else
                                <h3>Company</h3>
                                @endif
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Facebook</th>
                                    <th>Created At</th>
                                    <th>Logo</th>
                                    <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data))
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->facebook }}</td>
                                            <td>{{ $item->created_at->diffForHumans() }}</td>
                                            <td><img src="{{ asset($item->logo) }}" alt="img1" width="120"></td>
                                            <td>
                                                <a href="{{ route('company.edit',$item->id) }}" class="btn btn-success" >Edit</a>
                                                <a href="{{ route('company.destroy',$item->id) }}" class="btn btn-danger" >Delete</a>
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
