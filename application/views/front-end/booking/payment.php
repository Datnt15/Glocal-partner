<?php 
// var_dump($user);
?>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/bg9.jpg');">
	<div class="container">
		<div class="row">
    		<div class="col-md-8 col-md-offset-2">
                <h2 class="title text-center">Contact details/Customer information</h2>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
	<div class="container">
		<div class="space-50"></div>
        <div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<!-- Tabs with icons on Card -->
				<div class="card card-nav-tabs">
					<div class="header header-info">
						<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
						<div class="nav-tabs-navigation">
							<div class="nav-tabs-wrapper">
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active">
										<a href="#cedit-card" data-toggle="tab">
											<img src="assets/img/icon/credit-card.png" style="width: 25px; margin-right: 10px;" alt="Debit/Credit Card">
											Debit/Credit Card
										</a>
									</li>
									<li>
										<a href="#bank-tranfer" data-toggle="tab">
											<img src="assets/img/icon/bank-tranfer.png" style="width: 25px; margin-right: 10px;" alt="Bank Tranfer">
											Bank Tranfer
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-content">
						<div class="tab-content text-center">
							<div class="tab-pane active" id="cedit-card">
								<p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
							</div>
							<div class="tab-pane" id="bank-tranfer">
								<div class="col-md-4">
	                                <ul class="nav nav-pills nav-pills-info nav-stacked">
	                                  <li class="active"><a href="#tab1" data-toggle="tab">Profile</a></li>
	                                  <li><a href="#tab2" data-toggle="tab">Settings</a></li>
	                                  <li><a href="#tab3" data-toggle="tab">Options</a></li>
	                                </ul>
	                            </div>
	                            <div class="col-md-8">
	                            	<div class="tab-content">
	                            	    <div class="tab-pane active" id="tab1">
	                            	      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
	                            	      <br /><br />
	                            	      Dramatically visualize customer directed convergence without revolutionary ROI.
	                            	    </div>
	                            	    <div class="tab-pane" id="tab2">
	                            	      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
	                            	      <br /><br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
	                            	    </div>
	                            		<div class="tab-pane" id="tab3">
	                            			Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
	                            			<br /><br />Dynamically innovate resource-leveling customer service for state of the art customer service.
	                            	    </div>
	                            	    <div class="space-50"></div>
	                            	</div>
	                            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="card card-blog">
					<div class="card-image">
						<a href="room/<?= $room['room_id'] ?>">
							<img class="img img-responsive" src="<?= $room['room_thumbnail'] ?>" alt="<?= $room['name'] ?>" />
							<div class="card-title">
								<?= $room['name'] ?>
							</div>
						</a>
					</div>

					<div class="card-content">
						<h6 class="category text-info">Booking Information</h6>
						<div class="card-description">
							<p>
								<i class="fa fa-map-marker"></i> 
								<?= $room['ville']['city_name'] . ' - ' . $room['city']['city_name'] ?>
							</p>
							<p class="row">
								<span class="col-xs-8 text-left">Total nights</span>
								<span class="col-xs-4 text-right"><?= $booking_request['total_night']; ?></span>
							</p>
							<p class="row">
								<span class="col-xs-8 text-left">Check-in Date</span>
								<span class="col-xs-4 text-right"><?= $booking_request['checkin']; ?></span>
							</p>
							<p class="row">
								<span class="col-xs-8 text-left">Check-out Date</span>
								<span class="col-xs-4 text-right"><?= $booking_request['checkout']; ?></span>
							</p>
							<p class="row">
								<span class="col-xs-8 text-left">Total guests</span>
								<span class="col-xs-4 text-right"><?= $booking_request['guests']; ?></span>
							</p>
							<hr>
							<p class="row">
								<span class="col-xs-8 text-left">Rent fee</span>
								<span class="col-xs-4 text-right">$ <?= $booking_request['total_rent_rate']; ?></span>
							</p>
							<p class="row">
								<span class="col-xs-8 text-left">Cleaning service fee</span>
								<span class="col-xs-4 text-right">$ 0</span>
							</p>
							<p class="row">
								<span class="col-xs-8 text-left">Parking service fee</span>
								<span class="col-xs-4 text-right">$ 0</span>
							</p>
							<hr>
							<p class="row">
								<span class="col-xs-8 text-left"><b>Total invoice</b></span>
								<span class="col-xs-4 text-right"><b>$ <?= $booking_request['total_rent_rate']; ?></b></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>