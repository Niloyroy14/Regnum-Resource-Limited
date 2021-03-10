@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add  Regnum IT Service
        </div>
        <div class="card-body">
          <form action="{{ route('admin.itservice.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
           
           <div class="form-group ">
              <label for="title"> Service Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Service Title ">
            </div>
            
             <div class="form-group ">
              <label for="icon"> Service Icon</label>
              <input type="text" class="form-control" name="icon" id="icon"  placeholder="Enter Service Icon ">
            </div>
            
          
            <div class="form-group ">
              <label for="description"> Service Description</label>
              <input type="text" class="form-control" name="description" id="description"  placeholder="Enter Service Description ">
            </div>




                 
              

            <button type="submit" class="btn btn-primary">Add New Potfolio</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



