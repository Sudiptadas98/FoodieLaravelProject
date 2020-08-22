@extends('layouts.app')

@section('content')
<div>
<h1>Edit Restaurant Details..</h1>
</div>
<div>
<form method="post" action="/edit/{restaurants}">
@csrf
  <div class="form-group">
    <label for="exampleInputName1">Restaurant Name</label>
    <input type="hidden" name="id" value="{{$restaurants->id}}">
    <input type="hidden" name="user_id" value="{{$restaurants->user_id}}">
    <input type="text" 
    name="restoname" 
    class="form-control @error('restoname') is-invalid @enderror" 
    value="{{$restaurants->restoname}}" 
    placeholder="Enter restaurant name">
    @error('restoname')
    <p class="invalid-feedback">{{ "Restaurant name is required." }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"
    name="email" 
    class="form-control @error('email') is-invalid @enderror" 
    value="{{$restaurants->email}}" 
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
    <p class="invalid-feedback">{{ "Email is required." }}</p>
    @enderror
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleAddress1">Address</label>
    <input type="text" 
    name="address" 
    class="form-control @error('address') is-invalid @enderror" 
    value="{{$restaurants->address}}" id="exampleInputAddress1" placeholder="Enter address">
    @error('address')
    <p class="invalid-feedback">{{ "Address is required." }}</p>
    @enderror
  </div>
  
  <div class="form-group">
<table id="myTable" class="table order-list">
<thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Food Name</th>
      <th>Food Description</th>
      <th>Price</th>
      <th><a class="btn btn-primary" id="addrow" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
    </tr>
  </thead>
  <tbody>
  @foreach($foods as $key => $item)
    <tr>
      <input type="hidden" name="resto_id[]" value="{{$item->resto_id}}">
      <td><input type="hidden" name="fid[]" value="{{$item->fid}}"></td>
      <td><input type="text" name="foodname[]" value="{{$item->foodname}}" class="form-control" placeholder="Enter food name"></td>
      <td><input type="text" name="dept[]" value="{{$item->dept}}" class="form-control" placeholder="Enter description of food"></td>   
      <td><input type="text" name="price[]" value="{{$item->price}}" class="form-control" placeholder="Enter price of food"></td>
      <td><a class="deleteRow"></a></td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
</div>
@endsection
