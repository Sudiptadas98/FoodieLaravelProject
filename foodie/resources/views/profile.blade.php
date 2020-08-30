@extends('layouts.user')

@section('content')

<section class="team-area section-gap" id="chefs">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
                <div class="typography">
								  <h1 class="mb-10">Your Profile</h1>
								  <!-- <p>Delicious Receipes</p> -->
                </div>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="/template/img/pp1.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>{{$user->name}}</h4>
							    <p>{{$user->email}}</p>									    	
						    </div>
						</div>
																								
					</div>
				</div>	
			</section>




    
        
    

@endsection