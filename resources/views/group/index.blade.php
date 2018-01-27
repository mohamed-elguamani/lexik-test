@extends('layouts.master')
@section('title','Group List')
@section('content')

    <div class="row top-form">
        
        <form class="form-inline" method="post" action="{{route('group.store')}}">
            {{csrf_field()}}
            <div class="form-group mx-sm-3 mb-2">
                <label for="name" class="sr-only">Group Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name group">
            </div>
            <button type="submit" class="btn btn-primary mb-2"> New Group</button>
        </form>


    </div>   

    <div class="row">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Nom</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach($groups as $group)  
            <tr>
                <th scope="row">{{$group->id}}</th>
                <td>{{$group->name}}</td>
                <td>{{$group->created_at}}</td>
                <td>@mdo</td>
            </tr>
          @endforeach  
        </tbody>
        </table>

    </div>       

@endsection
