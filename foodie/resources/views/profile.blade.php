@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <h3 name="name">{{$user->name}}</h3>
    </div>
    <div class="row justify-content-center">
        <p name="email">{{$user->email}}</p>
    </div>
    <br>
    <div class="row justify-content-center">
        <h5>Your Restaurants..</h5>
    </div>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th scope="col">Restaurant</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($restaurants as $key => $item)
    <tr>
      <td></td>
      <td><a href="/restaurant/{{$item->id}}">{{$item->restoname}}</a></td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
        
    
</div>
@endsection