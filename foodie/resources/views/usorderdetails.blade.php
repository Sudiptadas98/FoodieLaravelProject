@extends('layouts.user')

@section('content')

<section class="team-area section-gap" id="chefs">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
                <div class="typography">
								  <h1 class="mb-10">Order Details</h1>
								  <!-- <p>Delicious Receipes</p> -->
                </div>
							</div>
						</div>
					</div>						

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
                    
                    <!-- <a class="btn btn-primary" href="#"><i class="fa fa-arrow-left"></i>       Back</a> -->
                  </div>
                  <br>
                  <br>
                  <div class="row justify-content-center">
                    
                    <a class="genric-btn info-border circle arrow" href="/orderhistory">BACK<span class="lnr lnr-arrow-left"></span></a>
                  </div>
                </div>
                <!-- <a class="btn btn-primary" href="/owner/orders"><i class="fa fa-arrow-left"></i>       Back</a> -->
              </div>

				</div>	
			</section>




    
        
    

@endsection