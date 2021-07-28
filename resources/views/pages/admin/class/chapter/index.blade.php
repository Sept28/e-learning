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
              <a class="btn btn-link" href="/admin/class">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title">
                  Chapter Table
              </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <a href="/admin/class/chapter/create" class="btn btn-info">Add Chapter <i class="now-ui-icons ui-1_simple-add"></i> </a>
                  <thead class="text-primary">
                    <th>
                      Title
                    </th>
                    <th>
                      Class
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
                      <td class="text-center">
                        <a href="/admin/class/chapter/video" class="btn btn-link btn-sm"> <i class="now-ui-icons design_bullet-list-67"></i> List Video</a href="#">
                        <a href="/admin/class/chapter/edit" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
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
