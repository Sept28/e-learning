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
                @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                  </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>
                        Comment
                      </th>
                      <th>
                        Commentator
                      </th>
                      <th>
                        Rate
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($reviews as $index=>$review)
                        <tr>
                          <td>
                            {{ $review->comment }}
                          </td>
                          <td>
                            {{ $review->user ? $review->user->name : '' }}
                          </td>
                          <td>
                            {{ $review->rate }}
                          </td>
                          <td class="text-center">
                            <form class="d-inline-block" action="{{ route('review.destroy', $review->id) }}" method="POST">
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