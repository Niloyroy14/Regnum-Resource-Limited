@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add OurProject
        </div>
        <div class="card-body">
          <form action="{{ route('admin.ourproject.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')

            
            <div class="form-group ">
              <label for="category"> Category </label>
              <input type="text" class="form-control" name="category" id="category"  placeholder="Enter category ">
            </div>
        
      
            <div id="image"  class="form-group ">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image"  placeholder="Select Image">
            </div>

             <div id="sub_image"  class="form-group ">
              <label for="sub_image">Sub Image</label>
              <input type="file" class="form-control" name="sub_image" id="sub_image"  placeholder="Select Sub Image">
            </div>
            
            <div id="ssub_image"  class="form-group ">
              <label for="ssub_image">S_Sub Image</label>
              <input type="file" class="form-control" name="ssub_image" id="ssub_image"  placeholder="Select S_Sub Image">
            </div>

            <div class="form-group ">
              <label for="kf_title"> Key Feature Title </label>
              <input type="text" class="form-control" name="kf_title" id="kf_title"  placeholder="Enter Key Feature Title ">
            </div>

            <div id="kf_image"  class="form-group ">
              <label for="kf_image">Key Feature Image</label>
              <input type="file" class="form-control" name="kf_image" id="kf_image"  placeholder="Select Key Feature Image">
            </div>

            <div class="form-group ">
              <label for="kf_description"> Key Feature Description </label>
              <input type="text" class="form-control" name="kf_description" id="kf_description"  placeholder="Enter Key Feature Description">
            </div>


           


            <button type="submit" class="btn btn-primary">Add New OurProject</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



