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
							<select class="selectpicker form-control" name="number_of_guest" data-style="form-control" title="Number of guests?" data-size="3">
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