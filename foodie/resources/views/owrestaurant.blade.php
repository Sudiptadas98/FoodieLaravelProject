@extends('layouts.owner')

@section('scripts')
<div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="/owner/profile">
              <i class="nc-icon nc-single-02"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="active">
            <a href="/owner/restaurant">
              <i class="nc-icon nc-diamond"></i>
              <p>Restaurant</p>
            </a>
          </li>
          <li>
            <a href="/owner/orders">
              <i class="nc-icon nc-tile-56"></i>
              <p>Orders</p>
            </a>
          </li>
          <!-- <li>
            <a href="">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li> -->
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
@endsection


@section('content')
<div class="content">
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Your Restaurant Details</h5>
              </div>
              <div class="card-body">
                <form method="post" action="/owner/restaurant">
                @csrf
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Restaurant Name</label>
                        <input type="hidden" name="id" value="{{$restaurants->id}}">
                        <input type="hidden" name="owner_id" value="{{$restaurants->owner_id}}">
                        <input type="text" name="restoname" class="form-control @error('restoname') is-invalid @enderror" placeholder="Enter Restaurant name" value="{{ $restaurants->restoname }}">
                        @error('restoname')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address" value="{{ $restaurants->address }}">
                        @error('address')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    
                    <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Food Items</h5>
                    </div>
                <div class="table-responsive">
                  <table id="myTable" class="table order-list">
                    <thead class=" text-primary">
                      <th>#</th> 
                      <th>Food Name</th>
                      <th>Food Description</th>
                      <th>Price</th>
                      <th class="text-right"><a class="btn btn-primary" id="addrow" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                    </thead>
                    <tbody>
                    @foreach($foods as $key => $item)
                      <tr>
                        <input type="hidden" name="resto_id[]" value="{{$item->resto_id}}">
                        <td><input type="hidden" name="fid[]" value="{{$item->fid}}"></td>
                        <td><input type="text" name="foodname[]" value="{{$item->foodname}}" class="form-control" placeholder="Enter food name"></td>
                        <td><input type="text" name="dept[]" value="{{$item->dept}}" class="form-control" placeholder="Enter description of food"></td>
                        <td><input type="text" name="price[]" value="{{$item->price}}" class="form-control" placeholder="Enter price of food"></td>
                        <td class="text-right"><a class="deleteRow"></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection