@extends('layouts.app')

@section('content')
<div>
  <h1>List of Restaurants..</h1>
</div>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Restaurant</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <!-- <th scope="col">Operators</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($restaurants as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><a href="/restaurant/{{$item->id}}">{{$item->restoname}}</a></td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <!-- <td><a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td> -->
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection
