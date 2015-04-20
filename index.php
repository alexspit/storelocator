<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Top Store Finder</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="css/style-gold.css" rel="stylesheet" type="text/css" media="screen">
        
        <!-- font awesome for icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">

        <!--google fonts-->
       <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
      
        <!--owl carousel css-->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="css/yamm.css" rel="stylesheet" type="text/css">
        <!--popups css-->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      
    </head>
    <body>
        
        <div id="wrapper">
        <!--navigation -->
        <!-- Static navbar -->
	<header>
			<div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Top Store Locator"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Create Store</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown">Manage Store<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="editors.php">Editors</a></li>
									<li><a href="products.php">Products</a></li>
									<li><a href="locations.php">Locations</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="socialmedia.php">Social Media</a></li>
									<li><a href="openinghours.php">Opening Hours</a></li>
									
									
								</ul>
							</li>
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ratings <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="ratings.php">Overview</a></li>
									<li><a href="respond.php">Respond</a></li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Analytics <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="analytics.html">Overview</a></li>
									<li><a href="productanalytics.html">Products</a></li>
									
								</ul>
							</li>
								 
							<li class="dropdown " data-animate="animated fadeInUp" style="z-index:500;">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-search"></i></a>
								<ul class="dropdown-menu search-dropdown animated fadeInUp">
									<li id="dropdownForm">
										<div class="dropdown-form">
											<form class=" form-inline">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="search...">
													<span class="input-group-btn">
														<button class="btn btn-theme-bg" type="button">Go!</button>
													</span>
												</div><!--input group-->
											</form><!--form-->
										</div><!--.dropdown form-->
									</li><!--.drop form search-->
								</ul><!--.drop menu-->
							</li>
                                                        <li class="dropdown">
                                                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                                                                <form action="login.php" role="form">
                                                                    <h4>Signin</h4>

                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Username">
                                                                        </div>
                                                                        <br>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                            <input type="password" class="form-control" placeholder="Password">
                                                                        </div>
                                                                        <div class="checkbox pull-left">
                                                                            <label>
                                                                                <input type="checkbox"> Remember me
                                                                            </label>
                                                                        </div>
                                                                        <a class="btn btn-theme-bg pull-right">Login</a>
                                                                        <!--                                        <button type="submit" class="btn btn-theme pull-right">Login</button>                 -->
                                                                        <div class="clearfix"></div>
                                                                        <hr>
                                                                        <p>Don't have an account? <a href="register.php">Register Now</a></p>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </li>
								
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div><!--.navbar-default-->
	</header><!--END HEADER-->
        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Create a Store</h4>
                        </div>
			<div class="col-sm-6 hidden-xs text-right">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Create</li>
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
			
            <div class="container">
		
                
                <div class="row">
                     <div class="col-md-4">
                            <form action="locationform.php" role="form">
                                <h4>Location</h4>

                                <div class="form-group" id="locationform">
                                   <div class="col-md-12">
                                       <input type="text" id="storename" name="storename" class="form-control" placeholder="Store Name">          
                                   </div>
                                    
                                   <div class="col-md-12">
                                         <select id="category" name="category" class="form-control">
                                            <option selected disabled>Category</option>
                                            <option>Restaurants</option>
                                            <option>Car Repairs</option>
                                            <option>Insurance</option>
                                            <option>Hotel</option>
                                            <option>Confectionary</option>
                                        </select>         
                                   </div>
                                    
                                   <div class="col-md-12">
                                         <select id="country" name="country" class="form-control">
                                            <option selected disabled>Country</option>
                                            <option>Malta</option>
                                            <option>Gozo</option>
                                            <option>Comino</option>  
                                        </select>         
                                   </div>
                                   
                                   <div class="col-md-12">
                                       <input type="text" id="city" name="city" class="form-control" placeholder="City">          
                                   </div>
                                   
                                   <div class="col-md-12">
                                       <input type="text" id="street" name="street" class="form-control" placeholder="Street">          
                                   </div>
                                    
                                   <div class="col-md-12">
                                       <input type="text" id="floor" name="floor" class="form-control" placeholder="Floor/Block">          
                                   </div>
                                    
                                   <div class="col-md-12">
                                       <input type="text" id="zip" name="zip" class="form-control" placeholder="ZIP Code">          
                                   </div>
                                    
                                   <div class="col-md-6">
                                       <input type="number" id="lat" name="lat" class="form-control" disabled placeholder="Latitude">     
                                       <input type="hidden" id="full_lat" name="full_lat">  
                                   </div>
                                   <div class="col-md-6">
                                       <input type="number" id="lng" name="lng" class="form-control" disabled placeholder="Longitude">    
                                       <input type="hidden" id="full_lng" name="full_lng">  
                                   </div>
                                 
                                 
                                    
                                   <a class="btn btn-theme-bg pull-right">Next</a>
                                   
                                   <div id="current"></div>
                                   <div class="clearfix"></div>
                                                                              
                                </div>                                            
                            </form>
                    </div>
                    <div class="col-md-8 hidden-sm hidden-xs">
                        
                         <div id="map-canvas"></div>
                    </div>
                </div>
            
            
	</main><!--END MAIN-->
		
        
        <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center margin30">
                        <div class="footer-col footer-3">
                            <h3>Top Store Locator</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                            </p>
                            <ul class="list-inline social-1">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
          
             
                   

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span>&copy;2015. Alexander Spiteri</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--END FOOTER-->
		
		</div>
       <!--scripts and plugins -->
        <script src="js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>          
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--very easy to use portfolio filter plugin -->
        <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
       
       <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYlhbi8Dcj0i8uF22gccZ9NsM-zwQDolM"></script>
        <script src="js/custom.js" type="text/javascript"></script>
     <!--   <script type="text/javascript">
              
                    function initialize() {
                      var mapOptions = {
                        zoom: 15,
                        center: new google.maps.LatLng(35.8745649,  14.5167721)
                      };

                      var map = new google.maps.Map(document.getElementById('map-canvas'),
                          mapOptions);
                    }

                    function loadScript() {
                      var script = document.createElement('script');
                      script.type = 'text/javascript';
                      script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
                          '&signed_in=true&callback=initialize';
                      document.body.appendChild(script);
                    }
                    

                    window.onload = loadScript;

    </script>-->
        
   
       


    </body>
</html>
