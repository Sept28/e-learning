@extends('layouts.admin')

@section('title')
  E-Learning User
@endsection

@section('navbar-title')
    User Table
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">User Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <a href="/admin/user/create" class="btn btn-info">Add User <i class="now-ui-icons ui-1_simple-add"></i> </a>
                  <thead class="text-primary">
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Address
                    </th>
                    <th>
                      Phone Number
                    </th>
                    <th>
                      Personal Goal
                    </th>
                    <th>
                      Role
                    </th>
                    <th>
                      Image
                    </th>
                    <th class="text-center">
                      Action
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        <img src="/now-ui-dashboard-master/assets/img/apple-icon.png" alt="">
                      </td>
                      <td class="text-center">
                        <a href="/admin/user/edit" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
                        <button class="btn btn-link btn-sm text-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
