@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Regnum Architecture Portfolio
        </div>
        <div class="card-body">
          <form action="{{ route('admin.architectureportfolio.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
           
           <div class="form-group ">
              <label for="title"> Portfolio Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Portfolio Title ">
            </div>
        
            
            
            <div id="galleryimage"  class="form-group ">
              <label for="portfolioimage">Portfolio Image</label>
              <input type="file" class="form-control" name="portfolioimage" id="galleryimage"  placeholder="Select Portfolio image">
            </div>
             

            <div class="form-group ">
              <label for="imagetext"> Potfolio Image Title</label>
              <input type="text" class="form-control" name="imagetext" id="title"  placeholder="Enter Potfolio Image Text ">
            </div>




                 
              

            <button type="submit" class="btn btn-primary">Add New Potfolio</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



