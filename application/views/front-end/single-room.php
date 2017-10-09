<?php 
$meta = $room['meta'];

 ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<div class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<?php for($i = 1; $i < 7; $i++): ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>"></li>
			<?php endfor; ?>
		</ol>

		<div class="carousel-inner">
			<?php for($i = 1; $i < 8; $i++): ?>
				<div class="item <?= $i == 1 ? 'active' : '' ?>">
					<div class="page-header header-filter" style="background-image: url('assets/img/room-<?= $i ?>.jpg');">

						<div class="container">
							<div class="row">
								<div class="col-md-6 text-left">
									<h1 class="title">Material Kit PRO</h1>
									<h4>Dolce & Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
									<br />

									<div class="buttons">
										<a href="" class="btn btn-primary btn-lg">
											Read More
										</a>
										<a href="" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-get-pocket"></i>
										</a>
									</div>

								</div>
							</div>
						</div>
			        </div>
				</div>
			<?php endfor; ?>
		</div>
		<a class="left carousel-control" href="carousel-example-generic" data-slide="prev">
			<i class="material-icons">keyboard_arrow_left</i>
		</a>
		<a class="right carousel-control" href="carousel-example-generic" data-slide="next">
			<i class="material-icons">keyboard_arrow_right</i>
		</a>
	</div>
