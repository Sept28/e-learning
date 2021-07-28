@extends('layouts.admin')

@section('title')
    E-Learning Class
@endsection

@section('navbar-title')
    Class Table
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card p-5">
              <div class="card-header">
                <h4 class="card-title">Class Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <a href="/admin/class/create" class="btn btn-info">Add Class <i class="now-ui-icons ui-1_simple-add"></i> </a>
                    <thead class="text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Category
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
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td>
                          <img src="/now-ui-dashboard-master/assets/img/apple-icon.png" alt="">
                        </td>
                        <td class="text-center">
                          <a href="/admin/class/chapter" class="btn btn-link btn-sm"> <i class="now-ui-icons design_bullet-list-67"></i> List Chapter</a href="#">
                          <a href="/admin/class/edit" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
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