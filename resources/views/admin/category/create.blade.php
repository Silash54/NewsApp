@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Category Create</h4>
                                <div style="float: right">
                                    <a href="{{ route('category.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span> </label>
                                        <input type="text" name="category" class="form-control" required >
                                    </div>
                                   <div>
                                        <button type="submit" class="btn btn-primary">Save</button>
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
