@extends('layouts.master')
@section('title','User Infos')
@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card text-center">
            <div class="card-header">
                {{$user->firstname}} {{$user->lastname}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$user->email}}</h5>
                <h5 class="card-title">{{$user->birthday}}</h5>
                <p class="card-text">This user is member of <strong>{{$user->group->name}}</strong> group</p>
                
            </div>
            <div class="card-footer text-muted">
                <form action="{{route('user.destroy',$user->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <button type="submit" class="btn btn-danger">Delete this user</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection