<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Glocal partner</title>
	<base href="<?php echo base_url(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/img/favicon.png">
	<meta content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0" id="viewport" name="viewport">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/intro.css">
	<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCBERPYtfHY9yx-gQoLMbEN5PeuLHcKChU&libraries=places" ></script>
</head>
<body>
	<input type="hidden" name="accessToken" value="<?php echo $accessToken; ?>">
	<!-- Header -->
	<section class="header col-xs-12">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div class="hexagon-box hexagon-lg brand">
			        <a href=""><img src="assets/img/favicon.png" alt=""></a>
			    </div>
			</div>
			<div class="col-xs-12 col-md-8 text-center">
				<img src="assets/img/logo-white.png" alt="">
				<h2 class="text-white">
					Beautiful & affordable rental apartments in Hanoi
				</h2>
			</div>
		</div>
	</section>
	
	<!-- Intro -->
	<section class="section text-center intro" >
		<div class="clearfix"></div>
		<div class="container">
			<h2><b>About Glocalpartner</b></h2>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 imgs-slider">
			<img src="assets/img/room-2.jpg" class="single-img" alt="">
			<img src="assets/img/room-1.jpg" class="single-img main-img" alt="">
			<img src="assets/img/room-3.jpg" class="single-img" alt="">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<p>We deeply understand the importance of accompanying your each trip with accommodation which is convenient, safe and affordable.
			Starting in Vietnam, Glocalpartner strives to be a trusted community marketplace for people to list, discover, and book accommodations around the world.</p>
			<p>Collaborate with Glocalpartner is the easiest way for hosts to monetize their extra space and showcase it to a potential audience of millions.
			Enthusiastic and professional, Glocalpartner's staffs commit to provide the most prestigious, highest quality service.</p>
		</div>
		<div class="clearfix"></div>
	</section>
	
	<!-- Services -->
	<section class="section text-center bg-white intro" id="services">
		<div class="clearfix"></div>
		<div class="container">
			<h2><b>With Glocalpartner, you can:</b></h2>
		</div>
		<div class="container text-center">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="hexagon-box hexagon-lg margin-center">
				        <img src="assets/img/search.png" alt="">
				    </div>
				    <h3>Book and pay online</h3>
				    <p>All the features you should expect:
					Find and book your favorite place, communicate with host, rate your experience afterward
					</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="hexagon-box hexagon-lg margin-center">
				        <img src="assets/img/chair.png" alt="">
				    </div>
				    <h3>Stay only in best space</h3>
				    <p>We hand-pick the accommodation so you waste less time worrying about the actual qualitie</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="hexagon-box hexagon-lg margin-center">
				        <img src="assets/img/support.png" alt="">
				    </div>
				    <h3>Have local support</h3>
				    <p>Our local presence will provide hands-on assistance. We want to be a great partner to the foreign community</p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
	
	<!-- Au Co -->
	<section class="section intro">
		<div class="container text-center">
			<h2><b><?php echo $auCo['location_name_en']; ?></b></h2>
			<h5 class="text-justify" style="line-height: 20px; font-size: 16px;"><?php echo $auCo['location_des']; ?></h5>
		</div>
		<br>
		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
			<div class="row  bg-white">
				<div class="col-xs-12 col-md-6 col-sm-6 product">
					<div class="product-img">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
						  	<!-- Wrapper for slides -->
						  	<div class="carousel-inner" role="listbox">
						    	<?php $i = 0; foreach ($auco_rooms[0]['meta']['gallery'] as $img): ?>
							    	<div class="item <?php echo $i++ == 0 ? 'active' : ''; ?>">
							      		<img src="<?php echo $img['meta_value'] ?>" alt="<?php echo $auCo['location_name_en']; ?> room no gallery">
							    	</div>
						    	<?php endforeach ?>
						  	</div>
						</div>
					</div>
					<div class="product-content">
						<h3>Room no: <b><?php echo $auco_rooms[0]['room_no']; ?></b></h3>
						<div class="row has-hr">
							<div class="col-xs-4">
								<img src="assets/img/daily.png" class="img-20" alt="<?php echo $auco_rooms[0]['room_no']; ?> daily tax">
								<strong><?php echo $auco_rooms[0]['room_daily_tax']; ?> <sup>USD</sup></strong>
								/night
							</div>
							<div class="col-xs-4">
								<img src="assets/img/weekly.png" class="img-20" alt="<?php echo $auco_rooms[0]['room_no']; ?> weekly tax">
								<strong><?php echo $auco_rooms[0]['room_weekly_tax']; ?> <sup>USD</sup></strong>
								/week
							</div>
							<div class="col-xs-4">
								<img src="assets/img/monthly.png" class="img-20" alt="<?php echo $auco_rooms[0]['room_no']; ?> monthly tax">
								<strong><?php echo $auco_rooms[0]['room_monthly_tax']; ?> <sup>USD</sup></strong>
								/month
							</div>
						</div>
						<p class="hidden-xs hidden-sm text-justify" style="padding: 0 10px;"><?php echo $auco_rooms[0]['meta']['short_description']; ?></p>
						<a href="room/<?php echo $auco_rooms[0]['id'] ?>" class="btn form-control-boxed btn-dark">View detail</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-sm-6 product">
					
					<div class="product-content">
						<h3>Room no: <b><?php echo $auco_rooms[1]['room_no']; ?></b></h3>
						<div class="row has-hr">
							<div class="col-xs-4">
								<img src="assets/img/daily.png" class="img-20" alt="<?php echo $auco_rooms[1]['room_no']; ?> daily tax">
								<strong><?php echo $auco_rooms[1]['room_daily_tax']; ?> <sup>USD</sup></strong>
								/night
							</div>
							<div class="col-xs-4">
								<img src="assets/img/weekly.png" class="img-20" alt="<?php echo $auco_rooms[1]['room_no']; ?> weekly tax">
								<strong><?php echo $auco_rooms[1]['room_weekly_tax']; ?> <sup>USD</sup></strong>
								/week
							</div>
							<div class="col-xs-4">
								<img src="assets/img/monthly.png" class="img-20" alt="<?php echo $auco_rooms[1]['room_no']; ?> monthly tax">
								<strong><?php echo $auco_rooms[1]['room_monthly_tax']; ?> <sup>USD</sup></strong>
								/month
							</div>
						</div>
						<p class="hidden-xs hidden-sm text-justify" style="padding: 0 10px;"><?php echo $auco_rooms[1]['meta']['short_description']; ?></p>
						<a href="room/<?php echo $auco_rooms[1]['id'] ?>" class="btn form-control-boxed btn-dark">View detail</a>
					</div>
					<div class="product-img">
						<div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel" data-interval="3000">
						  	<!-- Wrapper for slides -->
						  	<div class="carousel-inner" role="listbox">
						    	<?php $i = 0; foreach ($auco_rooms[1]['meta']['gallery'] as $img): ?>
							    	<div class="item <?php echo $i++ == 0 ? 'active' : ''; ?>">
							      		<img src="<?php echo $img['meta_value'] ?>" alt="<?php echo $auCo['location_name_en']; ?> room no gallery">
							    	</div>
						    	<?php endforeach ?>
						  	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="clearfix"></div>
	</section>

	<section class="section bg-white">
		<div class="slider-container">
  			<div class="slider-control left inactive">    </div>
  			<div class="slider-control right"></div>
  			<ul class="slider-pagi"></ul>
		  	<div class="slider">
		  		<?php $i = 0; foreach ($to_ngoc_van as $room): ?>
			    	<div class="slide slide-<?php echo $i++; ?> <?php echo $i == 1 ? 'active' : ''; ?>">
			      		<div class="slide__bg" >
			      			<img src="<?php echo $room['room_thumbnail']; ?>" alt="<?php echo '88 To Ngoc Van room no '.$room['room_no'] ?> gallery">
			      			<img src="<?php echo $room['room_thumbnail']; ?>" alt="<?php echo '88 To Ngoc Van room no '.$room['room_no'] ?> gallery">
			      		</div>
			      		<div class="slide__content">
			        		<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
			          			<path class="slide__overlay-path" d="M0,0 120,0 500,405 0,405" />
			        		</svg>
			        		<div class="slide__text">
			          			<h3 class="slide__text-heading"><i class="fa fa-map-marker"></i> 88 To Ngoc Van - Room no <?php echo $room['room_no']; ?> </h3>
			          			<p class="slide__text-desc text-justify"><?php echo $room['meta']['short_description']; ?></p>
			          			<div class="row">
			          				<div class="col-xs-4">
			          					<img src="assets/img/daily.png" alt="<?php echo '88 To Ngoc Van room no '.$room['room_no'] ?> tax for day" class="img-20">
			          					<strong><?php echo $room['room_daily_tax'] ?> <sup>USD</sup>/night</strong>
			          				</div>
			          				<div class="col-xs-4">
			          					<img src="assets/img/weekly.png" alt="<?php echo '88 To Ngoc Van room no '.$room['room_no'] ?> tax for week" class="img-20">
			          					<strong><?php echo $room['room_weekly_tax'] ?> <sup>USD</sup>/week</strong>
			          				</div>
			          				<div class="col-xs-4">
			          					<img src="assets/img/monthly.png" alt="<?php echo '88 To Ngoc Van room no '.$room['room_no'] ?> tax for month" class="img-20">
			          					<strong><?php echo $room['room_monthly_tax'] ?> <sup>USD</sup>/month</strong>
			          				</div>
			          			</div>
			          			<br>
			          			<p class="slide__text-desc">Including Services: AC | Wifi | TV | Cleaning | More</p>
			          			<a class="btn form-control-boxed" href="room/<?php echo $room['room_no']; ?>">View detail</a>
			        		</div>
			      		</div>
			    	</div>
		  		<?php endforeach ?>
		  	</div>
		</div>
		<div class="clearfix"></div>
	</section>
	
	<!-- List of available rooms -->
	<section class="section bg-white intro">
		<div class="container text-center">
			<h2><b>List of available rooms</b></h2>
			<div class="action-bar container">
				<div class="col-md-1 col-xs-3">
					<a href="#list-view" class="tab-nav hexagon-box bg-white">
						<i class="fa text-info fa-2x fa-th-list"></i>
						<span class="tooltip">List View</span>
					</a>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-1 col-xs-3">
					<a href="#grid-view" class="tab-nav hexagon-box bg-white">
						<i class="fa text-info fa-2x fa-th-large"></i>
						<span class="tooltip">Grid View</span>
					</a>
				</div>
				<div class="col-md-1 col-xs-3">
					<a href="#map-view" class="tab-nav hexagon-box bg-white active">
						<i class="fa text-info fa-2x fa-street-view"></i>
						<span class="tooltip">Map View</span>
					</a>
				</div>
				<div class="col-md-1 col-xs-3">
					<a href="search" class="hexagon-box bg-white pull-right">
						<i class="fa text-info fa-2x fa-globe"></i>
						<span class="tooltip">View All</span>
					</a>
				</div>
			</div>
		</div>
		<div id="map-view" class="tab-content tab-active"></div>
		<div class="tab-content container" id="grid-view">
			<div class="content">
				<?php echo $rooms_view_grid; ?>
			</div>
			<div class="pagiantion">
				<?php echo $pagination; ?>
			</div>
		</div>
		<div class="tab-content container" id="list-view">
			<div class="content">
				<?php echo $rooms_view_list; ?>
			</div>
			<div class="pagiantion">
				<?php echo $pagination; ?>
			</div>
		</div>

		<div class="clearfix"></div>
	</section>

	<!-- Contact -->
	<section class="section intro" id="contact-form">
		<div class="clearfix"></div>
		<div class="container text-center">
			<h2><b>Are you a host? Let's talk.</b></h2>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<p>
						Our platform will enable you to post, manage your listings and communicate with guest.
						Or if you prefer, we could take care of all the management.
						Hosts joining since the beta will also be rewarded with explicit privilege.
					</p>
					<div class="row contact-info">
						<div class="hexagon-box hexagon-sm bg-white pull-left">
					        <i class="fa fa-map-marker text-info"></i>
					    </div>
					    <span>183 Hoang Van Thai, Hanoi</span>
					</div>	
					
					<div class="row contact-info">
						<div class="hexagon-box hexagon-sm bg-white pull-left">
					        <i class="fa fa-phone text-info"></i>
					    </div>
					    <span>0985.41.6969</span>
					</div>

					<div class="row contact-info">
						<div class="hexagon-box hexagon-sm bg-white pull-left">
					        <i class="fa fa-envelope text-info"></i>
					    </div>
					    <span><a href="mailto:Support@glocalpartner.vn?subject=feedback" class="text-white">Support@glocalpartner.vn</a></span>
					</div>				
				</div>
				<div class="col-xs-12 col-md-6">
					<form action="" method="POST" id="msform">
						<!-- progressbar -->
						<ul id="progressbar">
						   <li class="active">Square</li>
						   <li>Location</li>
						   <li>Tax</li>
						</ul>
						<!-- fieldsets -->
						<fieldset>
							<h3 class="fs-title">How big do you want your room is?</h3>
							<input type="number" class="form-control form-control-boxed" name="square" min="15" max="100" placeholder="m?">
							<br>
							<input type="button" name="next" class="next btn form-control-boxed" value="Next" />
						</fieldset>
						<fieldset>
							<h3 class="fs-title">Where do you want to be at?</h3>
							<input type="text" class="form-control form-control-boxed" name="location" placeholder="Long Bien - Hanoi">
							<br>
							<input type="button" name="previous" class="previous btn form-control-boxed" value="Previous" />
							<input type="button" name="next" class="next btn form-control-boxed" value="Next" />
						</fieldset>
						<fieldset>
							<h3 class="fs-title">Treament Type</h3>
							<select class="form-control form-control-boxed">
							  	<option value="a">Insuline</option>
							  	<option value="b">Oral Treament</option>
							</select>
						  	</br>
								<input type="button" name="previous" class="previous btn form-control-boxed" value="Previous" />
								<input type="submit" name="submit" class="submit btn form-control-boxed" value="Calculate" />
						</fieldset>
						<div class="clearfix"></div>
					</form>
					<form action="" method="POST" id='request-form'>
						<div class="form-group">
						    <label for="guest-email">Email address</label>
						    <input type="email" class="form-control form-control-boxed" id="guest-email" name="guest-email" placeholder="Email">
						</div>
						<div class="form-group">
						    <label for="guest-name">Your name</label>
						    <input type="text" class="form-control form-control-boxed" id="guest-name" name="guest-name" placeholder="John Doe">
						</div>
						<div class="form-group">
						    <label for="guest-message">Message</label>
						    <textarea class="form-control form-control-boxed" id="guest-message"  name="guest-message" placeholder="Type your message here ..."></textarea>
						</div>
						<button type="submit" class="btn form-control-boxed">Send me new content</button>
						<button type="reset" class="btn form-control-boxed pull-right">Send room request</button>

					</form>

				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/intro.js"></script>
</body>
</html>