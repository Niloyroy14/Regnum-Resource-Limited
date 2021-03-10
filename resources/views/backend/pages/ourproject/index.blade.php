@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage OurProject
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
              <th>Category</th>
              <th>Image</th>
              <th>Sub_image</th>
              <th>Ssub_image</th>
              <th>key Feature title</th>
              <th>key Feature Image</th>
              <th>key Feature Description</th>
              <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($ourproject as $ourproject) 
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$ourproject->category}} </td>
              <td> <img src="{{asset('images/ourproject/'.$ourproject->image)}}" width="100"> </td>
               <td> <img src="{{asset('images/ourproject/subimage/'.$ourproject->sub_image)}}" width="100"> </td>
                <td> <img src="{{asset('images/ourproject/s_subimage/'.$ourproject->ssub_image)}}" width="100"> </td>
              
              <td>{{$ourproject->kf_title}} </td>
               <td> <img src="{{asset('images/ourproject/keyfetureimage/'.$ourproject->kf_image)}}" width="100"> </td>

               <td>{{$ourproject->kf_description}} </td>

              
              <td>
                <a href=" {{ route('admin.ourproject.edit', $ourproject->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i></a> 


                <a href="#deleteModal{{$ourproject->id}}" data-toggle="modal" class="btn btn-danger"><i  class="fal fa-comment-alt-times"></i></a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$ourproject->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.ourproject.delete',$ourproject->id)}}"  metod="POST">
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
              <th>Category</th>
              <th>Image</th>
              <th>Sub_image</th>
              <th>Ssub_image</th>
              <th>key Feature title</th>
              <th>key Feature Image</th>
              <th>key Feature Description</th>
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
