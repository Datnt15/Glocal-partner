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
<div class="main main-raised">
	<div class="container">
		<input type="hidden" name="accessToken" value="<?php echo $accessToken; ?>">
		<!-- Homestay -->
	    <!-- <h2 class="section-title">Find what you need</h2> -->
	    <div class="row">
	    	<div class="space-50"></div>
	    	<div class="col-md-3">
				<?= $filter; ?>
			</div>
			<div class="col-md-9" id="has-result">
				<div class="col-xs-12">
					<ul class="nav nav-pills nav-pills-right nav-pills-icons" role="tablist">
				        <li>
				            <a href="#list-view" role="tab" data-toggle="tab">
								<i class="material-icons">view_list</i>
				            </a>
				        </li>
						<li>
							<a href="#grid-view" role="tab" data-toggle="tab">
								<i class="material-icons">view_module</i>
							</a>
						</li>
				        <li class="active">
				            <a href="#map-view-results" role="tab" data-toggle="tab">
								<i class="material-icons">location_on</i>
				            </a>
				        </li>
						
				    </ul>
				    <div class="tab-content tab-space">
					    <div class="tab-pane" id="grid-view">
				    		<?php echo $rooms_view_grid ?>
				    	</div>
						<div class="tab-pane" id="list-view">
				    		<?php echo $rooms_view_list ?>
						</div>
						<div class="tab-pane active" id="map-view-results">
							<div id="map"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 text-right hide" id="pagination">
		    		<?php echo $pagination ?>
				</div>
			</div>
			<div class="col-md-9 hide" id="not-thing-found">
				<h2>There is no result</h2>
			</div>
	    </div>
	</div>
</div>