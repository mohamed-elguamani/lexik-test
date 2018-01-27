@extends('layouts.master')
@section('title','Welcome')
@section('content')

    <div class=" row top-form">
        <div class="col-md-12">
          <form action="{{route('filter')}}" method="get">
            
            <div class="form-group row">
                <div class="col-md-11">
                    <input type="text" class="form-control" id="name" name="filter" placeholder="Filter" value="{{old('filter')}}">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary mb-2"> Filter</button>
                </div>
            </div> 
          </form>
         </div>   
    </div>    

    <div class="row">
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
           <p><strong>No results were found</strong></p>
           <tr>
           @endif 
          @foreach($users as $user)  
            <tr>
               
                <th scope="row">{{$user->group}}</th>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>

                <td class="actions">
                    <a href="{{route('user.show',$user->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="{{route('user.edit',$user->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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

@endsection
