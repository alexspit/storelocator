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

        <link href="css/line.css" rel="stylesheet">

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

      <script src="js/dropzone.js"></script>
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
						<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Top Store Locator"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown active">
                                                            <a href="./create_store_location.php">Create Store</a>
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
                                                        <!--
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Analytics <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="analytics.html">Overview</a></li>
									<li><a href="productanalytics.html">Products</a></li>
									
								</ul>
							</li>
							-->	 
							<li class="dropdown " data-animate="animated fadeInUp" style="z-index:500;">
                                                            <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-search"></i> </a>
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