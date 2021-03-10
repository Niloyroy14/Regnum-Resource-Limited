@extends('master')

@section('title')
 Smart Parking Solutions-Regnum Resource Limited
@endsection

@section('content')
<div class="container-fluid parking">
    <div class="row ml-5" >
        <div class="col-md-6 mt-4">
          <h2 class="mt-4">Parking Control</h2>
          <p class="mt-2">‘All Our automatic parking management systems are comprehensive and cost effective. Our range of parking control systems includes first-class parking management system (PMS) includes parking payment system, Industry best Parking Guidance System (PGS), hard-line entrance and exit parking gate barriers, eminent RFID (Radio Frequency Identification) access control systems along with Automatic License Plate Recognition (ALPR) systems equipped with High Definition ALPR cameras.</p>
        </div>  
        @foreach(App\Models\OurProject::orderBy('id','asc')->where('category','Smart Parking Solution')->get() as $ourproject)
        <div class="col-md-6 mt-5 ">
            <img src="{{ asset('images/ourproject/'.$ourproject->image)}}" width="80%"  alt="sms3">
        </div>
        @endforeach
      </div>

    <div class="row ml-5">
       @foreach(App\Models\OurProject::orderBy('id','asc')->where('category','Smart Parking Solution')->get() as $ourproject)
        <div class="col-md-6 ml-5">
          <img src="{{ asset('images/ourproject/subimage/'.$ourproject->sub_image)}}" width="80%"  alt="sms2">
      </div> 
      @endforeach
        <div class="col-md-5  Guidance">
          <h2>Parking Guidance System</h2>
          <p class="mt-3">‘All Our automatic parking management systems are comprehensive and cost effective. Our range of parking control systems includes first-class parking management system (PMS) includes parking payment system, Industry best Parking Guidance System (PGS), hard-line entrance and exit parking gate barriers, eminent RFID (Radio Frequency Identification) access control systems along with Automatic License Plate Recognition (ALPR) systems equipped with High Definition ALPR cameras.</p>
        </div>
      </div>

    <div class="row ml-5">
        <div class="col-md-11">
          <h1 class="mt-5">Application Details :</h1>
          <p class="mt-5">‘Available number is counted by software and displayed on the outdoor screen (DHI-IPMPGI series). Multi-area display (max 6 areas) is supported.
          	<br>
          Before driving inside, drivers could see the available number clearly via the LED screen.<br>
            Info Screen would show the indication information for the driver when enter or exit.</p>
            <h4>NO Ticket & NO Stop :</h4>
            <p class="mt-3">‘Vehicle access is controlled by RFID Device Camera, without any tickets. It improves traffic flow with no delays. ANPR Camera: Capture and recognize the vehicle plate, support video/loop detection and enable the barrier to open. Embedded with LPR algorithm, the camera could control barrier even when the management software is offline.</p>
            <p>Recognition rate > 95%.</p>
            <h4>No space to be hidden:</h4>
            <p class="mt-3">‘Spot camera can automatically identify the current status of the parking space and provide the car plate information to management center. At the same time, it could provide real time video stream to the administration center for security monitoring and evidence preservation. Furthermore, the built-in seven-color indicator light can indicate different kinds of parking spaces obviously by colors.</p>
        </div>
    </div>

    <div class="row ml-5">
      @foreach(App\Models\OurProject::orderBy('id','asc')->where('category','Smart Parking Solution')->get() as $ourproject)
        <div class="col-md-6">
          <h2 class="mt-5">Parking Management</h2>
          <img src="{{ asset('images/ourproject/s_subimage/'.$ourproject->ssub_image)}}" width="100%"  alt="">
        </div> 
        @endforeach 
        <div class="col-md-5">
            <h4 class="mt-5">EASY-TO-USE PLATFORM :</h4>
            <p class="mt-3">‘Special design for parking management. Visual interface and operation, based on maps.</p>
            <h4 class="mt-5">Comprehensive Surveillance :</h4>
            <p class="mt-3">‘Car accident property theft in parking lot make quite troubles for parking lot manager, as lack of evidences causes disputes. High definition video preview and record can be provided by access cameras and space detection cameras, Parking lot manager could help customers to find the video evidences of accident and unearth the incidents, which would benefit both the parking lot manager and customers.</p>
        </div> 
    </div>
  </div>



@endsection