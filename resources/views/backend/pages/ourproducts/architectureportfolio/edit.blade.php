@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Regnum Architecture Portfolio
        </div>
        <div class="card-body">
          <form action="{{ route('admin.architectureportfolio.update',$portfolio->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             

           <div class="form-group ">
              <label for="title"> Portfolio Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="" value="{{$portfolio->title}}">
            </div>
        
            
            
            <div id="galleryimage"  class="form-group ">
              <label for="portfolioimage">Portfolio Image</label>
              <input type="file" class="form-control" name="portfolioimage" id="galleryimage"  placeholder="" value="{{$portfolio->image}}">
            </div>
             

            <div class="form-group ">
              <label for="portfolioimagetitle">Potfolio Image Text</label>
              <input type="text" class="form-control" name="imagetext" id="title"  placeholder="" value="{{$portfolio->imagetext}}">
            </div>



            <button type="submit" class="btn btn-success">Update Architecture Portfolio</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



