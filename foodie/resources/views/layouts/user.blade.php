<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Foodiee..</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../template/css/linearicons.css">
			<link rel="stylesheet" href="../template/css/font-awesome.min.css">
			<link rel="stylesheet" href="../template/css/bootstrap.css">
			<link rel="stylesheet" href="../template/css/magnific-popup.css">
			<link rel="stylesheet" href="../template/css/nice-select.css">					
			<link rel="stylesheet" href="../template/css/animate.min.css">
			<link rel="stylesheet" href="../template/css/owl.carousel.css">
			<link rel="stylesheet" href="../template/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a class="navbar-brand" style="color:#FF0000" href="{{ url('/') }}">Foodiee..</a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
                            @if(Auth::check())
                            <li><a href="/list">Restaurants</a></li>
				            <li><a href="/orderhistory">Orders</a></li>
                            <li><a href="/profile">Profile</a></li>
                            @elseif(Session::get('owners'))
                            <li><a href="/owner/profile">Go to owner site</a></li>
                            @endif
				          
                          @if((Auth::check()) || (Session::get('owners')))
                        <li class="nav-item dropdown">
                                @if(Auth::check())
                                <a href="#" role="button" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                @elseif(Session::get('owners'))
                                <a href="#" role="button" data-toggle="dropdown">
                                    {{ Session::get('owners') }} <span class="caret"></span>
                                </a>
                                @endif

                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('Order History') }}
                                    </a>
                                </div> -->

                                

                                    

                                <ul>

                                    <li>   

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li> 
                                </ul>
                        </li>

                        @else

                        <li class="nav-item dropdown">
                                <a  href="#" role="button" >
                                    {{ __('Login') }} <span class="caret"></span>
                                </a>

                                <ul>
                                    <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        {{ __('User') }}
                                    </a>
                                    </li>

                                    <li>
                                    <a class="dropdown-item" href="/ownerlog">
                                        {{ __('Owner') }}
                                    </a>
                                    </li>

                                   
                                </ul>
                        </li>            
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ownerlog">{{ __('OwLogin') }}</a>
                            </li> -->
                            
                            <li class="nav-item dropdown">
                                <a href="#" role="button">
                                    {{ __('Register') }} <span class="caret"></span>
                                </a>

                                <ul>
                                    <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">
                                        {{ __('User') }}
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/ownerreg">
                                        {{ __('Owner') }}
                                    </a>
                                    </li>

                                    
                                </ul>
                            </li>
                        @endif
				          <!-- <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="generic.html">Generic</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li> -->
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<!-- <section class="banner-area relative" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h4 class="text-white text-uppercase">Wide Options of Choice</h4>
							<h1>
								Delicious Receipes					
							</h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">Check Our Menu</a>
						</div>												
					</div>
				</div>
			</section> -->
			<!-- End banner Area -->
            @yield('content')	
            
			<!-- Start top-dish Area -->
			
			<!-- End Contact Area -->				

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-6  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Contact Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="number">
									012-6532-568-9746 <br>
									012-6532-569-9748
								</p>
							</div>
						</div>						
						<!-- <div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>

								</div>
							</div>
						</div>						 -->
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="../template/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../template/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../template/js/easing.min.js"></script>			
			<script src="../template/js/hoverIntent.js"></script>
			<script src="../template/js/superfish.min.js"></script>	
			<script src="../template/js/jquery.ajaxchimp.min.js"></script>
			<script src="../template/js/jquery.magnific-popup.min.js"></script>	
			<script src="../template/js/owl.carousel.min.js"></script>			
			<script src="../template/js/jquery.sticky.js"></script>
			<script src="../template/js/jquery.nice-select.min.js"></script>			
			<script src="../template/js/parallax.min.js"></script>	
			<script src="../template/js/mail-script.js"></script>	
			<script src="../template/js/main.js"></script>
            <script>
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><input type="hidden" size="1" name="fid[]' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Food name" name="foodname[]' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Description" name="dept[]' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Price" name="price[]' + counter + '"/></td>';

        // cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        cols += '<td><a type="button" class="ibtnDel btn btn-danger" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>	
		</body>
	</html>



