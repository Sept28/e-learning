@extends('layouts.admin')

@section('title')
  E-Learning User
@endsection

@section('navbar-title')
    Edit User
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header px-5">
              <a class="btn btn-link" href="/admin/user">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">Edit form</h4>
            </div>
            <div class="card-body px-5">
              <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Phone Number</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Personal Goal</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Role</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div>
                  <label for="exampleFormControlFile1">image</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group d-flex justify-content-end">
                  <button type="button" class="btn btn-info px-5">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
