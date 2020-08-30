@extends('layouts.user')

@section('content')


<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
                <div class="typography">
								  <h1 class="mb-10">Our Restaurants</h1>
								  <p>Delicious Receipes</p>
                </div>
							</div>
						</div>
					</div>					
					<div class="row">
          <table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Restaurant Name</th>
      <th scope="col">Address</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($restaurants as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->restoname}}</td>
      <td>{{$item->address}}</td>
      <td class="text-right"><a href="/restaurant/{{$item->id}}" class="genric-btn primary-border circle arrow">Order Now<span class="lnr lnr-arrow-right"></span></a></td>
    </tr>
  @endforeach
  </tbody>
</table>
				</div>	
			</section>


@endsection
