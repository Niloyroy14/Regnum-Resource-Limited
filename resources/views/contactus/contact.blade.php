@extends('master')

@section('title')
Contact Us-Regnum Resource Limited
@endsection

@section('content')

<div class="container-fluid">
    <div class="row ml-5 mt-5">
      <div class="col-md-6">
        <h2 style="font-weight: bold;">Commercial Office Address</h2>
        <div class="row ml-1 mt-5 bgcolour">
            <div class="col-md-1 margin">
              <i class="fas fa-map-marker-alt" style="font-size: 5vh;"></i>
            </div>
            <div class="col-md-10 mr-5 margin">
              <p class="mt-2">Regnum Centre, suit # 301, 3rd Floor, Plot # 191/1, Tejgaon-Gulshan Link Road, Tejgaon C/A, Dhaka 1208.</p>
            </div>
          
        </div>
        <div class="row ml-1 mt-4 bgcolour">
          <div class="col-md-1 margin">
            <i class="fa fa-mobile" aria-hidden="true" style="font-size: 5vh;"></i>
          </div>
          <div class="col-md-10 mr-5 margin">
            <p class="mt-2">+801708524004</p>
          </div>
        
      </div>
      <div class="row ml-1 mt-4 bgcolour">
        <div class="col-md-1 margin">
          <i class="fa fa-envelope" aria-hidden="true" style="font-size: 5vh;"></i>
        </div>
        <div class="col-md-10 mr-5 margin">
          <p class="mt-2">regnumcenter@yahoo.com</p>
        </div>
      
      </div>
      <div class="row ml-1 mt-4 bgcolour">
      <div class="col-md-1 margin">
        <i class="fa fa-clock" aria-hidden="true" style="font-size: 5vh;"></i>
      </div>
      <div class="col-md-10 mr-5 margin">
        <p class="mt-2">Sat to Thu 10 to 6 PM</p>
      </div>   
      </div>   
    </div>


      <div class="col-md-5 ml-4">
        <h2 style="font-weight: bold;">Drop Us A Line</h2>
         @include('partial.messages')
        <div class="form-group">
          <form action="{{route('admin.contactus.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

        <div class="row">
          <div class="col-md-12">
            <label for="name">Your Name (required)</label>
            <input type="text" name="name" class="form-control in" id="name">
          </div> 
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="email">Email address</label>
            <input type="email" class="form-control in" name="email" id="email">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="subject">Subject</label>
            <input type="text" class="form-control in" name="subject" id="subject">
          </div> 
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="Message">Your Message</label>
            <input type="text" class="form-control in" name="message" id="message">
          </div> 
        </div> 
        <div class="row sendbtn">
          <div class="col-md-5">
              <button type="submit" class="btn btn-success bgsend">Send</button>
          </div>
        </div>
      </form>
      </div>
  </div>

</div>
</div>



@endsection