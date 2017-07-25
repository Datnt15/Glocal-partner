<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<base href="<?= base_url() ?>">
	<title>Login Page</title>

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

<body class="login-page">

	<div class="page-header header-filter" filter-color="info">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup animated zoomIn">
						<form class="form" method="POST" action="">
							<h4 class="card-title text-center animated bounceInDown">
                                <img src="assets/img/logo.png" alt="page logo"> SIGN IN
                            </h4>
                            <div class="social-line animated fadeInUp">
								<button class="btn btn-just-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button class="btn btn-just-icon btn-round btn-dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </button>
                                <button class="btn btn-just-icon btn-round btn-facebook">
                                    <i class="fa fa-facebook"> </i>
                                </button>
							</div>
							<p class="description text-center">Or Be Classical</p>
							<div class="card-content animated bounceInUp">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" name="username" placeholder="Enter your username..." required>
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Enter your password..." name="password" class="form-control" required />
								</div>


								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" checked>
										Remember me
									</label>
								</div> 
							</div>
							<div class="text-center footer animated bounceInUp">
								<button class="btn btn-info btn-round">Log me in</button>
                                <!-- <p>
                                    <a href="forgot-pass.html">
                                        <i class="fa fa-question-circle-o fa-lg"></i> Forgot your password?
                                    </a>
                                </p> -->
                                <p>
                                    <a href="register">
                                        <i class="fa fa-pencil fa-lg"></i> Don't have an account?
                                    </a>
                                </p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/atv-img-animation.js" type="text/javascript"></script>
	<script src="assets/js/material-kit.min.js" type="text/javascript"></script>
</html>
