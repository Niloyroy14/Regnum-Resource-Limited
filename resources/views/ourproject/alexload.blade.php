@extends('master')

@section('title')
Axle Load Control System-Regnum Resource Limited
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row ml-5 mt-3 alex">
      <div class="col-md-6">
        @foreach(App\Models\OurProject::where('category','Axle Load Control System')->where('id',10)->get() as $ourproject)
        <h2>{{ $ourproject->category}}</h2>
        @endforeach

        <p class="mt-3">‘REGNUM’ AR Dynamic Axle Weighing Scales enable both static and dynamic weighing of vehicles. In static weighing, the vehicle stops on the platform to let each axle to be weighed individually whereas in dynamic weighing the vehicle passes over the platform with a constant speed of approximately 5-8 km per hour. The weighing result can be viewed on a screen and total value/gross vehicle weight can be seen from the remote display unit. System is capable of easily handling even the busiest weighing traffic, the system can be integrated with a computer to produce audio signals in case of overloading and is able to keep records of all weighing operations.</p>
        <h5>‘MAJOR OBJECTIVES:</h5>
        <p class="mt-3">The main objectives of the Axle Load Control Unit are:</p>
        <ul>
          <li><p>To contribute to ultimate reduction of overload in terms of both Gross Vehicle Mass GVM and Axle loading in accordance with the current regulations in the SI No 28 of 2007.</p></li>
          <li><p>To preserve and protect the life span of road and bridge infrastructure.</p></li>
          <li><p>Reduce maintenance cost of Roads and Bridges for the country.</p></li>
          <li><p>‘Facilitating Investments through the conveyance of abnormal Loads to various sectors of the economy notably the mines.</p></li>
          <li><p>To enhance road safety by reducing risks for traffic accidents caused by overloaded Vehicles.To provide traffic flow statistical data for Planning and Designing of Roads and bridges.</p></li>
        </ul>
      </div> 
   
      <div class="col-md-6 mt-5">
        @foreach(App\Models\OurProject::where('category','Axle Load Control System')->where('id',10)->get()  as $ourprojects)
          <img src="{{ asset('images/ourproject/'.$ourprojects->image)}}" alt="Commercial-Weigh-Stations.jpg" width="85%">
       @endforeach
      </div> 
  
  </div>   

   
  <div class="row ml-5 key">
  	<div class="col-md-12 mb-4">
        <h4>Key Features of Regnum Axle Load Control System:</h4>
      </div>
  </div>


   <div class="row ml-5 keyimage">

    @foreach(App\Models\OurProject::orderBy('id','asc')->where('category','Axle Load Control System')->get() as $ourproject)
   	 <div class="col-md-3">
      <p>{{$ourproject->kf_title}}</p>
        <img  src="{{ asset('images/ourproject/keyfetureimage/'.$ourproject->kf_image)}}" width="95%" alt="project1">
          <h6>{{$ourproject->kf_description}}</h6>
      </div>
      @endforeach

   </div>
  </div>


@endsection