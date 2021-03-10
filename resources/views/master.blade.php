<!DOCTYPE html>
<html>
<head>
     
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>  @yield('title') </title>
   
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> -->
      <!--flickity carsoul  -->
	 <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
       <!--fontawesome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!--logo carsoul  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
   <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>


<div class="wrapper">


   @include('partial.nav')

   @yield('content')
   
   @include('partial.footer')


</div>


								

  <!--logo carsoul  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<!-- myjavascript -->
<script src="js/myjavascript.js"> </script>

<!--bootstrap javascrip -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 



<!--- flickity plugin js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<!-- fontawesome -->
    <script src="https://use.fontawesome.com/31786313dd.js"></script>


 @yield('scripts')    <!-- navbar hover (nav.blade.php) -->


</body>
</html>