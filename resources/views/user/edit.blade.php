@extends('layouts.master')
@section('title','Edit user')
@section('content')

<div class="row">

    <div class="col-md-8 offset-md-2">
        <form method="post" action="{{Route('user.update',$user->id)}}">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" value="{{$user->firstname}}">
            </div>    
            <div class="form-group">
            
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" value="{{$user->lastname}}">
            </div> 
            <div class="form-group">
            
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday" value="{{$user->birthday}}">
            </div> 
            <div class="form-group">
                <select class="form-control" id="group" name="group">
                <option value="{{$user->group_id}}">{{$user->group->name}}</option>  
                @foreach ($groups as $group)
                    @if ($group->id!=$user->group_id)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endif
                    
                @endforeach  
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>    


</div>


@endsection