@extends('layouts.admin')

@section('title')
  E-Learning Chapter
@endsection

@section('navbar-title')
    Chapter Table
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card p-5">
            <div class="card-header">
              <a class="btn btn-link" href="{{ route('course.index') }}">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">List Chapter</h4>
              @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                  </div>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <a 
                    href="{{ route('create.chapter', $courses->id) }}"
                    class="btn btn-info"
                  >
                      <i class="now-ui-icons ui-1_simple-add"></i>
                      Add Chapter
                  </a>
                  <thead class="text-primary">
                    <th>Title</th>
                    <th>Course</th>
                    <th class="text-center">List Video</th>
                    <th class="text-center">
                      Action
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($chapters as $chapter)
                      <tr>
                        <td>{{ $chapter->title }}</td>
                        <td>{{ $chapter->course->name}}</td>
                        <td class="text-center">
                          <a href="{{ route('course-video.show', $chapter->id) }}" class="btn btn-link btn-sm"><i class="now-ui-icons tech_tv"></i></a>
                        </td>
                          <td class="text-center">
                          <a href="{{ route('chapter.edit', $chapter->id) }}" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
                          <form class="d-inline-block" action="{{ route('chapter.destroy', $chapter->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-link btn-sm text-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
