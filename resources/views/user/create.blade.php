@extends('layouts.master')
@section('title','New User')
@section('content')

<div class="row">

    <div class="col-md-8 offset-md-2">
        <form method="post" action="{{Route('user.store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" value="{{old('firstname')}}">
            </div>    
            <div class="form-group">
            
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" value="{{old('lastname')}}">
            </div> 
            <div class="form-group">
            
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday" value="{{old('birthday')}}">
            </div> 
            <div class="form-group">
                <select class="form-control" id="group" name="group">
                <option value="">select group</option>  
                @foreach ($groups as $group)
                    <option value="{{$group->id}}">{{$group->name}}</option>
                @endforeach  
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>    


</div>


@endsection