
@extends('master')

@section('title')
  Regnum Resource Limited-Quality Design & technology
@endsection

@section('content')

<!-- start slidebar -->


<div class="row ">
  <div class="col-md-12">

 
<div class="main">
  <div class="slider-outer">
    <div class="slider">
      
        @foreach(App\Models\Slider::orderBy('priority','asc')->where('category','Top_slider')->get() as $top_category)

      <div class="slide-item">
        <span class="slide-image" style="background-image: url('{{ asset('images/slider/'.$top_category->image)}}');"></span>

       <!-- <div class="carousel-caption d-none d-md-block">
          <h1 class="lead">{{$top_category->title}}</h1>
          <p>{{$top_category->description}}</p>
          <h5>VIEW DETAILS</h5>
        </div> -->

      </div>
      @endforeach
          
    </div>
  </div>
</div>

</div>

</div>




<!--End sidebar+content-->

<section class="middlepoint">
	<div class="row ml-5">
		<div class="col-md-6 mt-4">
			
			<h1>Mission</h1>
			<p>Our mission is to be the prime development partner of national highways specially, in the field of safety management with quality and modern technological solutions.</p>
           
             
             <br>
             <br>
           
           <h1>Vision</h1>
			<p>We look forward to be at the peak of the National Roads & Highways stake- holders’ choices by providing intelligent traffic solutions, road safety, load control and live video &data monitoring systems.</p>
        
		</div>

		<div class="col-md-6">
			
           <iframe width="97%" height="430" src="https://www.youtube.com/embed/bWX0Kt2SJ_8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		</div>
	</div>
</section>







<section class="solutions"> 
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">     
   <h2>Solutions We Provide...</h2>
   
   <div class="post_slider">
   <i class="fas fa-chevron-left prev"></i>
   <i class="fas fa-chevron-right next"></i>
  
    <div class="post_wrapper mt-2">
      
   @foreach(App\Models\Slider::orderBy('priority','asc')->where('category','solution')->get() as $so_category)

     <div class="post">
      <img src="{{ asset('images/slider/'.$so_category->image)}}">
      <h4>{{ $so_category->title}}</h4>
      <p> {{$so_category->description}}</p>
     </div>

    @endforeach

      

    </div>
  </div>
  </div>
</div>
</div>



</section>




<section class="certificate">
	<div class="row mt-4">
  <div class="col-md-12">       
			<h1 class="mt-5">Certificates</h1>
           
			<p>Regnum Resource Ltd. by its quality services has by now standardized and certified by ISO, CMMI-Level-3,IAS and Roads and Highways Department of Bangladesh.</p>


				
   <div class="mycertcarsoul">
  <div class="carousel"   data-flickity='{ "lazyLoad":2,  "autoPlay": 1500}'>
 

    @foreach(App\Models\Slider::orderBy('priority','asc')->where('category','certificate')->get() as $cer_category)
  <div class="carousel-cell" >
    <img class="carousel-cell-image"
    data-flickity-lazyload="{{ asset('images/slider/'.$cer_category->image)}}" />
  </div>

    @endforeach
  
  </div>	
</div>	
</div>	
</div>

</section>



<!-- our parntner--->


<div class="container">
   <div class="partner">
  <div class="row mt-5">
    <div class="col-md-12">
      <h1 class="mt-5">Our Partners</h1>
        
         <div class="logoslider mt-3">
          
          @foreach(App\Models\Slider::orderBy('priority','asc')->where('category','partner')->get() as $part_category)

           <div class="item">
             <img src="{{ asset('images/slider/'. $part_category->image)}}">
          </div>

           @endforeach
           
            </div>
            </div>
  </div>
</div>
</div>










@endsection

