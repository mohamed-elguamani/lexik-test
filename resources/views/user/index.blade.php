@extends('layouts.master')
@section('title','User List')
@section('content')

    <div class="top-form">

       <a href="{{route('user.create')}}" class="btn btn-primary float-right">+New user</a>

    </div> 

@endsection