</div>
<div class="section section-gray">
	<div class="container">
		<div class="main main-raised ">

			<!-- Room infos -->
            <div class="col-md-8 col-sm-8">
				<h2 class="title"> <?= $room['name'] ?> </h2>
				<h4 class="main-price">
					<i class="material-icons">add_location</i>
					<?php if (isset($room['city'])): ?>
						<a class="text-info" href="place/<?= $room['city']['city_slug'] ?>">
							<?= $room['city']['city_name'] ?>
						</a> 
						/
					<?php endif ?>
					<a class="text-info" href="place/<?= $room['ville']['city_slug'] ?>">
						<?= $room['ville']['city_name'] ?>
					</a> 
				</h4>
				<div id="acordeon">
                    <div class="panel-group" id="accordion">
		                <div class="panel panel-border panel-default">
		                    <div class="panel-heading" role="tab" id="headingOne">
		                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		                            <h4 class="panel-title">
		                            Description
		                            <i class="material-icons">keyboard_arrow_down</i>
		                            </h4>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="panel-collapse collapse in">
		                      <div class="panel-body">
		                        <p><?= $room['description'] ?></p>
		                      </div>
		                    </div>
		                </div>
		                <div class="panel panel-border panel-default">
		                    <div class="panel-heading" role="tab" id="headingOne">
		                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseOne">
		                            <h4 class="panel-title">
		                            Amenities
		                            <i class="material-icons">keyboard_arrow_down</i>
		                            </h4>
		                        </a>
		                    </div>
		                    <div id="collapseTwo" class="panel-collapse collapse">
		                      	<div class="panel-body">
		                        	<table class="table" id="facilities">
		                        		<tbody>
			                        		<tr>
			                        			<td>
			                        				Bedrooms
			                        			</td>
			                        			<td width="80%">
			                        				<div class="col-xs-6" style="padding-top: 5px;">
			                        					<img src="assets/img/icon/guest.png">
			                        					<?= $room['number_of_guests'] ?> residents
			                        				</div>
			                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        				<img src="assets/img/icon/bedroom.png">
			                        					<?= $room['number_of_bedroom'] ?> Bedrooms 
			                        				</div>
			                        				<div class="col-xs-6" style="padding-top: 5px;">
			                        					<img src="assets/img/icon/bed.png">
			                        					<?= $room['number_of_bed'] ?> Beds 
			                        				</div>
			                        			</td>
			                        		</tr>
			                        		<tr>
			                        			<td>
			                        				Bathrooms
			                        			</td>
			                        			<td>
			                        				<div class="col-xs-6" style="padding-top: 5px;">
			                        					<img src="assets/img/icon/bathroom.png">
			                        					<?= $room['number_of_bathroom'] ?> Bathrooms
			                        				</div>
			                        			</td>
			                        		</tr>
			                        		<tr>
			                        			<td>
			                        				Families 
			                        			</td>
			                        			<td>
			                        				<?php if (isset($meta['family-baby'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/baby.png">
				                        					Babies/ Toddlers welcome 
				                        				</div>
			                        				<?php endif ?>
													<?php if (isset($meta['family-no-smocking'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/no-smocking.png">
				                        					No smoking 
				                        				</div>
			                        				<?php endif ?>
													<?php if (isset($meta['family-smocking'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/allowed_smok.png">
				                        					Smoking Allowed
				                        				</div>
			                        				<?php endif ?>
													<?php if (isset($meta['family-extra-mattress'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/towel.png">
				                        					Extra Mattress 
				                        				</div>
			                        				<?php endif ?>
													<?php if (isset($meta['family-suitable'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/family.png">
				                        					Suitable 
				                        				</div>
			                        				<?php endif ?>
													<?php if (isset($meta['single-suitable'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/single.png">
				                        					Suitable 
				                        				</div>
			                        				<?php endif ?>
													<?php if (isset($meta['couple-suitable'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/couple.png">
				                        					Suitable 
				                        				</div>
			                        				<?php endif ?>
			                        			</td>
			                        		</tr>
			                        		<tr>
			                        			<td>
			                        				Kitchen Facilities  
			                        			</td>
			                        			<td>
			                        				<?php if (isset($meta['kitchen-oven'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/oven.png">
				                        					Oven
				                        				</div>
				                        			<?php endif; ?>
			                        				<?php if (isset($meta['kitchen-microwave'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/oven.png">
				                        					Microwave
				                        				</div>
				                        			<?php endif; ?>
				                        			<?php if (isset($meta['kitchen-fridge'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/fridge.png">
				                        					Fridge/ Freezer
				                        				</div>
				                        			<?php endif; ?>
													<?php if (isset($meta['kitchen-stove'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/gas.png">
				                        					Stove
				                        				</div>
			                        				<?php endif; ?>
			                        			</td>
			                        		</tr>
			                        		<tr>
			                        			<td>
			                        				Entertainment  
			                        			</td>
			                        			<td>
			                        				<?php if (isset($meta['entertainment-pet'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/pet.png">
				                        					Pets welcome
				                        				</div>
				                        			<?php endif; ?>
			                        				<?php if (isset($meta['entertainment-bbq'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/bbq.png">
				                        					Grilling BBQ
				                        				</div>
				                        			<?php endif; ?>
			                        				<?php if (isset($meta['entertainment-beach-view'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/beach-view.png">
				                        					Beach view
				                        				</div>
				                        			<?php endif; ?>
			                        				<?php if (isset($meta['entertainment-nature'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/mountain.png">
				                        					Natural surround
				                        				</div>
				                        			<?php endif; ?>
			                        				<?php if (isset($meta['entertainment-golf'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/golf.png">
				                        					Golf
				                        				</div>
				                        			<?php endif; ?>
				                        			<?php if (isset($meta['entertainment-pool'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/pool.png">
				                        					Pool
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['entertainment-fishing'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/fishing.png">
				                        					Fishing
				                        				</div>
				                        			<?php endif ?>
			                        			</td>
			                        		</tr>
			                        		
			                        		<tr>
			                        			<td>
			                        				Complimentary amenities  
			                        			</td>
			                        			<td>
			                        				<?php if (isset($meta['system-services-wifi'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/wifi.png">
				                        					Wifi 
				                        				</div>
			                        				<?php endif ?>
			                        				<?php if (isset($meta['system-services-tv'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/tv.png">
				                        					TV 
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-shampoo'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/shampoo.png">
				                        					Shampoo, Conditioning 
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-toiletries'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/toilet.png">
				                        					Toiletries
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-napkins'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/napkins.png">
				                        					Napkins
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-mineral-water'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/mineral-water.png">
				                        					Mineral water
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-mineral-towels'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/towel.png">
				                        					Towels
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-toothpaste'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/toothpaste.png">
				                        					Toothpaste
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['system-services-soap'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/soap.png">
				                        					Soap
				                        				</div>
				                        			<?php endif ?>
			                        			</td>
			                        		</tr>
			                        		<tr>
			                        			<td>
			                        				Room Facilities   
			                        			</td>
			                        			<td>
			                        				<?php if (isset($meta['room-services-balcony'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/balcony.png">
				                        					Balcony
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['room-services-ac'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/ac.png">
				                        					Air-conditioning
				                        				</div>
				                        			<?php endif ?>
				                        			<?php if (isset($meta['room-services-washing-machine'])): ?>
				                        				<div class="col-xs-6" style="padding-top: 5px;">
				                        					<img src="assets/img/icon/dishwasher.png">
				                        					Washing machine
				                        				</div>
				                        			<?php endif ?>
			                        			</td>
			                        		</tr>
		                        		</tbody>
		                        	</table>
		                      	</div>
		                    </div>
		                </div>
		                <div class="panel panel-border panel-default">
		                    <div class="panel-heading" role="tab" id="headingOne">
		                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseOne">
		                            <h4 class="panel-title">
		                            Availability
		                            <i class="material-icons">keyboard_arrow_down</i>
		                            </h4>
		                        </a>
		                    </div>
		                    <div id="collapseThree" class="panel-collapse collapse">
		                      	<div class="panel-body">
		                        	<div id="show_months"></div>
		                      	</div>
		                    </div>
		                </div>
                	</div>
                </div><!--  end acordeon -->
            </div>


            <!-- Booking this room -->
            <div class="col-xs-12 col-md-4 col-sm-4">
            	<form method="POST" action="<?= base_url('booking') ?>" id="book-form">
					<input type="hidden" name="accessToken" value="<?= $accessToken ?>" id="accessToken">
					<input type="hidden" name="room_code" value="<?= $room_code ?>" id="room_code">
		            <div class="card card-product col-xs-12">
		            	<h3 class="title">
		            		<small class="pull-right">From $<?= $room['weekly_rate'] ?>/night</small>
		            	</h3>
		            	<div class="clearfix"></div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar-check-o fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control datepicker" name="check-in" placeholder="Check In" type="text" required>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-calendar-check-o fa-lg"></i>
							</span>
							<div class="form-group">
								<input class="form-control datepicker" name="check-out" placeholder="Check out" type="text" required>
							</div>
						</div>
						<div class="input-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-users fa-lg" style="margin-top: 10px;"></i>
								</span>
								<select class="selectpicker" name="number_of_guests" data-style="select-with-transition" id="number_of_guests" title="Number of guests?" data-size="7" required>
									<option value="1" selected="">1 guest</option>
									<?php for ($i = 2; $i <= intval($room['number_of_guests']); $i++): ?>
				                    	<option value="<?= $i ?>"><?= $i ?> guests</option>
				                    <?php endfor; ?>
				                </select>
							</div>
						</div>
						<br>
						
						<div class="row">
							<div class="col-xs-9" id="fee_explaination" data-toggle="popover" data-trigger="hover" title="Split price base" data-placement="top" data-html="true" data-content="<table class='table table-striped'><tr><td><span class='text-muted'>Monday-Thursday</span></td><td></td></tr><tr><td>0 x 0 night</td><td>$0</td></tr><tr><td><span class='text-muted'>Saturday-Sunday</span></td><td></td></tr><tr><td>0 x 0 night</td><td>$0</td></tr><tr><td><b>Total price base</b></td><td>$0</td></tr></table>">
								Rent fees 0 night 
								<i class="fa fa-question-circle" aria-hidden="true"></i>
							</div>
							<div class="col-xs-3 text-right">
								$ <span id="rent_fee">0</span>
							</div>
							<br>
							<br>
							<div class="col-xs-9" data-toggle="popover" data-trigger="hover" title="Other Services" data-placement="top" data-html="true" data-content="<table class='table table-striped'><tr><td>Cleaning fee</td><td>$0</td></tr><tr><td>Parking fee</td><td>$0</td></tr></table>">
								Tax/services fee
								<i class="fa fa-question-circle" aria-hidden="true"></i>
							</div>
							<div class="col-xs-3 text-right">
								$ 0
							</div>
						</div>
						<hr>
						<div class="row">
							<div role="separator" class="divider"></div>
							<div class="col-xs-9">Total</div>
							<div class="col-xs-3 text-right">$ <span id="total_fee"><?= $room['weekly_rate'] ?></span></div>
						</div>
						<button class="btn btn-info btn-round form-control" type="submit">Instant Book </button>
		            </div>
            	</form>
            </div>


            <!-- Typical Features -->
            <div class="clearfix"></div>
			<div class="features text-center">
	            <div class="row">
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-info">
								<i class="material-icons">local_shipping</i>
							</div>
							<h4 class="info-title">2 Days Delivery </h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success">
								<i class="material-icons">verified_user</i>
							</div>
							<h4 class="info-title">Refundable Policy</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-rose">
								<i class="material-icons">favorite</i>
							</div>
							<h4 class="info-title">Popular Item</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>

	            </div>
	        </div>
			

			<!-- Room location -->
	        <div class="clearfix"></div>
	        <div class="map text-center">
	        	<div id="room_location"></div>
	        </div>
			
			<!-- Related rooms -->
			<div class="related-products">
				<h3 class="title text-center">You may also be interested in:</h3>

				<div class="row">
					<?php foreach ($relate_rooms as $relate_room): ?>
						
						<div class="col-sm-6 col-md-3">
							<div class="card card-product">
								<div class="card-image">
									<a href="#">
										<img class="img" src="<?= $relate_room['room_thumbnail'] ?>" />
									</a>
								</div>

								<div class="card-content">
									<h6 class="category text-rose">Trending</h6>
									<h4 class="card-title">
										<a href="room/<?= $relate_room['room_id'] ?>">
											<?= $relate_room['name'] ?>
										</a>
									</h4>
									<div class="card-description">
										<?= $relate_room['short_description'] ?>
									</div>
									<div class="footer">
		                                <div class="price">
											<h4>$<?= $relate_room['weekly_rate'] ?></h4>
										</div>
		                            	<div class="stats">
											<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
												<i class="material-icons">favorite</i>
											</button>
		                            	</div>
		                            </div>

								</div>

							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php list($lat, $lng) = explode(',', $room['address']); ?>
<script type="text/javascript">
	function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('room_location'), 
    {
        center: {lat:<?= $lat ?>, lng: <?= $lng ?>}, 
        zoom: 15,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]

    });

    var marker = new google.maps.Marker({
        map: map,
        icon: 'disable',
        title: "<?= $room['name'] ?>",
        position: {lat:<?= $lat ?>, lng: <?= $lng ?>}
    });
    var circle = new google.maps.Circle({
	  	map: map,
	  	radius: 200,    // 50 metres
	  	fillColor: '#00bcd4'
	});
	circle.bindTo('center', marker, 'position');
}

initAutocomplete();
</script>
