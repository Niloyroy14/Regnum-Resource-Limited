@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Slider
        </div>
        <div class="card-body">
          <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')

            

               <div class="form-group">
              <label for="category">Select Category</label>
              <select class="form-control" name="category" id="category">
                <option value="">Please Select a Category for the Slider</option>

              @foreach($slidercategory as $category)

                <option value="{{$category->name}}">{{$category->name}}  </option>
  
                @endforeach
                
              </select>
            </div>

   
            <div id="title" class="hidden" >
            <div class="form-group ">
              <label for="title">slider Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Slider Name">
            </div>
          </div>


            <div id="description" class="hidden">
            <div  class="form-group ">
              <label for="description">slider Description</label>
              <input type="text" class="form-control" name="description" id="description"  placeholder="Enter Slider Description">
            </div>
          </div>
            
            
            <div id="sliderimage"  class="form-group ">
              <label for="slidertimage">Slider Image</label>
              <input type="file" class="form-control" name="sliderimage" id="sliderimage"  placeholder="Select Slider image">
            </div>

                 
            <div id="priority" class="form-group ">
              <label for="Priority">Priority</label>
              <input type="text" class="form-control" name="priority" id="priority"  placeholder="Enter Slider Priority" required>
            </div>
            
        
         

            
             

            <button type="submit" class="btn btn-primary">Add New Slider</button>
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