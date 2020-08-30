@extends('layouts.user')

@section('content')

<section class="team-area section-gap" id="chefs">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
                <div class="typography">
								  <h1 class="mb-10">Your Order History</h1>
								  <!-- <p>Delicious Receipes</p> -->
                </div>
							</div>
						</div>
            

            <table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Ph.number</th>
      <th scope="col">Address</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $key => $item)
    <tr>
      <td>{{$item->created_at}}</td>
      <td>{{$item->pnumber}}</td>
      <td>{{$item->daddress}}</td>
      <td class="text-right"><a href="/usorderdetails/{{$item->oid}}" class="genric-btn info-border circle arrow">Details<span class="lnr lnr-arrow-right"></span></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
					</div>						
					
				</div>	
			</section>



@endsection
