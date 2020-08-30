@extends('layouts.user')

@section('content')
<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
                <div class="typography">
								  <h1 class="mb-10">Your Order Details</h1>
								  <!-- <p>Delicious Receipes</p> -->
                </div>
							</div>
						</div>
					</div>					
					<!-- <div class="row"> -->
          <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Your Address :</h5></label>
                <div class="col-sm-4">
                    <p class="form-control-plaintext" name="daddress">{{$od->daddress}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Ph. Number :</h5></label>
                <div class="col-sm-4">
                    <p class="form-control-plaintext" name="pnumber">{{$od->pnumber}}</p>
                </div>
                </div>

        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
  @php
    $total = 0;
  @endphp
    @foreach($odd as $key => $item)
    <tr>
      <th scope="row"></th>
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
<div class="row d-flex justify-content-center">
  <div class="title text-center">
    <h4 color:#FF0000>Total: ₹{{ $total }}</h4>          
  </div>
    <!-- <h4>Total: ₹{{ $total }}</h4> -->
</div>
<br>
<br>
<div class="row d-flex justify-content-center">
  <div class="title text-center">
    <a href="/home"><button class="btn btn-outline-dark">Back to home page</button></a>          
  </div>
    <!-- <a href="/home"><button class="btn btn-outline-dark">Back to home page</button></a> -->
</div>

				</div>	
			</section>

<!-- <div class="container">
    <div class="row justify-content-center">
        <h1>Your Order Details..</h1>
    </div>
        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Your Address :</h5></label>
                <div class="col-sm-4">
                    <p class="form-control-plaintext" name="daddress">{{$od->daddress}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Ph. Number :</h5></label>
                <div class="col-sm-4">
                    <p class="form-control-plaintext" name="pnumber">{{$od->pnumber}}</p>
                </div>
                </div>

        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
  @php
    $total = 0;
  @endphp
    @foreach($odd as $key => $item)
    <tr>
      <th scope="row"></th>
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
    <h4>Total: ₹{{ $total }}</h4>
</div>
<br>
<br>
<div class="row justify-content-center">
    <a href="/home"><button class="btn btn-outline-dark">Back to home page</button></a>
</div>


</div> -->

@endsection