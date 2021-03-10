@extends('master')

@section('title')
 Signning ceremony of Axle load control station at Sitakund-…-Regnum Resource Limited
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row ml-5 mt-5">
            <div class="col-md-11">
                <div class="headers1">
                    <h2 class="mt-3">SIGNNING CEREMONY OF AXLE LOAD CONTROL STATION AT SITAKUND</h2>
                <p> <a href="{{route('index')}}">Home /</a> <a href=""> Project/ </a> <span> Signning ceremony of Axle load…</span> </p>
                </div> 
            </div>
        </div>
        <div class="row ml-5 mt-3">
            <div class="col-md-12 signning">
                <img src="{{ asset('images/Gallery/'.'1.jpg')}}" alt="4-Copy-1.jpg">
                <p class="mt-4" >Category: <a href="">Gallery . </a>  <a href="">By regnum . </a> November 5, 2020 <a href=""> Leave a comment</a></p>
                <h3 class="mt-5">Leave a Reply</h3>
                <p class="paraghaph">Your email address will not be published. Required fields are marked *</p>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="comment"></textarea>
                <input type="text" class="form-control in" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name*">
                <input type="text" class="form-control in" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email*">
                <input type="text" class="form-control in" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Website">
                <div class="checkbox mt-4">
                <input class="mt-2" type="checkbox" aria-label="Checkbox for following text input">
                <p class="ml-3" >Save my name, email, and website in this browser for the next time I comment.</p>
                </div>
                <button type="button" class="btn">Post Comment</button>
            </div>
           <!-- <div class="col-md-3">

                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Type and hit enter ..." aria-label="Search"
                      aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>  
                    
                  <div class=" ml-4 mt-5 undersearch">
                    <h5 >Recent Posts</h5>  
                    <a class="mt-4"href="">Hello World</a> 
                    </div> 
                    <div class=" ml-4 mt-5 undersearch">
                        <h5>Recent Comments</h5>   
                        <a class="mt-4" href="">A WordPress Commenter on</a> <a href="">Hello world!</a>
                        </div>        
            </div>-->
        </div>
    </div>


@endsection