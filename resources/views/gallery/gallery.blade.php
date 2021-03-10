@extends('master')


@section('title')
 Gallery-Regnum Resource Limited
@endsection

@section('content')

  <div class="container-fluid">

        <div class="row ml-5 mt-4">

            @foreach($gallery as $gallery)

            <div class="col-md-4">
                <div class="wraper2">
                    <img src="{{ asset('images/gallery/'.$gallery->image)}}" height="450px" alt="rsz_picture8.jpg">
                    <div class="gallary">
                        <div class="overlay1">
                            <div class="imagehover1">
                               <a id="expandimage" > <i class="fas fa-expand-alt"></i></a>
                                <a href="{{$gallery->button_link}}"><i class="fas fa-plus"></i></a>
                            </div>           
                    </div>
                    <div class="content">
                        <h5>{{$gallery->title}}</h5>
                    <p>Gallery.By regnum. {{$gallery->date}}</p>
                    <p style="color:black">Leave a comment</p>
                    <div class="readmore">
                        <button><a href="{{$gallery->button_link}}">Read More</a></button>
                    </div>   
                    </div>
                    </div>
                </div>
            </div>
@endforeach

        </div>

    </div>


@endsection