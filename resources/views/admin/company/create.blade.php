@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Company Create</h4>
                                <div style="float: right">
                                    <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="name" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span> </label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook<span class="text-danger">*</span></label>
                                        <input type="text" name="facebook" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Pan<span class="text-danger">*</span></label>
                                        <input type="number" name="pan" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Logo<span class="text-danger">*</span></label>
                                        <input type="file" name="logo" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone<span class="text-danger">*</span></label>
                                        <input type="tel" name="phone" class="form-control" required>
                                    </div>
                                    <div>
                                        <button type="submit">Save</button>
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
