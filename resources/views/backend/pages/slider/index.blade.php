@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Slider
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
              <th>Slider Title</th>
              <th>Slider Description</th>
              <th>Slider Category</th>
              <th>Slider Image</th>
              <th> Slider Priority</th>
              <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($slider as $slider) 
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$slider->title}} </td>
               <td>{{$slider->description}} </td>
              <td>{{$slider->category}} </td>
             
              <td> <img src="{{asset('images/slider/'.$slider->image)}}" width="100"> </td>

              <td>{{$slider->priority}} </td>
              
              <td>
                <a href=" {{ route('admin.slider.edit', $slider->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i> </a> 


                <a href="#deleteModal{{$slider->id}}" data-toggle="modal" class="btn btn-danger"><i  class="fal fa-comment-alt-times"></i></a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.slider.delete',$slider->id)}}"  metod="POST">
                        {{ csrf_field() }}

                    <button type="submit" class="btn btn-danger">Permanent Delete</button>

                   </form>
       
       
      </div>
      <div class="modal-footer">
        
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

               </td>
          
            </tr>

            @endforeach

         </tbody>

         <tfoot> 
            <tr>
              <th>#</th>
              <th>Slider Title</th>
              <th>Slider Description</th>
              <th>Slider Category</th>
              <th>Slider Image</th>
              <th> Slider Priority</th>
              <th> Action </th>
            </tr>
         </tfoot>

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
