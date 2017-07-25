<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <base href="<?= base_url(); ?>">
	<title>Register Page</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.min.css" rel="stylesheet"/>
    <link href="assets/css/login.css" rel="stylesheet"/>
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
</head>

<body class="signup-page">


	<div class="page-header header-filter" filter-color="blue">
    	<div class="container">
			<div class="row">
    			<div class="col-md-10 col-md-offset-1">

					<div class="card card-signup animated zoomIn">
                        <h2 class="card-title text-center animated bounceInDown">
                        	<img src="assets/img/logowhite.png"> Register
                        </h2>
                        <div class="row animated bounceInUp">
                            <div class="col-md-5 col-md-offset-1 visible-md visible-lg">
            					<div class="info info-horizontal">
            						<div class="icon icon-info">
            							<i class="material-icons">timeline</i>
            						</div>
            						<div class="description">
            							<h4 class="info-title">Marketing</h4>
            							<p class="description">
            								We've created the marketing campaign of the website. It was a very interesting collaboration.
            							</p>
            						</div>
            		        	</div>

            					<div class="info info-horizontal">
            						<div class="icon icon-info">
            							<i class="material-icons">code</i>
            						</div>
            						<div class="description">
            							<h4 class="info-title">Fully Coded in HTML5</h4>
            							<p class="description">
            								We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
            							</p>
            						</div>
            					</div>

            					<div class="info info-horizontal">
            						<div class="icon icon-info">
            							<i class="material-icons">group</i>
            						</div>
            						<div class="description">
            							<h4 class="info-title">Built Audience</h4>
            							<p class="description">
            								There is also a Fully Customizable CMS Admin Dashboard for this product.
            							</p>
            						</div>
            					</div>
            				</div>
                            <div class="col-md-6 col-lg-5">
                                <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"> </i>
                                    </button>
                                    <h4 class="description"> or be classical </h4>
                                </div>

								<form class="form" method="POST" action="">
									<div class="card-content">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<input type="text" class="form-control" placeholder="Username...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<input type="text" class="form-control" placeholder="Email...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<input type="password" placeholder="Password..." class="form-control" />
										</div>

										<!-- If you want to add a checkbox to this form, uncomment this code -->

										<div class="checkbox">
											<label>
												<input type="checkbox" name="optionsCheckboxes" checked>
												I agree to the <a href="#">terms and conditions</a>.
											</label>
										</div>
									</div>
									<div class="footer text-center">
										<button class="btn btn-info btn-round">Get Started</button>
										<p>
		                                    <a href="login">
		                                        <i class="material-icons">fingerprint</i> Already a member?
		                                    </a>
		                                </p>
									</div>
								</form>
                            </div>
                        </div>
                	</div>

                </div>
            </div>
		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<script src="assets/js/atv-img-animation.js" type="text/javascript"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="assets/js/material-kit.min.js" type="text/javascript"></script>
</html>
