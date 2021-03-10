@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Regnum IT Testomonial
        </div>
        <div class="card-body">
          <form action="{{ route('admin.testomonial.update',$ittestomonial->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             

           <div class="form-group ">
              <label for="title"> Testomonial Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="" value="{{$ittestomonial->title}}">
            </div>
        
            
            
            <div id="image"  class="form-group ">
              <label for="image">Testomonial Image</label>
              <input type="file" class="form-control" name="image" id="image"  placeholder="" value="{{$ittestomonial->image}}">
            </div>

               <div class="form-group ">
              <label for="subtitle"> Testomonial Sub Title</label>
              <input type="text" class="form-control" name="subtitle" id="subtitle"  placeholder="" value="{{$ittestomonial->subtitle}}">
            </div>
             

            <div class="form-group">
              <label for="description">Testomonial Description</label>
              <input type="text" class="form-control" name="description" id="description"  placeholder="" value="{{$ittestomonial->description}}">
            </div>



            <button type="submit" class="btn btn-success">Update Regnum IT Testomonial</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



