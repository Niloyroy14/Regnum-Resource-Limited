@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Regnum Architecture
        </div>
        <div class="card-body">
          <form action="{{ route('admin.architecture.update',$architecture->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
            
          
            
           
    
            <div class="form-group">
              <label for="title">Architecture Title</label>
              <input type="text" class="form-control" name="title" id="architecture_title"  placeholder="" value="{{$architecture->title}}">
            </div>


            <div class="form-group">
              <label for="description">Architecture Description</label>
              <input type="text" class="form-control" name="description" id="architecture_description"  placeholder="" value="{{$architecture->description}}">
            </div>
          
           
              <div id="sliderimage"  class="form-group ">
              <label for="architectureimage">Architecture Image</label>
              <input type="file" class="form-control" name="architectureimage" id="architectureimage"  placeholder="" value="{{$architecture->image}}">
            </div>
           
           
            <button type="submit" class="btn btn-success">Update Slider</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



