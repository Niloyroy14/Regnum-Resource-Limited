@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Regnum IT ContactUs
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($itcontactus as $itcontactus) 
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$itcontactus->name}} </td>
              <td>{{$itcontactus->email}} </td>
              <td>{{$itcontactus->subject}} </td>
              <td>{{$itcontactus->message}} </td>

              <td>
                <a href=" {{ route('admin.itcontactus.edit', $itcontactus->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i> </a> 


                <a href="#deleteModal{{$itcontactus->id}}" data-toggle="modal" class="btn btn-danger"><i  class="fal fa-comment-alt-times"></i></a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$itcontactus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.itcontactus.delete',$itcontactus->id)}}"  metod="POST">
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
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
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
