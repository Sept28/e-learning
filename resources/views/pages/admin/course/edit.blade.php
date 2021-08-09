@extends('layouts.admin')

@section('title')
    E-Learning Dashboard
@endsection

@section('navbar-title')
    Edit Form
@endsection

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header px-5">
            <a class="btn btn-link" href="{{ route('course.index') }}">
              <i class="now-ui-icons arrows-1_minimal-left"></i> back
            </a>
            <h4 class="card-title">Edit Your Course</h4>
            @if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                  {{ Session::get('success') }}
              </div>
            @endif
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
          </div>
          <div class="card-body px-5">
            <form method="POST" action="{{ route('course.update', $courses->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" value="{{ old('name', $courses->name) }}" type="text" name="name">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="3">{{ old('description', $courses->description) }}</textarea>
              </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" value="{{ old('category', $courses->category_id) }}">
                 @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $courses->category_id ? "selected" : ""}}>{{ $category->name }}</option>
                 @endforeach
                </select>
              </div>
              <div>
                <label>Example file input</label>
                <input class="form-control-file" value="{{ old('image', $courses->image) }}" type="file" name="image_file">
              </div>
              <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-info px-5">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection