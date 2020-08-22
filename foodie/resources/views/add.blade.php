@extends('layouts.app')

@section('content')
<div>
<h1>Add Restaurant Details..</h1>
</div>
<div>
<form method="post" action="add">
@csrf
  <div class="form-group">
    <label for="exampleInputName1">Restaurant Name</label>
    <input type="text" 
    name="restoname" 
    class="form-control @error('restoname') is-invalid @enderror" 
    placeholder="Enter restaurant name"
    value="{{ old('restoname') }}">
    @error('restoname')
    <p class="invalid-feedback">{{ "Restaurant name is required." }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"
    name="email" 
    class="form-control @error('email') is-invalid @enderror"
    value="{{ old('email') }}" 
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
    value="{{ old('address') }}"
    id="exampleInputAddress1" placeholder="Enter address">
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
    <tr>
      <td>
      <input type="hidden" size="1"  name="fid[]">
      </td>
      <td>
      <input type="text" 
      name="foodname[]" 
      class="form-control @error('foodname[]') is-invalid @enderror" 
      placeholder="Enter food name">
      @error('foodname[]')
      <p class="invalid-feedback">{{ "Food name is required." }}</p>
      @enderror
      </td>
      <td><input type="text" 
      name="dept[]" 
      class="form-control @error('dept[]') is-invalid @enderror" 
      placeholder="Enter description of food">
      @error('dept[]')
      <p class="invalid-feedback">{{ "Food description is required." }}</p>
      @enderror
      </td>   
      <td><input type="text" 
      name="price[]" 
      class="form-control @error('price[]') is-invalid @enderror" 
      placeholder="Enter price of food">
      @error('price[]')
      <p class="invalid-feedback">{{ "Food price is required." }}</p>
      @enderror
      </td>
      <td><a class="deleteRow"></a></td>
    </tr>
  </tbody>

</table>

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
