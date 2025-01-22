@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit article</h4>
                                <div style="float: right">
                                    <a href="{{ route('article.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('article.update',$article->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label>Title <span class="text-danger">*</span> </label>
                                        <input type="text" name="title" class="form-control" required value="{{ $article->title }}" >
                                    </div>
                                <div class="mb-3">
                                    <label  class="form-label">Description</label>
                                    <textarea class="form-control summernote" name="description" rows="3" >{{ $article->description }}</textarea>
                                </div>
                                <label for="Category">Category</label>
                                <select name="category_id[]" class="form-control select2"  multiple>
                                    <option value="">Select</option>
                                    {{--  @foreach ($data as $value )
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach  --}}
                                </select>
                                    <div class="form-group">
                                        <label>Image<span class="text-danger">*</span></label>
                                        <img src="{{ asset($article->image) }}" alt="img" width="120px" >
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
