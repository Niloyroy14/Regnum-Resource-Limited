@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Regnum IT Service
        </div>
        <div class="card-body">
          <form action="{{ route('admin.itservice.update',$itservice->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             

           <div class="form-group ">
              <label for="title"> Service Title</label>
              <input type="text" class="form-control" name="title" id="title"  placeholder="" value="{{$itservice->title}}">
            </div>
        
             <div class="form-group ">
              <label for="icon"> Service Icon </label>
              <input type="text" class="form-control" name="icon" id="icon"  placeholder="" value="{{$itservice->icon}}">
            </div>

            <div class="form-group ">
              <label for="description"> Service Description</label>
              <input type="text" class="form-control" name="description" id="description"  placeholder="" value="{{$itservice->description}}">
            </div>



            <button type="submit" class="btn btn-success">Update Regnum IT Service
        </button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



