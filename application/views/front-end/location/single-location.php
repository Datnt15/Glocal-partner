<div class="page-header header-filter" style="background-image: url('assets/img/bg11.jpg'); transform: translate3d(0px, 0px, 0px);">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="title">A Place for Entrepreneurs to Share and Discover New Stories</h2>
				<a href="search" class="btn btn-info btn-wind btn-lg no-radius">
					Get start
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="main main-raised">
	<div class="container">
		<div class="section section-text">
            <div class="row">
				<div class="col-md-8 col-md-offset-2">
    				<h1 class="title"><?php echo $location['location_name']; ?></h1>
    				<p><?php echo $location['location_des']; ?></p>
    			</div>
    		</div>
    		<div class="row text-center">
    			<?php if (count($rooms)): ?>
	    			<?php foreach ($rooms as $room): ?>
	    				<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
							<div class="card card-product  card-rotate">
								<div class="clearfix"></div>
								<div class="rotating-card-container">
									<div class="card-image">
										<div class="front">
											<img class="img" src="<?= $room['room_thumbnail'] ?>"/>
											<div class="price-container">
						                       	<span class="price price-new"> $<?= $room['room_monthly_tax'] ?></span>
											</div>
										</div>

										<div class="back back-background">
											<div class="card-content">
												<div class="footer text-center">
													<a href="#" class="btn btn-sm btn-round btn-white">
														<i class="fa fa-home"></i> View
													</a>
													<a href="#" class="btn btn-sm btn-round btn-info">
														<i class="fa fa-calendar-check-o"></i> Book
													</a>
												</div>
												<hr/>
												<p class="card-description">
													Share with your friends...
												</p>
												<a href="http://twitter.com/share?url=<?= base_url() ?>room/<?= $room['id'] ?>" target="_blank" class="btn btn-just-icon btn-round btn-white btn-twitter twitter-share">
													<i class="fa fa-twitter"></i>
												</a>
												<a href="<?= base_url() ?>room/<?= $room['id'] ?>" class="btn btn-just-icon btn-round btn-white btn-google google-share">
													<i class="fa fa-google"></i>
												</a>
												<a href="<?= base_url() ?>room/<?= $room['id'] ?>" class="btn btn-just-icon btn-round btn-white btn-facebook facebook-share">
													<i class="fa fa-facebook"></i>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="card-content">
									<h4 class="card-title">
										<a href="room/<?= $room['id'] ?>"><?= $room['room_no'] ?></a>
									</h4>
									<div class="card-description">
										<i class="fa fa-map-marker"></i> <?= $location['location_name']; ?>
									</div>

								</div>
							</div>
						</div>
	    			<?php endforeach ?>
	    		<?php else: ?>
	    			<h3>There is no room in this location! Try other one!</h3>
    			<?php endif; ?>
    			<div class="col-md-8 col-md-offset-2 text-center">
	    			<?php echo $pagination; ?>
    			</div>
    		</div>
    		<div class="row map">
	        	<div id="room_location"></div>
	        </div>
    	</div>

	</div>
</div>