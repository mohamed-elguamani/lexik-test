@extends('layouts.master')
@section('title','Welcome')
@section('content')

    <div class=" row">

        <div class="top-actions">

            <a href="{{route('user.create')}}" class="btn btn-primary pull-right">+ New User</a>
            <a href="#" class="btn btn-danger pull-right" data-toggle="modal" data-target="#bulk-delete">Bulk Delete</a>
        </div>   
        
    </div>    

    <div class="row">
        <div class="box-header">
            <h3 class="box-title">List users</h3>
            <div class="box-tools">
                <form action="{{route('filter')}}" method="get">
                    <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="filter" class="form-control pull-right" placeholder="Search">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </form>
            </div>    
        </div>    
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Group</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">E-mail</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

           @if ($users->count()==0)
           <tr>
           <th><strong>No results were found</strong></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <tr>
           @endif 
          @foreach($users as $user)  
            <tr>
               
                <th scope="row">{{$user->group}}</th>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>

                <td class="actions">
                    <a href="{{route('user.show',$user->id)}}"><i class="fa fa-eye text-info" aria-hidden="true"></i></a>
                    <a href="{{route('user.edit',$user->id)}}"><i class="fa fa-pencil-square-o text-success" aria-hidden="true"></i></a>
                    <a href="{{route('user.show',$user->id)}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                </td>
            </tr>
          @endforeach  
        </tbody>
        </table>

        @if ($isFiltered)
        <div class="form-bottom">
            <a href="{{route('home')}}" class="btn btn-info float-right">show all</a>
        </div>    
        @endif

    </div>   

<!-- Bulk delete Modal -->
<div class="modal fade" id="bulk-delete" tabindex="-1" role="dialog" aria-labelledby="bulk-deleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bulk-deleteLabel">Select users to delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('bulk-delete')}}">
        <div class="modal-body">
            
                {{method_field('delete')}}
                {{csrf_field()}}
                <div class="form-group">
                    @foreach ($users as $user)
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name="list[]" value="{{$user->id}}" > {{$user->lastname}}
                            </label>
                        </div>
                    @endforeach
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form> 
    </div>
  </div>
</div>  

@endsection


