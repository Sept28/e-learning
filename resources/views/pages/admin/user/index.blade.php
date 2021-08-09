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
              @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                  </div>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <a href="{{ route('user.create') }}" class="btn btn-info">Add User <i class="now-ui-icons ui-1_simple-add"></i> </a>
                  <thead class="text-primary">
                    <th>
                      No
                    </th>
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
                    @foreach ($users as $index=>$user)    
                    <tr>
                      <td>
                        {{ $index+1 }}
                      </td>
                      <td>
                        {{ $user->name }}
                      </td>
                      <td>
                        {{ $user->email }}
                      </td>
                      <td>
                        {{ $user->address }}
                      </td>
                      <td>
                        {{ $user->phone_number }}
                      </td>
                      <td>
                        {{ $user->personal_goal }}
                      </td>
                      <td>
                        {{ $user->role }}
                      </td>
                      <td>
                        <img src="{{ asset('now-ui-dashboard-master/assets/img/apple-icon.png') }}" alt="">
                      </td>
                      <td class="text-center">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-link btn-sm"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
                        <form class="d-inline-block" action="{{ route('user.destroy', $user->id) }}" method="POST">
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
