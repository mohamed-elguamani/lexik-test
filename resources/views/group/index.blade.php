@extends('layouts.master')
@section('title','Group List')
@section('content')

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
