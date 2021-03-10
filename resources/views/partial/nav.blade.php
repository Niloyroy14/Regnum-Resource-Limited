
<section class="topsection py-0">
  
  
  <div class="row ">
		<div class="col-md-6 ml-5 contantno">
			<p class="ml-5">	<i class="fa fa-phone"></i><span class="ml-1" style="color:#fff;">+880-1312-081624</span>	
		
				<span class="ml-2"><a href=""><i class="fa fa-envelope" style="color: black;"></i></a><span class="ml-1" style="color:#282923;">centre@regnum-group.com</span></span></p>
			</div>		
		

		<div class="col-md-4 mt-2 ml-5">
			<div class="sociallogo">
				<ul>
				<li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href=""><i class="fa fa-linkedin"></i></a></li>
				<li><a href=""><i class="fa fa-instagram"></i></a></li>
				<li><a href=""><i class="fa fa-skype"></i></a></li>
			   </ul>
			</div>		
		</div>
 </div>

</section>


<!-- navbar -->
 <nav class="navbar navbar-light  navbar-expand-md py-0 sticky-top" >
  <div class="container-fluid">
    <a class="" href="#">
      <img class=" logoimg" src="{{ asset('images/'.'logo.png')}}" alt="forecastr logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  navbar-center">
        <li class="nav-item">
          <a class="nav-link  
          @if(Route::is('index'))
           active
          @endif
          " href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item   dropdown">
          <a class="nav-link
            
          @if(Route::is('company.background') || Route::is('managing.director')|| Route::is('director.message') )
           active
          @endif

           " href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
             <a class="dropdown-item" href="{{route('company.background')}}">Company Background</a>
            <a class="dropdown-item" href="{{route('managing.director')}}">Managing Director message</a>
            <a class="dropdown-item" href="{{route('director.message')}}">Director Message</a>
          </div>
        </li>

        <li class="nav-item  dropdown">
          <a class="nav-link 
           
          @if(Route::is('about.alexload') || Route::is('about.tollmanagement')||  Route::is('about.smart_marketing') )
           active
          @endif

          " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Projects
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="{{route('about.alexload')}}">Axle Load Control System</a>
            <a class="dropdown-item" href="{{route('about.tollmanagement')}}">Toll Management System</a>
            <a class="dropdown-item" href="{{route('about.smart_marketing')}}">Smart Parking Solution</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link 

           @if(Route::is('product.regnumit') || Route::is('product.regnum-architecture'))
           active
           @endif

          " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="{{route('product.regnumit')}}">Regnum IT</a>
            <a class="dropdown-item" href="{{route('product.regnum-architecture')}}">Regnum Architecture</a>
           
          </div>
        </li>
         <li class="nav-item">
          <a class="nav-link
           
          @if(Route::is('gallery'))
           active
          @endif

          " href="{{route('gallery')}}">Gallery</a>
        </li>
         <li class="nav-item">
          <a class="nav-link
           
          @if(Route::is('contact'))
           active
          @endif

          " href="{{route('contact')}}">Contact Us</a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>



@section('scripts')
<script type="text/javascript">

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";
 
$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});







 /*active class jquery*/ 

  

</script>




@endsection


