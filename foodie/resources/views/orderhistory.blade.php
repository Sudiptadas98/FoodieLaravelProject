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
        <h5>Your Order History..</h5>
    </div>
    <br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Ph.number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $key => $item)
    <tr>
      <td>{{$item->created_at}}</td>
      <td>{{$item->pnumber}}</td>
      <td>{{$item->daddress}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
