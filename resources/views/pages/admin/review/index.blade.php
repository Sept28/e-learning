@extends('layouts.admin')

@section('title')
  E-Learning Review
@endsection

@section('navbar-title')
    Review Table
@endsection

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card p-5">
              <div class="card-header">
                <h4 class="card-title">Review Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <a href="/admin/review/create" class="btn btn-info">Add Category <i class="now-ui-icons ui-1_simple-add"></i> </a>
                    <thead class="text-primary">
                      <th>
                        Comment
                      </th>
                      <th>
                        Commentator
                      </th>
                      <th>
                        Star
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
                          <img src="/now-ui-dashboard-master/assets/img/apple-icon.png" alt="">
                        </td>
                        <td class="text-center">
                          <a href="/admin/review/edit" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
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