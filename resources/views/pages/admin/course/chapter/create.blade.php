@extends('layouts.admin')

@section('title')
  E-Learning Chapter
@endsection

@section('navbar-title')
    Create Form
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header px-5">
                  
              <a class="btn btn-link" href="{{ route('chapter.show', $items->id) }}">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Create Chapter</h4>
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
              <form method="POST" action="{{ route('store.chapter', $items->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group" hidden>
                  <label>Course Name</label>
                  <select name="course_id" class="form-control">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" selected>{{ $course->name }}</option>
                    @endforeach
                  </select>
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