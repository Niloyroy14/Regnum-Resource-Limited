@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Gallery
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Date </th>
              <th>Image</th>
              <th>Button Link</th>
              <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($gallery as $gallery) 
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$gallery->title}} </td>
              <td>{{$gallery->date}} </td>
             
              <td> <img src="{{asset('images/gallery/'.$gallery->image)}}" width="100"> </td>

               <td>{{$gallery->button_link}} </td>

              
              <td style="width:5px;">
                <a href=" {{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i></a> 


                <a href="#deleteModal{{$gallery->id}}" data-toggle="modal" class="btn btn-danger"><i class="fal fa-comment-alt-times"></i> </a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$gallery->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.gallery.delete',$gallery->id)}}"  metod="POST">
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
              <th>Title</th>
              <th>Date</th>
              <th>Image</th>
              <th>Button Link</th>
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
