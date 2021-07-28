@extends('layouts.admin')

@section('title')
  E-Learning Review
@endsection

@section('navbar-title')
    Create Review
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header px-5">
              <a class="btn btn-link" href="/admin/review">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Create form</h4>
            </div>
            <div class="card-body px-5">
              <form>
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Role</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>User</option>
                    <option>Admin</option>
                  </select>
                </div>
                <div>
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary px-5">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection