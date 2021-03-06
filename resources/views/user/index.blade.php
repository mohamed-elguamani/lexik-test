@extends('layouts.master')
@section('title','User List')
@section('content')

    <div class=" row top-form">

       <a href="{{route('user.create')}}" class="btn btn-primary float-right">+New user</a>

    </div> 

    <div class="row">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Birthday</th>
            <th scope="col">Group</th>

            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach($users as $user)  
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->firstname}} {{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{date('d/m/Y',strtotime($user->birthday))}}</td>
                <td>{{$user->group->name}}</td>
                <td class="actions">
                    <a href="{{route('user.show',$user->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="{{route('user.edit',$user->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
            </tr>
          @endforeach  
        </tbody>
        </table>

    </div>   
@endsection