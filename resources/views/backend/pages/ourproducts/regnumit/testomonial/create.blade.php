@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Regnum IT Testomonial
        </div>
        <div class="card-body">
          <form action="{{ route('admin.testomonial.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
           
           <div class="form-group ">
              <label for="title"> Testomonial Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Testomonial Title ">
            </div>
        
            
            
            <div id="galleryimage"  class="form-group ">
              <label for="image">Testomonial Image</label>
              <input type="file" class="form-control" name="image" id="image"  placeholder="Select Testomonial image">
            </div>

            <div class="form-group ">
              <label for="subtitle"> Testomonial Sub Title</label>
              <input type="text" class="form-control" name="subtitle" id="subtitle"  placeholder="Enter Testomonial Sub Title ">
            </div>
             

            <div class="form-group ">
              <label for="description"> Testomonial Description</label>
              <input type="text" class="form-control" name="description" id="description"  placeholder="Enter Testomonial Description ">
            </div>




                 
              

            <button type="submit" class="btn btn-primary">Add New Potfolio</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



