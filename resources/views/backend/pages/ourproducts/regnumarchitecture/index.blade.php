@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Regnum Architecture
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
              <th>Architecture Title</th>
              <th>Architecture Description</th>
              <th>Architecture Image </th>
              <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($architecture as $architecture) 
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$architecture->title}} </td>
              <td>{{$architecture->description}} </td>
          
             
              <td> <img src="{{asset('images/ourproduct/regnum-architecture/'.$architecture->image)}}" width="100"> </td>

               


              <td>
                <a href=" {{ route('admin.architecture.edit', $architecture->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i> </a> 


                <a href="#deleteModal{{$architecture->id}}" data-toggle="modal" class="btn btn-danger"><i  class="fal fa-comment-alt-times"></i> </a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$architecture->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.architecture.delete',$architecture->id)}}"  metod="POST">
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
              <th>Architecture Title</th>
              <th>Architecture Description</th>
              <th>Architecture Image </th>
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
