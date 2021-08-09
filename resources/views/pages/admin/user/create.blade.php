@extends('layouts.admin')

@section('title')
  E-Learning User
@endsection

@section('navbar-title')
    Create User
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header px-5">
              <a class="btn btn-link" href="{{ url('/admin/user') }}">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Create form</h4>
              @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                  </div>
              @endif
            </div>
            <div class="card-body px-5">
              <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name="phone_number" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label>Personal Goal</label>
                  <select class="form-control" name="personal_goal">
                    <option value="" disabled>-----------------</option>
                    <option value="Full-stack Developer">Full-stack Developer</option>
                    <option value="Front-End Developer">Front-End Developer</option>
                    <option value="Back-End Developer">Back-End Developer</option>
                    <option value="Mobile App">Mobile App Developer</option>
                    <option value="UI Designer">UI Designer</option>
                    <option value="UX Designer">UX Designer</option>
                    <option value="Ilustration Designer">Ilustration Designer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role">
                    <option>Admin</option>
                    <option>User</option>
                  </select>
                </div>
                <div>
                  <label>image</label>
                  <input type="file" name="image" class="form-control-file">
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