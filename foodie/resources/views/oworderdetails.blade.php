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
          <li>
            <a href="/owner/restaurant">
              <i class="nc-icon nc-diamond"></i>
              <p>Restaurant</p>
            </a>
          </li>
          <li class="active">
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Order Details</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Food Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total price</th>
                    </thead>
                    <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($orderdetails as $key => $item)
                      <tr>
                        <td>{{$item->ofoodname}}</td>
                        <td>{{$item->ofprice}}</td>
                        <td>{{$item->ofquantity}}</td>
                        <td>{{$item->oftprice}}</td>
                      </tr>
                      @php
                        $total += $item->oftprice;
                      @endphp
                    @endforeach
                      
                    </tbody>
                  </table>
                  <div class="row justify-content-center">
                    <h4 style="color: #3FB3C3;">Total : </h4>
                    <h4 style="color: #3FB3C3;">  ₹{{ $total }}</h4>
                  </div>
                </div>
                <a class="btn btn-primary" href="/owner/orders"><i class="fa fa-arrow-left"></i>       Back</a>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
@endsection