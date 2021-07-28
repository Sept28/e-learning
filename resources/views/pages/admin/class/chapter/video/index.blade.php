@extends('layouts.admin')

@section('title')
  E-Learning Video
@endsection

@section('navbar-title')
    Video Table
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card p-5">
            <div class="card-header">
              <a class="btn btn-link" href="/admin/class/chapter">
                <i class="now-ui-icons arrows-1_minimal-left"></i> back
              </a>
              <h4 class="card-title"> 
                Video Table
              </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <a href="/admin/class/chapter/video/create" class="btn btn-info">Add Video <i class="now-ui-icons ui-1_simple-add"></i> </a>
                  <thead class="text-primary">
                    <th>
                      No
                    </th>
                    <th>
                      Title
                    </th>
                    <th>
                      Video
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      User
                    </th>
                    <th>
                      Review
                    </th>
                    <th>
                      Chapter
                    </th>
                    <th>
                      Thumbnail
                    </th>
                    <th class="text-center">
                      Action
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Niger
                      </td>
                      <td class="text-center">
                        <a href="/admin/class/chapter/video/edit" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
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