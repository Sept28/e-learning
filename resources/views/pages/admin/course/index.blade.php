@extends('layouts.admin')

@section('title')
    E-Learning Course
@endsection

@section('navbar-title')
    Course Table
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card p-5">
              <div class="card-header">
                <h4 class="card-title">Course Table</h4>
                @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                  </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <a href="{{ route('course.create') }}" class="btn btn-info">Add Course <i class="now-ui-icons ui-1_simple-add"></i> </a>
                    <thead class="text-primary">
                      <th>No</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th class="text-center">List Chapter</th>
                      <th class="text-center">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($courses as $index=>$course)
                      <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ Str::limit($course->description,40, '...') }}</td>
                        <td>{{ $course->category ? $course->category->name : '-' }}</td>
                        <td>
                          <img src="/upload_image/{{ $course->image }}" alt="image" width="50">
                        </td>
                        <td class="text-center">
                          <a href="{{ route('chapter.show', $course->id) }}"
                             class="btn btn-link btn-sm">
                                <i class="now-ui-icons business_chart-bar-32"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <a href="{{ route('course.edit', $course->id) }}"
                             class="btn btn-link btn-sm">
                              <i class="now-ui-icons design-2_ruler-pencil"></i>
                          </a>
                          <form class="d-inline-block" action="{{ route('course.destroy', $course->id) }}" method="POST">
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