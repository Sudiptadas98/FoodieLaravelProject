@extends('layouts.owner')

@section('scripts')
<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
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
        <div class="row">

          <div class="col-md-2">
            
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/ownercover2.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  
                    <img class="avatar border-gray" src="../assets/img/owner.jpg" alt="...">
                    <h5 style="color: #3FB3C3;" class="title">{{ $owner->name }}</h5>
                  
                  <p class="description">
                  {{ $owner->email }}
                  </p>
                </div>
                <p class="description text-center">
                 
                </p>
              </div>
              
            </div>
          </div>
          <div class="col-md-2">
            
          </div>
            
        </div>
          
</div>

@endsection
