@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit OurProject
        </div>
        <div class="card-body">
          <form action="{{ route('admin.ourproject.update',$ourproject->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
            
          
            
           
    
            <div class="form-group ">
              <label for="category"> Category </label>
              <input type="text" class="form-control" name="category" id="category"  placeholder=" " value="{{$ourproject->category}}">
            </div>
        
      
            <div id="image"  class="form-group ">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image"  placeholder="" value="{{$ourproject->image}}">
            </div>

             <div id="sub_image"  class="form-group ">
              <label for="sub_image">Sub Image</label>
              <input type="file" class="form-control" name="sub_image" id="sub_image"  placeholder="" value="{{$ourproject->sub_image}}">
            </div>
            
            <div id="ssub_image"  class="form-group ">
              <label for="sub_image">S_Sub Image</label>
              <input type="file" class="form-control" name="ssub_image" id="ssub_image"  placeholder="" value="{{$ourproject->ssub_image}}">
            </div>

            <div class="form-group ">
              <label for="kf_title"> Key Feature Title </label>
              <input type="text" class="form-control" name="kf_title" id="kf_title"  placeholder="" value="{{$ourproject->kf_title}}">
            </div>

            <div id="kf_image"  class="form-group ">
              <label for="gallerykf_image">Key Feature Image</label>
              <input type="file" class="form-control" name="kf_image" id="kf_image"  placeholder="" value="{{$ourproject->kf_image}}">
            </div>

            <div class="form-group ">
              <label for="kf_description"> Key Feature Description </label>
              <input type="text" class="form-control" name="kf_description" id="kf_description"  placeholder="" value="{{$ourproject->kf_description}}">
            </div>
            


            <button type="submit" class="btn btn-success">Update Slider</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



