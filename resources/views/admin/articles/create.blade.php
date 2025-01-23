@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Article Create</h4>
                                <div style="float: right">
                                    <a href="{{ route('articles.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title <span class="text-danger">*</span> </label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control summernote" name="description" rows="3"></textarea>
                                    </div>
                                    <label for="category_id">Category</label>
                                    <select name="category_id[]" id="category_id" class="form-control select2" multiple>
                                        <option value="" disabled>Select Categories</option>
                                        @foreach ($data as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-group">
                                        <label>Image<span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" required>
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
