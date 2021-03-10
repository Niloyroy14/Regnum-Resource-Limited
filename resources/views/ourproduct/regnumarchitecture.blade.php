
@extends('master')

@section('title')
 Regnum Architechture-Regnum Resource Limited
@endsection

@section('content')


<div class="container-fluid">
  @foreach($architectures as $architecture)
    <div class="row mt-5 ml-5">
      <div class="col-md-5">
        <h1>{{$architecture->title}}</h1>
        <p>{{$architecture->description}}</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/ourproduct/regnum-architecture/'. $architecture->image)}}" width="87%" alt="Regnum-Resource-Limited">
      </div>
    </div>
@endforeach

 
    <div class="row mt-5">
      <div class="col-md-11">
        <p class="portfolio">Our Portfolio</p>
        <div class="row">
        	<div class="col-md-12 beani">    		
        	<p><button type="button" class="btn btn-success">VIEW All</button>
            @foreach($portfolios as $portfolio)
              <span style="margin-left: 20px;">{{$portfolio->title}}</span>
              @endforeach
            </p>
        	</div>	
        </div>
      </div>
    </div>




    
    <div class="row ml-5 mt-5">

      @foreach($portfolios as $portfolio)

      <div class="col-md-3">
        <div class="wraper1">
            <img src="{{asset('images/ourproduct/regnum-architecture/portfolio/'.$portfolio->image)}}" alt="rsz_picture8.jpg">
            <div class="overlay">
                <div class="imagehover">
                  <i class="fas fa-expand-alt"></i>
                  <p style="margin-left:-46px;margin-top:18px;">{{$portfolio->imagetext}}</p>
              </div> 
            </div>
        </div>
    </div>
      @endforeach

    </div>
  </div>



@endsection