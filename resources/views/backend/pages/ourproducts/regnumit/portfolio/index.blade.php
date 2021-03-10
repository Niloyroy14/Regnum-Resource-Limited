@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Regnum IT Portfolio
        </div>
        <div class="card-body">
          
          @include('backend.partial.messages')

          <table class="table table-hover table-striped"  id="dataTable">
            <thead>
            <tr>
              <th>#</th>
               <th>Portfolio Button</th>
               <th>Portfolio Category</th>
               <th>Button Class</th>
               <th>Button Data Fiter</th>
               <th>Portfolio Data Fiter</th>
               <th>Portfolio Image</th>
               <th>Potfolio Image Title</th>
               <th> Action </th>
            </tr>
            </thead>
           
           <tbody>
          @foreach($itportfolio as $itportfolio) 
            <tr>
             <td>{{$loop->index+1}}</td>
             <td>{{$itportfolio->button}} </td>
              <td>{{$itportfolio->category}} </td>
              <td>{{$itportfolio->class}} </td>
              <td>{{$itportfolio->butn_data_filter}} </td>
              <td>{{$itportfolio->data_filter}} </td>
             
             
              <td> <img src="{{asset('images/ourproduct/regnumit/portfolio/'.$itportfolio->image)}}" width="100"> </td>

               <td>{{$itportfolio->imagetitle}} </td>
              
              <td>
                <a href=" {{ route('admin.itportfolio.edit', $itportfolio->id) }}" class="btn btn-success"><i class="fal fa-pencil"></i>  </a> 


                <a href="#deleteModal{{$itportfolio->id}}" data-toggle="modal" class="btn btn-danger"><i  class="fal fa-comment-alt-times"></i> </a>

                <!-- Modal -->
                 <div class="modal fade" id="deleteModal{{$itportfolio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                        <div class="modal-body">

                    <form action="{{route('admin.itportfolio.delete',$itportfolio->id)}}"  metod="POST">
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
              <th>Portfolio Button</th>
              <th>Portfolio Category</th>
              <th>Button Class</th>
              <th>Button Data Fiter</th>
              <th>Portfolio Data Fiter</th>
              <th>Portfolio Image</th>
              <th>Potfolio Image Title</th>
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
