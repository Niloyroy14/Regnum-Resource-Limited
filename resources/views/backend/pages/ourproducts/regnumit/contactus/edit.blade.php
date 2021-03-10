@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Regnum IT ContactUs
        <div class="card-body">
          <form action="{{ route('admin.itcontactus.update',$itcontactus->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

        @include('backend.partial.messages')
             

           <div class="form-group ">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name"  placeholder="" value="{{$itcontactus->name}}">
            </div>
        
             <div class="form-group ">
              <label for="email"> Email </label>
              <input type="email" class="form-control" name="email" id="email"  placeholder="" value="{{$itcontactus->email}}">
            </div>

            <div class="form-group ">
              <label for="subject"> Subject</label>
              <input type="text" class="form-control" name="subject" id="subject"  placeholder="" value="{{$itcontactus->subject}}">
            </div>

             <div class="form-group">
               <label for="message"> Message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="">{{$itcontactus->message}}</textarea>
            </div>



            <button type="submit" class="btn btn-success">Update Regnum IT Contactus
        </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
  <!-- main-panel ends -->
@endsection



