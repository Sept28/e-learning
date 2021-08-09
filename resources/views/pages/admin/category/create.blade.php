@extends('layouts.admin')

@section('title')
    E-Learning Create Category
@endsection

@section('navbar-title')
    Create Category
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header px-5">
              <a class="btn btn-link" href="{{ route('categories.index') }}">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Create Class</h4>
              @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                  </div>
              @endif
            </div>
            <div class="card-body px-5">
              <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Creator</label>
                  <select name="creator" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div>
                  <label>image</label>
                  <input name="image" type="file" class="form-control-file">
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