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
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Orders</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Date & Time</th>
                      <th>Name</th>
                      <th>Number</th>
                      <th>Address</th>
                      <th class="text-right"></th>
                    </thead>
                    <tbody>
                    @foreach($orders as $key => $item)
                      <tr>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->oname}}</td>
                        <td>{{$item->pnumber}}</td>
                        <td>{{$item->daddress}}</td>
                        <td class="text-right"><a class="btn btn-primary" href="/owner/{{$item->oid}}">Details</a></td>
                      </tr>
                    @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
            
@endsection