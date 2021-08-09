@extends('layouts.admin')

@section('title')
  E-Learning Video
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
              <a class="btn btn-link" href="{{ route('course-video.show', $chapters->id) }}">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Create Video</h4>
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
              <form method="POST" action="{{ route('store.course-video', $chapters->id) }}">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                    <label>Chapter</label>
                    <select class="form-control" name="chapter_id">
                      @foreach ($items as $item)
                        <option value="{{ $item->id }}" selected>{{ $item->title }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Video url</label>
                    <input type="text" class="form-control" name="video">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Create By</label>
                    <select class="form-control" name="user_id">
                      @foreach ($users as $user)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Rate</label>
                    <select class="form-control" name="review_id">
                      @foreach ($reviews as $review)
                        <option value="{{ $review->id }}">{{ $review->name }}</option>
                        @endforeach
                        <option selected>1</option>
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