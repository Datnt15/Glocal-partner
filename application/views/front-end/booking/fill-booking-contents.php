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
				<form role="form" id="fill-content-form" method="post" action="" class="row">
					<div class="form-group label-floating col-xs-12 col-sm-12 col-md-6">
						<label class="control-label">Your name</label>
						<input type="text" name="username" class="form-control" required value="<?= isset($user['fullname']) ? $user['fullname'] : '' ?>">
						<p class="help-block">*Full name as written on your national ID card</p>
					</div>
					<div class="form-group label-floating col-xs-12 col-sm-12 col-md-6">
						<label class="control-label">Email address</label>
						<input type="email" name="user_email" class="form-control" required value="<?= isset($user['email']) ? $user['email'] : '' ?>" />
						<p class="help-block">EG: email@example.com</p>
					</div>
					<div class="form-group label-floating col-xs-12 col-sm-12 col-md-6">
						<label class="control-label">Phone</label>
						<input type="text" name="user_phone" class="form-control" required />
						<p class="help-block">Eg: +84901234567 while (+84) is your country dialing code and 901234567 is your mobilephone number</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<select class="form-group selectpicker" data-style="form-control" title="Country of residence" data-size="7" required>
							<?php foreach ($countries as $key => $value): ?>
								<option value="<?= $value; ?>" <?= $value == 'Vietnam' ? 'selected' : '' ?>>
									<?= $value; ?>
								</option>
							<?php endforeach ?>
						</select>
						<p class="help-block">This content will be used for legal and tax</p>
					</div>
					<div class="clearfix"></div>
					<div class="space-50"></div>
					<div class="col-xs-12">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                        <div class="panel panel-default">
	                            <div class="panel-heading" role="tab" id="headingOne">
	                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	                                    <h4 class="panel-title">
											Other requests (If any): 
	                                    </h4>
	                                </a>
	                            </div>
	                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	                              	<div class="panel-body">
	                                	<div class="card card-product">
	                                		<div class="card-content">
		                                		<div class="row">
		                                			<div class="col-xs-12 col-sm-6">
		                                				<div class="form-group">
			                                				<div class="checkbox">
																<label>
																	<input type="checkbox" name="wanna_check_in_late" disabled>
																	I want a late check
																</label>
															</div>
															<div class="collapse row">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar-check-o fa-lg"></i>
																	</span>
																	<input type="text" name="new_check_in_time" class="form-control datetimepicker">
																</div>
				                                			</div>
		                                				</div>
		                                			</div>
		                                			<div class="col-xs-12 col-sm-6">
			                                			<div class="form-group">
			                                				<div class="checkbox">
																<label>
																	<input type="checkbox" name="wanna_check_in_soon">
																	I want a late soon
																</label>
															</div>
															<div class="collapse row">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar-check-o fa-lg"></i>
																	</span>
																	<input type="text" name="new_check_in_time" class="form-control datetimepicker">
																</div>
															</div>
			                                			</div>
		                                			</div>
		                                		</div>
	                                				
                                				<div class="checkbox">
													<label>
														<input type="checkbox" name="register_airport_pickup">
														I want to register an airport shuttle
													</label>
												</div>
												<div class="collapse col-xs-12">
													<textarea class="form-control" rows="3" placeholder="Enter the flight number and landing time"></textarea>
												</div>
	                                		</div>
	                                	</div>
	                              	</div>
	                            </div>
	                        </div>
	                    </div>
					</div>

					<div class="col-xs-12">
						<div class="form-group">
            				<div class="checkbox">
								<label>
									<input type="checkbox" name="book-for-someone-else">
									I book for someone else
								</label>
							</div>
							<div class="collapse row">
								<div class="form-group label-floating col-xs-12 col-sm-12 col-md-12">
									<label class="control-label">Your name</label>
									<input type="text" name="customers" class="form-control">
									<p class="help-block">*Full name as written on your national ID card</p>
								</div>
								<div class="form-group label-floating col-xs-12 col-sm-12 col-md-6">
									<label class="control-label">Email address</label>
									<input type="email" name="email" class="form-control"/>
									<p class="help-block">EG: email@example.com</p>
								</div>
								<div class="form-group label-floating col-xs-12 col-sm-12 col-md-6">
									<label class="control-label">Phone</label>
									<input type="text" name="phone" class="form-control"/>
									<p class="help-block">Eg: +84901234567 while (+84) is your country dialing code and 901234567 is your mobilephone number</p>
								</div>
                			</div>
        				</div>
					</div>
					<div class="clearfix"></div>
					<div class="space-50"></div>
					<div class="submit text-center">
						<input type="submit" class="btn btn-primary btn-raised btn-round" value="Next step" />
					</div>
				</form>
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