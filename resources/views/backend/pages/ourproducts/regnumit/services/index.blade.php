@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Regnum IT Service
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
              <th>Service Title</th>
              <th>Service Icon</th>
              <th>Service Description</th>
              <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($itservice as $itservice) 
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$itservice->title}} </td>
               <td>{{$itservice->icon}} </td>
              <td>{{$itservice->description}} </td>

              <td>
                <a href=" {{ route('admin.itservice.edit', $itservice->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i>  </a> 


                <a href="#deleteModal{{$itservice->id}}" data-toggle="modal" class="btn btn-danger"><i  class="fal fa-comment-alt-times"></i></a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$itservice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.itservice.delete',$itservice->id)}}"  metod="POST">
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
              <th>Service Title</th>
              <th>Service Icon</th>
              <th>Service Description</th>
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
