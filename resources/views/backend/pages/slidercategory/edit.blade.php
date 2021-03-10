@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Product
        </div>
        <div class="card-body">
          <form action="{{ route('admin.slidercategory.update',$category->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')

              <div class="form-group">
              <label for="category_id">Category ID</label>
              <input type="number" class="form-control" name="category_id" id="category_id"  placeholder="" value="{{$category->id}}">
            </div>

            <div class="form-group">
              <label for="category_name">Category Name</label>
              <input type="text" class="form-control" name="category_name" id="category_name"  placeholder="" value="{{$category->name}}">
            </div>
           
            <button type="submit" class="btn btn-success">Update Slider Category</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
