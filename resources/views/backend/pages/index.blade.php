@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      
    <div class="card card-body">
        <h3 style="margin-top: 25px;">Welcome to your Admin Panel</h3>
        <br>
        <br>
        <p>
          <a href="{!! route('index') !!}" class="btn btn-primary btn-lg" target="_blank">Visit Main Site</a>
        </p>
   </div>


      </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <div class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright Regnum © 2021 <a href="http://www.bootstrapdash.com/" target="_blank"></a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </div>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
@endsection
