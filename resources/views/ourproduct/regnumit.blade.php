

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Regnum IT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.0.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      
       <div class="header-info">
       <h3></h3>
       </div>
      <h1 class="logo">  
        <a href=""><img src="{{asset('images/'.'logo2.png')}}"></a>
      </h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#work">PortFolio</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/regnum.png)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
           <h1 class="mb-4"style="color: white;">WELCOME TO <span style="color: rgb(243, 97, 90);">REGNUM IT LIMITED</span></h1>
           <p style="font-size:22px;">Modern Creative Software Company</p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
   <div class="row ml-5 mt-1">
     <div class="col-md-6">
     <h1>About Us</h1>

     <p class="mt-4" style="text-align: justify;">Regnum IT Limited is a sister concern of Regnum Resource Ltd and Sony Chocolate Industries Ltd. Regnum Resource is based on Traffic Management Products and Systems technologies,highly specialised on controlling overload trucks. Earlier (2005) we start our service.<br>Regnum IT Limited is the complete solution of your thinking. Regnum IT Limited has so far portrayed brilliant illustration of tremendous growth and outstanding service with innovative ideas and up to date client support.”Our main aim was to stop problems happening in the first place”.REGNUM IT Limited is the power package of innovative ideas. AT Rengum IT Limited customer satisfaction comes first.Our motto is to make the lives of our customers simpler through the use of modern technology.Our services have helped business owners and companies complete a wide variety of tasks such as administrative duties, ecommerce integration, andriod app development and IT Support. REGNUM IT has world class quality management tools to ensure consistent quality of its products and processes. REGNUM IT Limited One of the most prominent and updated companies which deals with software & IT related issues.When You choose , REGNUM IT Limited you get a dedicated team the collective intelligence, determination and people who have efficiency in problem solving. You own everything we build, we treat every app like it’s our own – we sweat every detail and aren’t satisfied until it is perfect</p>
     </div>

       <div class="col-md-6 mt-5">
     	
     <img src="{{ asset('images/regnumit/'.'about.jpg')}}" height="430px"width="90%">

     </div>
    </div>
   </div>
    </section><!-- End About Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row mt-4">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
   @foreach(App\Models\RegnumITService::orderBy('id','asc')->get() as $itservice)
          <div class="col-md-4">
            <div class="servicebox">
            <div class="row">
              <div class="col-md-1">
              <div class="serviceico">
                <span class=""><i class="{{$itservice->icon}}"></i></span>
              </div>
              </div>
               <div class="col-md-3">
              <div class="servictitle">
                <h2 class="setitle">{{$itservice->title}}</h2>
                <p class="setext">{{$itservice->description}} </p>
              </div>
            </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
        </div>
    </section><!-- End Services Section -->




    
    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div  class="col-sm-12">
            <div class="title-box text-center">
           
              <h3 class="title-a">
               Our Portfolio
              </h3>
              
              <div class="line-mf"></div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
               @foreach(App\Models\RegnumITPortfolio::whereIn('id',[1, 2, 3,4])->get() as $itportfolio)
              <li data-filter="{{$itportfolio->butn_data_filter}}" class="{{$itportfolio->class}}">{{$itportfolio->button}}</li>
              @endforeach
            </ul>
          </div>
        </div>

          </div>
        </div>
        <div class="row portfolio-container mt-3" data-aos="fade-up" data-aos-delay="200">
        
         @foreach(App\Models\RegnumITPortfolio::orderBy('id','asc')->get() as $itportfolio)

          <div class="col-md-4 portfolio-item {{$itportfolio->data_filter}}">
            <div class="work-box">
                <div class="work-img">
                  <img src="{{ asset('images/ourproduct/regnumit/portfolio/'.$itportfolio->image)}}"  alt="" class="img-fluid">
                </div>
            
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{$itportfolio->imagetitle}}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{$itportfolio->imagetitle}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach



        </div>
      </div>
    </section><!-- End Portfolio Section -->




    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

          	<div class="title-box text-center">
              <h3  style="color: white;" class="title-a">
                TESTIMONIALS
              </h3>
              <div class="line-mf"></div>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

     @foreach(App\Models\RegnumITTestomonial::orderBy('id','asc')->get() as $ittestomonial)

              	<div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="{{ asset('images/ourproduct/regnumit/testomonial/'.$ittestomonial->image)}}" height="150px"  width="150px" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">{{$ittestomonial->title}}</span>
                      <p>{{$ittestomonial->subtitle}} </p>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        {{$ittestomonial->description}}
                      </p>
                    </div>
                  </div>
                </div>
        @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->





    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

         <div class="title-box text-center mt-5">
              <h3 class="title-a">
                Contact Us
              </h3>
              <p class="subtitle-a">
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              </p>
              <div class="line-mf"></div>
            </div>

        

        

            <div class="row">
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fal fa-map-marker-alt"></i>
                  <h3>ADDRESS</h3>
                  <p>Rahman Regnum Center, Level 4, Bir Uttam Mir Shaukat Road, Tejgaon Commercial Area, Dhaka 1208</p>
                </div>
              </div>
                 <div class="col-md-4">
                <div class="info-box">
                  <i class="fal fa-phone-alt"></i>
                  <h3>PHONE NUMBER</h3>
                  <p>01722 813 938</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box ">
                  <i class="fal fa-envelope"></i>
                  <h3>EMAIL</h3>
                  <p>info@regnumit.com</p>
                </div>
              </div>
            </div>

         
      <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            @include('partial.messages')
            <div class="contactstyle">
            <form action="{{ route('admin.itcontactus.store') }}" method="post" enctype="multipart/form-data" >
              {{ csrf_field() }}
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required >
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success">Send Message</button>
          </div>
         </form>
         </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->






  <!-- ======= Footer ======= -->

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="footer-info col-md-4 ">
            <h3 style="color:white; font-size: 45px;">Regnum IT</h3>
            <p class="mt-2">
             REGNUM IT LTD. is a professional web design company providing web development solutions for corporate or individuals interested in outsourcing their web design and web application development needs.
            </p>
          </div>

          <div class=" col-md-4 footer-links">
            <div class="footerlinks">
            <h4 style="color: white;">Useful Links</h4>
            <ul>
              <li><i class="fal fa-greater-than"></i><a href="#">Home</a></li>
              <li><i class="fal fa-greater-than"></i> <a href="#about">About us</a></li>
              <li><i class="fal fa-greater-than"></i> <a href="#services">Services</a></li>
              <li><i class="fal fa-greater-than"></i> <a href="#work">Portfolio</a></li>
              <li><i class="fal fa-greater-than"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>
          </div>

          <div class=" col-md-4 footer-contact">
            <h4 style="color: white;">Contact Us</h4>
              <p class="mt-4">
             Rahman Regnum Center, <br>
              Level 4, Bir Uttam Mir Shaukat Road,<br>
              Tejgaon Commercial Area, Dhaka 1208 <br>
              <strong>Phone:</strong> 01722 813 938<br>
              <strong>Email:</strong> info@regnumit.com<br>
            </p>
         <div class="sociallinks"> 
        <div class="social-links pt-3 ">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
       </div>
          </div>
          </div>

        </div>
      </div>
    </div>
 
   <div class="footer-bottom" >
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">© Copyright Regnum IT. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  </footer><!-- End Footer -->


  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>


	<!-- fontawesome -->
    <script src="https://use.fontawesome.com/31786313dd.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

