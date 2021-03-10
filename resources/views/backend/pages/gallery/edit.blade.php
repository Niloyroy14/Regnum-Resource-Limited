@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Gallery
        </div>
        <div class="card-body">
          <form action="{{ route('admin.gallery.update',$gallery->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
            
          
            
           
    
            <div class="form-group">
              <label for="title">Gallery Title</label>
              <input type="text" class="form-control" name="title" id="gallery_title"  placeholder="" value="{{$gallery->title}}">
            </div>
          
           

            
            <div class="form-group">
              <label for="description">Date</label>
              <input type="text" class="form-control" name="date" id="date"  value="{{$gallery->date}}" placeholder="" >
            </div>
        

            <div id="galleryimage" class="form-group">
              <label for="producttimage">Gallery Image</label>
              <input type="file" class="form-control" name="galleryimage" id="galleryimage"  value="{{$gallery->image}}">
            </div>

            
            <div class="form-group">
              <label for="button_link">Button Link</label>
              <input type="text" class="form-control" name="button_link" id="button_link"  placeholder="" value="{{$gallery->button_link}}">
            </div>
            


            <button type="submit" class="btn btn-success">Update Gallery</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



