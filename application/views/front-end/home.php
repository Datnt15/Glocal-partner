<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg11.jpg'); transform: translate3d(0px, 0px, 0px);">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="title">A Place for Entrepreneurs to Share and Discover New Stories</h2>
				<a href="search" class="btn btn-info btn-wind btn-lg no-radius">
					Get start
				</a>
			</div>
			<div class="clearfix"></div>
			<div class="search search-form">
				<form class="form" action="search" method="GET" class="form">
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-map-marker fa-lg"></i>
							</span>
							<select class="selectpicker form-control" data-style="form-control" title="Where do you want to be at?" data-size="3" name="location">
								<?php foreach ($locations as $location): ?>
									<option value="<?php echo $location['location_id'] ?>">
										<?php echo $location['location_name'] ?>
									</option>
								<?php endforeach ?>
			                </select>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar-check-o fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control datepicker" name="check_in" placeholder="Check In" type="text">
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar-times-o fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control datepicker" name="check_out" placeholder="Check Out" type="text">
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-users fa-lg" style="margin-top: 10px;"></i>
							</span>
							<select class="selectpicker form-control" name="number_of_guest" data-style="form-control" title="Guests?" data-size="3">
								<?php for ($i = 0; $i < 10; $i++): ?>
			                    	<option value="<?= $i ?>"><?= $i ?></option>
			                    <?php endfor; ?>
			                </select>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group col-xs-12">
							<div class="form-group col-xs-12" style="margin-top: 10px;">
								<button class="btn btn-info no-radius col-xs-12">
									<i class="fa fa-search fa-lg"></i> Search
								</button>
							</div>
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="main main-raised">
	<div class="container">
		<!-- Intro -->
		<div class="features-2">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="title">Glocal Home</h2>
					<h5 class="description">Affordable apartment complex in 98 To Ngoc Van</h5>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
		           	<div class="info info-horizontal">
						<div class="icon icon-info">
							<i class="fa fa-cogs"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Custom your room</h4>
							<p>Since Glocalhome is in structural renovation phase, we even offer total room redesign, if you pre-book now and choose to stay with us from 6 months and above.</p>
							<a href="<?= GLOCALHOME_URL ?>" class="btn btn-round btn-info">Find more...</a>
						</div>
		        	</div>

		        </div>

				<div class="col-md-4">
					<div class="info info-horizontal">
						<div class="icon icon-danger">
							<i class="fa fa-cutlery"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Unique Benefits</h4>
							<p>Equipped with rich experience in project development ranging from domestic housing, smart-designed apartments to hotels and resorts, we are building Glocalhome apartment complex as a new option for expats and locals working in Westlake area.</p>
							<a href="<?= GLOCALHOME_URL ?>" class="btn btn-round btn-info">Find more...</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="info info-horizontal">
						<div class="icon icon-success">
							<i class="fa fa-bell"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Services</h4>
							<p>Combining modern designs, ideal location and full service, Glocalhome offers a wide range of rooms that suit travelers, business trip, and long-term stays. Glocalhome apartments give you flexible choices and professional service</p>
							<a href="<?= GLOCALHOME_URL ?>" class="btn btn-round btn-info">Find more...</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<!-- Best Services -->
		<div class="features-3">
			<div class="row">
				<div class="col-md-6">
					<div class="phone-container">
						<img src="assets/img/sections/iphone.png" />
					</div>
				</div>
				<div class="col-md-6">

					<br /><br />
					<!-- Some <br /> tags to push the text to align with the image, you can remove it if you have more text on the right side :-) -->

					<h2 class="title">Your life will be much easier</h2>

		        	<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">extension</i>
						</div>
						<div class="description">
							<h4 class="info-title">Hundreds of Components</h4>
							<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
						</div>
		        	</div>

					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">child_friendly</i>
						</div>
						<div class="description">
							<h4 class="info-title">Easy to Use</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>

					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">watch_later</i>
						</div>
						<div class="description">
							<h4 class="info-title">Fast Prototyping</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>
				</div>
			</div>

	    </div>
		
		<!-- Homestay -->
	    <h2 class="section-title text-center">Glocal Partner Location</h2>
	    <div class="row">
	    	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
				<div class="card card-product  card-rotate">
					<div class="rotating-card-container">
						<div class="card-image">
							<div class="front">
								<img class="img" src="assets/img/test.png"/>
								<!-- <img class="img" src="uploads/file00184.jpg"/> -->
							</div>

							<div class="back back-background">
								<div class="card-content">
									<h5 class="card-title">
										Quick Actions...
									</h5>
									<div class="footer text-center">
										<a href="location/128-au-co" class="btn btn-sm btn-round btn-white">
											<i class="fa fa-home"></i> View
										</a>
										<a href="#" class="btn btn-sm btn-round btn-rose">
											<i class="fa fa-calendar-check-o"></i> Book
										</a>
									</div>
									<hr/>
									<p class="card-description">
										Share with your friends...
									</p>
									<a href="http://twitter.com/share?url=<?= base_url() ?>location/128-au-co" target="_blank" class="btn btn-just-icon btn-round btn-white btn-twitter twitter-share">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="<?= base_url() ?>location/128-au-co" class="btn btn-just-icon btn-round btn-white btn-google google-share">
										<i class="fa fa-google"></i>
									</a>
									<a href="<?= base_url() ?>location/128-au-co" class="btn btn-just-icon btn-round btn-white btn-facebook facebook-share">
										<i class="fa fa-facebook"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card-content">
						<h4 class="card-title">
							<h4 class="card-title"><a href="location/128-au-co" title="124 Âu cơ">124 Âu cơ</a></h4>
						</h4>
						<div class="card-description">
							<i class="fa fa-map-marker"></i> Quận Tây Hồ - Hà Nội
						</div>
					</div>
				</div>
			</div>
	    	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
				<div class="card card-product  card-rotate">
					<div class="rotating-card-container">
						<div class="card-image">
							<div class="front">
								<img class="img" src="assets/img/room-1.jpg"/>
							</div>

							<div class="back back-background">
								<div class="card-content">
									<h5 class="card-title">
										Quick Actions...
									</h5>
									<div class="footer text-center">
										<a href="location/88-to-ngoc-van" class="btn btn-sm btn-round btn-white">
											<i class="fa fa-home"></i> View
										</a>
										<a href="#" class="btn btn-sm btn-round btn-rose">
											<i class="fa fa-calendar-check-o"></i> Book
										</a>
									</div>
									<hr/>
									<p class="card-description">
										Share with your friends...
									</p>
									<a href="http://twitter.com/share?url=<?= base_url() ?>location/88-to-ngoc-van" target="_blank" class="btn btn-just-icon btn-round btn-white btn-twitter twitter-share">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="<?= base_url() ?>location/88-to-ngoc-van" class="btn btn-just-icon btn-round btn-white btn-google google-share">
										<i class="fa fa-google"></i>
									</a>
									<a href="<?= base_url() ?>location/88-to-ngoc-van" class="btn btn-just-icon btn-round btn-white btn-facebook facebook-share">
										<i class="fa fa-facebook"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card-content">
						<h4 class="card-title">
							<h4 class="card-title"><a href="location/88-to-ngoc-van" title="88 Tô Ngọc Vân">88 Tô Ngọc Vân</a></h4>
						</h4>
						<div class="card-description">
							<i class="fa fa-map-marker"></i> Quận Tây Hồ - Hà Nội
						</div>
					</div>
				</div>
			</div>
	    	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
				<div class="card card-product  card-rotate">
					<div class="rotating-card-container">
						<div class="card-image">
							<div class="front">
								<img class="img" src="uploads/file00157.jpg"/>
							</div>

							<div class="back back-background">
								<div class="card-content">
									<h5 class="card-title">
										Quick Actions...
									</h5>
									<div class="footer text-center">
										<a href="location/88-tu-hoa" class="btn btn-sm btn-round btn-white">
											<i class="fa fa-home"></i> View
										</a>
										<a href="#" class="btn btn-sm btn-round btn-rose">
											<i class="fa fa-calendar-check-o"></i> Book
										</a>
									</div>
									<hr/>
									<p class="card-description">
										Share with your friends...
									</p>
									<a href="http://twitter.com/share?url=<?= base_url() ?>location/88-tu-hoa" target="_blank" class="btn btn-just-icon btn-round btn-white btn-twitter twitter-share">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="<?= base_url() ?>location/88-tu-hoa" class="btn btn-just-icon btn-round btn-white btn-google google-share">
										<i class="fa fa-google"></i>
									</a>
									<a href="<?= base_url() ?>location/88-tu-hoa" class="btn btn-just-icon btn-round btn-white btn-facebook facebook-share">
										<i class="fa fa-facebook"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card-content">
						<h4 class="card-title">
							<h4 class="card-title"><a href="location/88-tu-hoa" title="126 Từ Hoa">126 Từ Hoa</a></h4>
						</h4>
						<div class="card-description">
							<i class="fa fa-map-marker"></i> Quận Tây Hồ - Hà Nội
						</div>
					</div>
				</div>
			</div>
	    </div>
		<!--     *********    BLOG CARDS     *********  
		<div class="cards">

			<div class="container">
    			<h2 class="section-title text-center">Hostest News</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="card card-blog">
							<div class="card-image">
								<a href="index.html#pablo">
									<img class="img" src="assets/img/examples/card-blog1.jpg" />
									<div class="card-title">
										This Summer Will be Awesome
									</div>
								</a>
							</div>

							<div class="card-content">
								<h6 class="category text-info">Fashion</h6>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
							</div>
						</div>

						<div class="card">
							<div class="card-content content-info">
								<h5 class="category-social">
									<i class="fa fa-twitter"></i> Twitter
								</h5>
								<h4 class="card-title">
									<a href="index.html#pablo">"You Don't Have to Sacrifice Joy to Build a Fabulous Business and Life"</a>
								</h4>
								<div class="footer">
	                                <div class="author">
	                                    <a href="index.html#pablo">
	                                       <img src="assets/img/faces/avatar.jpg" alt="..." class="avatar img-raised">
	                                       <span>Tania Andrew</span>
	                                    </a>
	                                </div>
	                               <div class="stats">
	                                    <i class="material-icons">favorite</i> 2.4K &middot;
										<i class="material-icons">share</i> 45
	                                </div>
	                            </div>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-content">
								<h6 class="category text-danger">
									<i class="material-icons">trending_up</i> Trending
								</h6>
								<h4 class="card-title">
									<a href="index.html#pablo">To Grow Your Business Start Focusing on Your Employees</a>
								</h4>
								<div class="footer">
	                                <div class="author">
	                                    <a href="index.html#pablo">
	                                       <img src="assets/img/faces/christian.jpg" alt="..." class="avatar img-raised">
	                                       <span>Lord Alex</span>
	                                    </a>
	                                </div>
	                               <div class="stats">
	                                    <i class="material-icons">favorite</i> 342 &middot;
										<i class="material-icons">chat_bubble</i> 45
	                                </div>
	                            </div>
							</div>

						</div>


						<div class="card card-blog">
							<div class="card-image">
								<a href="index.html#pablo">
									<img class="img" src="assets/img/examples/card-blog2.jpg" />
								</a>
							</div>

							<div class="card-content">
								<h6 class="category text-success">Legal</h6>

								<h4 class="card-title">
									<a href="index.html#pablo">5 Common Legal Mistakes That Can Trip-Up Your Startup</a>
								</h4>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<div class="footer">
	                                <div class="author">
	                                    <a href="index.html#pablo">
	                                       <img src="assets/img/faces/marc.jpg" alt="..." class="avatar img-raised">
	                                       <span>Mike John</span>
	                                    </a>
	                                </div>
	                               <div class="stats">
	                                    <i class="material-icons">schedule</i> 5 min read
	                                </div>
	                            </div>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="card card-blog">
							<div class="card-image">
								<a href="index.html#pablo">
									<img class="img" src="assets/img/examples/blog8.jpg" />
								</a>
							</div>
							<div class="card-content">
								<h6 class="category text-danger">
									<i class="material-icons">trending_up</i> Trending
								</h6>
								<h4 class="card-title">
									<a href="index.html#pablo">To Grow Your Business Start Focusing on Your Employees</a>
								</h4>
								<div class="footer">
	                                <div class="author">
	                                    <a href="index.html#pablo">
	                                       <img src="assets/img/faces/marc.jpg" alt="..." class="avatar img-raised">
	                                       <span>Mike John</span>
	                                    </a>
	                                </div>
	                               <div class="stats">
	                                    <i class="material-icons">schedule</i> 5 min read
	                                </div>
	                            </div>
							</div>
						</div>

						<div class="card">
							<div class="card-content content-success">
								<h5 class="category-social">
									<i class="fa fa-newspaper-o"></i> TechCrunch
								</h5>
								<h4 class="card-title">
									<a href="index.html#pablo">"Focus on Your Employees"</a>
								</h4>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<div class="footer text-center">
	                                <a href="index.html#pablo" class="btn btn-white btn-round">Read Article</a>
	                            </div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		 *********    END BLOG CARDS      *********      -->
	</div>
</div>