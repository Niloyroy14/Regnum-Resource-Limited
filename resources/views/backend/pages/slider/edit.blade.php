@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Slider
        </div>
        <div class="card-body">
          <form action="{{ route('admin.slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
            
             <div class="form-group">
              <label for="category">Select Category</label>
              <select class="form-control" name="category" id="category">
                <option value="">Please Select a Category for the Slider</option>

              @foreach(App\Models\SliderCategory::orderBy('name','asc')->get() as $slidercategory)

                <option value="{{$slidercategory->name}}">  {{$slidercategory->name}}  </option>
  
                @endforeach
                
              </select>
            </div>
            
           
          <div id="title" class="hidden" >
            <div class="form-group">
              <label for="slider_name">Slider Title</label>
              <input type="text" class="form-control" name="title" id="slider_title"  placeholder="" value="{{$slider->title}}">
            </div>
          </div>
           

            <div id="description" class="hidden"> 
            <div class="form-group">
              <label for="description">slider Description</label>
              <input type="text" class="form-control" name="description" id="description"  value="{{$slider->description}}" placeholder="Enter Slider Description">
            </div>
            </div>

            <div id="sliderimage" class="form-group">
              <label for="producttimage">Slider Image</label>
              <input type="file" class="form-control" name="sliderimage" id="sliderimage"  value="{{$slider->image}}">
            </div>


            <div id="priority" class="form-group">
              <label for="priority">Slider Priority</label>
               <input type="text" class="form-control" name="priority" id="slider_priority"  placeholder="" value="{{$slider->priority}}">
            </div>
            
            


            <button type="submit" class="btn btn-success">Update Slider</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



@section('scripts')
<script type="text/javascript">
 
 $("#category").change(function(){

 $category_name = $("#category").val();
 if( $category_name =="solution"){

    $("#title").removeClass('hidden');
    $("#description").removeClass('hidden'); 
 }
 
else if( $category_name =="Top_slider"){

    $("#title").removeClass('hidden');
    $("#description").removeClass('hidden');

 }

 else if( $category_name =="certificate"){

    $("#title").addClass('hidden');
    $("#description").addClass('hidden');

 }

 else if( $category_name =="partner"){

    $("#title").addClass('hidden');
    $("#description").addClass('hidden');

 }


 })
          
  </script>

@endsection