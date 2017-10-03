<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
	<div class="card card-product  card-rotate">
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
						<!-- <h5 class="card-title">
							Quick Actions...
						</h5> -->
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
				<i class="fa fa-map-marker"></i> <?= $room['location'] ?>
			</div>
			<div class="footer">
            </div>
		</div>
	</div>
</div>
