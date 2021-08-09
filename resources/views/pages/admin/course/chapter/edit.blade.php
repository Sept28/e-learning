@extends('layouts.admin')

@section('title')
  E-Learning Chapter
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
                  
              <a class="btn btn-link" 
                  href="{{ route('chapter.show',$courses->id) }}"
              >
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Edit Chapter</h4>
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
              <form method="POST" action="{{ route('chapter.update',$items->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Title</label>
                  <input value="{{ old('title', $items->title) }}" type="text" class="form-control" name="title">
                </div>
                <div class="form-group" hidden>
                  <label>Course Name</label>
                  <select name="course" class="form-control">
                    @foreach ($chapters as $chapter)
                        <option value="{{ $chapter->course_id }}" selected>{{ $chapter->course->name }}</option>
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