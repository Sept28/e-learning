@extends('layouts.admin')

@section('title')
    E-Learning Dashboard
@endsection

@section('content')
  <div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
  </div>
  <div class="p-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card card-chart p-3 rounded-lg">
          <div class="card-header d-flex justify-content-around">
            <h4 class="card-title"><b>{{ $course_videos }}</b> Videos</h4>
            <div class="h1">
              <i class="now-ui-icons media-1_camera-compact"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart p-3 rounded-lg">
          <div class="card-header d-flex justify-content-around">
            <h4 class="card-title"><b>{{ $users }}</b> Users</h4>
            <div class="h1">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart p-3 rounded-lg">
          <div class="card-header d-flex justify-content-around">
            <h4 class="card-title"><b>{{ $courses }}</b> Course</h4>
            <div class="h1">
              <i class="now-ui-icons shopping_tag-content"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart p-3 rounded-lg">
          <div class="card-header d-flex justify-content-around">
            <h4 class="card-title"><b>{{ $chapters }}</b> Chapter</h4>
            <div class="h1">
              <i class="now-ui-icons shopping_tag-content"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart p-3 rounded-lg">
          <div class="card-header d-flex justify-content-around">
            <h4 class="card-title"><b>{{ $course_videos }}</b> Video</h4>
            <div class="h1">
              <i class="now-ui-icons shopping_tag-content"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection