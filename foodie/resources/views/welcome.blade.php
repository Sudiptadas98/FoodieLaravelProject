@extends('layouts.user')

@section('content')
<section class="banner-area relative" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h4 class="text-white text-uppercase">Wide Options of Choice</h4>
							<h1>
								Delicious Receipes					
							</h1>
							@if(Session::get('owners'))
							{

							}
							@else
							{
								<a href="/list" class="primary-btn header-btn text-uppercase">Order Now</a>
							}
							@endif
						</div>												
					</div>
				</div>
			</section>
@endsection

