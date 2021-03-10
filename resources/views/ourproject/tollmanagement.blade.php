@extends('master')

@section('title')
 Toll Management System-Regnum Resource Limited
@endsection

@section('content')

<div class="container-fluid toll">
   @foreach($ourproject as $ourproject)
    <div class="row ml-5 mt-4">
      <div class="col-md-6">
        <h2>{{$ourproject->category}}</h2>
        <p class="mt-4">Regnum Resource Limited “Toll Management Solutions” is one of the best toll management systems available today. It is a perfect blend of machine, technology and man to make life easier for man. Whenever we come across the word “Toll Booth” or “Toll Plaza”, the very first thing that comes to our mind is the long lines of the vehicles waiting to pay the toll tax and proceed ahead. Once you proceed after paying the toll, you get a very smooth highway with smooth flowing traffic which is literally gliding on the road. The time you might save by using these roads is compensated by the time you waited on the toll plaza to pay the toll tax.</p>
      </div>  
     
      <div class="col-md-6">
          <img src="{{ asset('images/ourproject/'.$ourproject->image)}}" width="82%" alt="chars.jpg">
      </div> 
      
    </div>
    @endforeach

     <div class="row ml-5">
      <h2 class="ml-3">Solutions Overview:</h2>
      <div class="col-md-11">
      <p class="mt-2">Electronic toll collection (ETC) is a technology enabling the electronic collection of Toll Payments, it has been applied to Few Highways and Expressways for faster toll collection and reduced traffic congestion, The current system of collection of Toll is on basis of manual transaction, Each vehicle has to stop at Toll Plaza for payment thus causing Traffic Jams, Increase in pollution and wasting of precious time of Motorist but the advantage of ETC technology is that it eliminates congestions near Toll Booth, An Radio Frequency Identification (RFID TAG) is installed on each vehicle with Read/Write Memory, As The vehicle approaches near the Toll system, the computerized units placed near toll plaza in dedicated ETC lane receives the identifier signal and calculates the toll to be debited and electronically debits the toll on the account of the particular vehicle enrolled in the program.</p>

        <p>The system detects the cars before it enters the toll booth and measures its length, width, height and also checks the number of axles and the distance between the axles automatically beforehand. All the above data is fed in the Main control’s database and the system segregates the vehicle type on its own and calculates the toll charge on its own before the vehicle reaches the counter. This automatic generation of toll charge saves a lot of time and the system also saves these details for future references.</p>
      </div> 
      </div> 


      <div class="row ml-5 mt-4">
      @foreach(App\Models\OurProject::orderBy('id','asc')->where('category','Toll Management System')->get() as $ourproject)
      <div class="col-md-6">
        <img src="{{ asset('images/ourproject/subimage/'.$ourproject->  sub_image)}}" width="100%"alt="">
      </div>
      @endforeach
      <div class="col-md-5 mt-4 pt-5">
        <h4>Main Advantages of ETC Technology :</h4>
       
   <p class="mt-4">Ø Reduce time for collection of Toll at Toll Plaza.<br>
Ø Smooth traffic flow at toll gates.<br>
Ø Reduction of Management costs.<br>
Ø Hassle-Free Management.<br>
Ø Cashless Experience.<br>
Ø Improved Transparency.<br>
Ø The well timed notification to Users Via the Push notification that informs them about their current account status.</p>
       
      </div>
  </div>
  <div class="row ml-5">
  	<div class="col-md-11">
      <h2 class="mt-5">Application Details:</h2> 
      <p class="mt-4">Charles Walton is known as the first patent holder for the RFID Device. Many individuals contributed to the invention of the RFID, but Walton was awarded ten patents in all for various RFID-Related devices, including his key 1973 design for a ‘ ’ Portable radio frequency emitting identifier’ ’ this patent was awarded in 1983 and was the first to bear the acronym ‘ ’ RFID’ .’ This technology is used for tracing, tracking and identifying objects, RFID System consists of a transponder (tag), reader, antenna and host computer. The Tags are a microchip combined with an antenna in a toolkit. The system contains a microchip which contains memory and logic circuits to receive and send data to the reader. These tags are classified as either active or passive tags. The batteries in the active tags provide a longer range and larger memories and on other hand the passive tags are powered by the signals of the reader and hence have to read short Range. The technical differences between Tag types do not affect their ability to collect travel time data, the necessary UID data are transmitted from the transponders to the road side units regardless of transponder type.</p>
      <p class="mt-3">The reader contains two components a decoder along with the RF module and an antenna to send and receive data from the tag, the desktop host acts as the interface for IT Platform for transferring information from RFID system to end user. This host then transforms the information received from the RFID tag into usable resource for the end user.</p>
  </div>
   </div>
</div>



@endsection