@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit  ContactUs
        <div class="card-body">
          <form action="{{ route('admin.contactus.update',$contactus->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             

           <div class="form-group ">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name"  placeholder="" value="{{$contactus->name}}">
            </div>
        
             <div class="form-group ">
              <label for="email"> Email </label>
              <input type="email" class="form-control" name="email" id="email"  placeholder="" value="{{$contactus->email}}">
            </div>

            <div class="form-group ">
              <label for="subject"> Subject</label>
              <input type="text" class="form-control" name="subject" id="subject"  placeholder="" value="{{$contactus->subject}}">
            </div>

             <div class="form-group ">
              <label for="message"> message</label>
              <input type="text" class="form-control" name="message" id="message"  placeholder="" value="{{$contactus->message}}">
            </div>


           <button type="submit" class="btn btn-success">Update Contactus
        </button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection



