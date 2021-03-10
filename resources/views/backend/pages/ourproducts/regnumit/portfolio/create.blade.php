@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Regnum IT Portfolio
        </div>
        <div class="card-body">
          <form action="{{ route('admin.itportfolio.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
           
           <div class="form-group ">
              <label for="button"> Portfolio Button</label>
              <input type="text" class="form-control" name="button" id="button"  placeholder="Enter Portfolio Button ">
            </div>

           <div class="form-group ">
              <label for="category"> Portfolio Category</label>
              <input type="text" class="form-control" name="category" id="category"  placeholder="Enter Portfolio Category ">
            </div>

            <div class="form-group ">
              <label for="class"> Button Class</label>
              <input type="text" class="form-control" name="class" id="class"  placeholder="Enter Portfolio Class ">
            </div>

            <div class="form-group ">
              <label for="butn_data_filter">Button Data Filter</label>
              <input type="text" class="form-control" name="butn_data_filter" id="butn_data_filter"  placeholder="Enter Button Data Filter ">
            </div>

             <div class="form-group ">
              <label for="data_filter"> Portfolio Data Filter</label>
              <input type="text" class="form-control" name="data_filter" id="data_filter"  placeholder="Enter Portfolio Data Filter ">
            </div>
             

            <div id="galleryimage"  class="form-group ">
              <label for="image">Portfolio Image</label>
              <input type="file" class="form-control" name="image" id="image"  placeholder="Enter Portfolio Image" >
            </div>

            <div class="form-group ">
              <label for="imagetitle"> Potfolio Image Title</label>
              <input type="text" class="form-control" name="imagetitle" id="imagetitle"  placeholder="Enter Potfolio Image Title ">
            </div>


            <button type="submit" class="btn btn-primary">Add Regnum IT Potfolio</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



