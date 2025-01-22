@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Category Edit</h4>
                                <div style="float: right">
                                    <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <form action="{{ route('company.update',$datas->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="name" class="form-control" value="{{ $datas->name }}" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span> </label>
                                        <input type="email" name="email" class="form-control" value="{{ $datas->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook<span class="text-danger">*</span></label>
                                        <input type="text" name="facebook" class="form-control" value="{{ $datas->facebook }}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Pan<span class="text-danger">*</span></label>
                                        <input type="number" name="pan" class="form-control" required value="{{ $datas->pan }}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Logo<span class="text-danger">*</span></label>
                                        <img src="{{ asset($datas->logo) }}" width="120px" alt="logo1">
                                        <input type="file" name="logo" class="form-control mt-2">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone<span class="text-danger">*</span></label>
                                        <input type="tel" name="phone" class="form-control" required value="{{ $datas->phone }}" >
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" >Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
