@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Regnum IT Portfolio
        </div>
        <div class="card-body">
          <form action="{{ route('admin.itportfolio.update',$itportfolio->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             
            <div class="form-group ">
              <label for="button"> Portfolio Button</label>
              <input type="text" class="form-control" name="button" id="button"  placeholder="" value="{{$itportfolio->button}}">
            </div>

           <div class="form-group ">
              <label for="category"> Portfolio Category</label>
              <input type="text" class="form-control" name="category" id="category"  placeholder="" value="{{$itportfolio->category}}">
            </div>

            <div class="form-group ">
              <label for="class"> Button Class</label>
              <input type="text" class="form-control" name="class" id="class"  placeholder="" value="{{$itportfolio->class}}">
            </div>

            <div class="form-group ">
              <label for="butn_data_filter"> Button Data Filter</label>
              <input type="text" class="form-control" name="butn_data_filter" id="butn_data_filter"  placeholder="" value="{{$itportfolio->butn_data_filter}}">
            </div>

            <div class="form-group ">
              <label for="data_filter"> Portfolio Data Filter</label>
              <input type="text" class="form-control" name="data_filter" id="data_filter"  placeholder="" value="{{$itportfolio->data_filter}}">
            </div>
        
            
            
            <div id="image"  class="form-group ">
              <label for="image">Portfolio Image</label>
              <input type="file" class="form-control" name="image" id="image"  placeholder="" value="{{$itportfolio->image}}">
            </div>
             

            <div class="form-group ">
              <label for="imagetitle">Potfolio Image Text</label>
              <input type="text" class="form-control" name="imagetitle" id="imagetitle"  placeholder="" value="{{$itportfolio->imagetitle}}">
            </div>



            <button type="submit" class="btn btn-success">Update Regnum IT Portfolio</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



