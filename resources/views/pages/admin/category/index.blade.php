@extends('layouts.admin')

@section('title')
  E-Learning Category
@endsection

@section('navbar-title')
    Category Table
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card p-5">
            <div class="card-header">
              <h4 class="card-title">Category Table</h4>
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
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="crudTable">
                  <a href="{{ route('categories.create') }}" class="btn btn-info">Add Category <i class="now-ui-icons ui-1_simple-add"></i> </a>
                  <thead class="text-primary">
                    <th>
                      Name
                    </th>
                    <th>
                      User Create
                    </th>
                    <th>
                      Image
                    </th>
                    <th class="text-center">
                      Action
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($categories as $index=>$category)
                      <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->user ? $category->user->name : '' }}</td>
                        <td><img src="/upload_image/{{ $category->image }}" alt="image" width="50"></td>
                        <td class="text-center">
                          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
                          <form class="d-inline-block" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-link btn-sm text-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                          </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection