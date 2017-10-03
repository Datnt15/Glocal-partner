<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<base href="<?= base_url(); ?>">
	<title><?= $title ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.min.css" rel="stylesheet"/>
    <link href="assets/css/vertical-nav.css" rel="stylesheet" />
    <link href="assets/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100" id="sectionsNav">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="">
        			<img src="assets/img/logo.png" alt="page logo" class="img-responsive">
        		</a>
        	</div>

        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
						<a href="tel:+841662727846">
							<i class="fa fa-phone"></i> (+84) 166 2727 846
						</a>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-globe"></i> Languages
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
							<li>
								<a href="">
									<img src="assets/img/icon/en.png" alt="English"> EN
								</a>
							</li>
							<li>
								<a href="/vi">
									<img src="assets/img/icon/vi.png" alt="Vietnamese"> VI
								</a>
							</li>
						</ul>
					</li>

					<?php if (count($user)): ?>
						<li class="button-container">
							<a href="<?= base_url() ?>logout" class="btn btn-info btn-round">
								<i class="material-icons">exit_to_app</i> Log Out
							</a>
						</li>
					<?php else: ?>
						<li class="button-container">
							<a href="<?= base_url() ?>login" class="btn btn-info btn-round">
								<i class="material-icons">fingerprint</i> Login
							</a>
						</li>
					<?php endif ?>
        		</ul>
        	</div>
    	</div>
    </nav>
