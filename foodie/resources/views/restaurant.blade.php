@extends('layouts.app')

@section('content')
<form method="post" action="/restaurant/{restaurants}">
@csrf
<div class="container">
<div class="row">
  <div class="col-lg-8">
    <input type="hidden" name="user_id" value="{{$restaurants->user_id}}">
    <div class="row justify-content-center">
        <h1 name="restoname">{{$restaurants->restoname}}</h1>
    </div>
    <div class="row justify-content-center">
        <p name="email">{{$restaurants->email}}</p>
    </div>
    <div class="row justify-content-center">
        <p name="address">{{$restaurants->address}}</p>
    </div>
  </div>
  @can ('order', $restaurants)
    <div class="col-lg-4">
      <div class="card mb-3">
        <div class="card-body">
        <div class="form-group">
        <label for="exampleInputName1">Del Address</label>
        <input type="text" 
        name="daddress"
        class="form-control @error('daddress') is-invalid @enderror" 
        placeholder="Enter your address"
        value="{{ old('daddress') }}">
        @error('daddress')
        <p class="invalid-feedback">{{ "Address is required." }}</p>
        @enderror
        </div>

        <div class="form-group">
        <label for="exampleInputName1">Ph. Number</label>
        <input type="text"
        name="pnumber"
        class="form-control @error('pnumber') is-invalid @enderror" 
        placeholder="Enter your number"
        value="{{ old('pnumber') }}">
        @error('daddress')
        <p class="invalid-feedback">{{ "Valid number is required." }}</p>
        @enderror
        </div>
        <button type="submit" class="btn btn-dark btn-block waves-effect waves-light">Order Now</button>

        </div>
      </div>
      <!-- Card -->

    </div>
    @endcan
    </div>
  </div>
    <div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Food Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      @can ('order', $restaurants)
      <th scope="col"></th>
      @endcan
      <!-- <th scope="col">Operators</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($foods as $key => $item)
    <tr>
      <td><input type="hidden" name="fid[]" value="{{$item->fid}}"></td>
      <td><input type="hidden" name="foodname[]" value="{{$item->foodname}}">{{$item->foodname}}</td>
      <td>{{$item->dept}}</td>
      <td><input type="hidden" name="price[]" value="{{$item->price}}">{{$item->price}}</td>
      @can ('order', $restaurants)
      <td width="150">
      <div class="input-group">
                      <button type="button" class="btn btn-default btn-xs " onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i  class="fa fa-minus"></i>
                      </button>
                      <input size="1" class="form-control input-number" min="0" name="quantity[]" value="0" type="number">
                      <button type="button" class="btn btn-default btn-xs " onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i  class="fa fa-plus"></i>
                      </button>
                    </div>
      </td>
      @endcan
      <!-- <td><a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td> -->
    </tr>
  @endforeach
  </tbody>
</table>
</form>
</div>
    @can ('update', $restaurants)
    <div class="row justify-content-center">
        <a href="/edit/{{$restaurants->id}}"><button class="btn btn-primary">Edit</button></a>
    </div>
    @endcan
</div>
@endsection
