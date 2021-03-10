@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Gallery
        </div>
        <div class="card-body">
          <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')

            

          

   
         
            <div class="form-group ">
              <label for="title"> Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Title ">
            </div>
          


           
            <div  class="form-group ">
              <label for="date"> Date</label>
              <input type="text" class="form-control" name="date" id="date"  placeholder="Enter Date">
            </div>
        
            
            
            <div id="galleryimage"  class="form-group ">
              <label for="galleryimage">Gallery Image</label>
              <input type="file" class="form-control" name="galleryimage" id="galleryimage"  placeholder="Select Gallery image">
            </div>

             <div class="form-group">
              <label for="button-link"> Button Link</label>
              <input type="text" class="form-control" name="button_link" id="button-link"  placeholder="Enter Button Link ">
            </div>

                 
              

            <button type="submit" class="btn btn-primary">Add New Gallery</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



