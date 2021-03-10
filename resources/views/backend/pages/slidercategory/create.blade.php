@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Category
        </div>
        <div class="card-body">
          <form action="{{ route('admin.slidercategory.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             
            <div class="form-group">
              <label for="name">Id</label>
              <input type="number" class="form-control" name="id" id="title"  placeholder="Enter Category id">
            </div>

            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="title"  placeholder="Enter Slider Category Name">
            </div>

            <button type="submit" class="btn btn-primary">Add Slider Category</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
