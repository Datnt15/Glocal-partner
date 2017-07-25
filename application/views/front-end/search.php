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
				<form class="form" action="search" method="POST" class="form">
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-map-marker fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control" placeholder="Where do you want to be at?" type="text">
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar-check-o fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control datepicker" placeholder="Check In" type="text">
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar-times-o fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control datepicker" placeholder="Check Out" type="text">
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-users fa-lg" style="margin-top: 10px;"></i>
							</span>
							<select class="selectpicker form-control" data-style="form-control" title="Number of guests?" data-size="2">
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
		
		<!-- Homestay -->
	    <h2 class="section-title">Find what you need</h2>
	    <div class="row">
	    	<div class="col-md-3">
				<?= $filter; ?>
			</div>
			<div class="col-md-9">
		    	<?php for ($i = 0; $i < 6; $i++): ?>
		    		<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="card card-product  card-rotate">
							<div class="rotating-card-container">
								<div class="card-image">
									<div class="front">
										<img class="img" src="assets/img/examples/dolce.jpg"/>
										<div class="price-container">
		                                   	<span class="price price-new"> $43</span>
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
											<a href="#" class="btn btn-just-icon btn-round btn-white btn-twitter">
												<i class="fa fa-twitter"></i>
											</a>
											<a href="#" class="btn btn-just-icon btn-round btn-white btn-pinterest">
												<i class="fa fa-pinterest"></i>
											</a>
											<a href="#" class="btn btn-just-icon btn-round btn-white btn-facebook">
												<i class="fa fa-facebook"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="card-content">
								<h4 class="card-title">
									<h4 class="card-title">Dolce & Gabbana</h4>
								</h4>
								<div class="card-description">
									<i class="fa fa-map-marker"></i> Hoan Kiem - Ha Noi
								</div>
								<div class="footer">
									<div class="row">
										<div class="col-xs-4 mt-10">
											<img src="assets/img/icon/bathroom.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 mt-10">
											<img src="assets/img/icon/tv.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 mt-10">
											<img src="assets/img/icon/bed.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 mt-10">
											<img src="assets/img/icon/fridge.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">1</span>
										</div>
										<div class="col-xs-4 mt-10">
											<img src="assets/img/icon/toilet.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 mt-10">
											<img src="assets/img/icon/ac.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
									</div>
									
	                            </div>
							</div>
						</div>
					</div>
				<?php endfor;?>
				<?php for ($i = 0; $i < 3; $i++): ?>
					<div class="card card-plain card-blog">
						<div class="row">
							<div class="col-md-5">
								<div class="card-image">
									<img class="img img-raised" src="assets/img/examples/dolce.jpg" />
								</div>
							</div>
							<div class="col-md-7">
								
								<h3 class="card-title">
									<a href="#">Autodesk looks to future of 3D printing</a>
								</h3>
								<div class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently … <a href="#"> Read More </a>
								</div>
								<div><small>From</small> <strong  class="category text-info h3">$43</strong>/night</div>
								<div class="card-description">
									<i class="fa fa-map-marker"></i> Hoan Kiem - Ha Noi
								</div>
								<div class="footer">
									<div class="row">
										<div class="col-xs-4 col-sm-3 col-md-2 mt-10">
											<img src="assets/img/icon/bathroom.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 col-sm-3 col-md-2 mt-10">
											<img src="assets/img/icon/tv.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 col-sm-3 col-md-2 mt-10">
											<img src="assets/img/icon/bed.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 col-sm-3 col-md-2 mt-10">
											<img src="assets/img/icon/fridge.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">1</span>
										</div>
										<div class="col-xs-4 col-sm-3 col-md-2 mt-10">
											<img src="assets/img/icon/toilet.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
										<div class="col-xs-4 col-sm-3 col-md-2 mt-10">
											<img src="assets/img/icon/ac.png" alt="" class="img-responsive img-20">
											<span class="badge alert-info">2</span>
										</div>
									</div>
									
	                            </div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
				<div class="col-xs-12 text-right">
					<ul class="pagination pagination-info">
						<li><a href="javascript:void(0);"> prev</a></li>
						<li><a href="javascript:void(0);">1</a></li>
						<li><a href="javascript:void(0);">2</a></li>
						<li class="active"><a href="javascript:void(0);">3</a></li>
						<li><a href="javascript:void(0);">4</a></li>
						<li><a href="javascript:void(0);">5</a></li>
						<li><a href="javascript:void(0);">next </a></li>
                    </ul>
				</div>
			</div>
	    </div>

	</div>
</div>