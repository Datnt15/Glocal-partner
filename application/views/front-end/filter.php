<!-- Filter -->
<div class="card card-refine card-plain">
	<div class="card-content" id="filter">
		<h4 class="card-title">
			Refine
			<button class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right" rel="tooltip" title="Reset Filter">
				<i class="material-icons">cached</i>
			</button>
		</h4>
		
		<!-- Price Range -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingOne">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<h4 class="panel-title">Price Range</h4>
					<i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body panel-refine">
					<span id="price-left" class="price-left pull-left" data-currency="$">30</span>
					<span id="price-right" class="price-right pull-right" data-currency="$">850</span>
					<div class="clearfix"></div>
					<div id="sliderRefine" class="slider slider-info"></div>
				</div>
			</div>
		</div>
		
		<!-- Type of accommodation -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingTwo">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					<h4 class="panel-title">Type of accommodation</h4>
					<i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="all" value="" data-toggle="checkbox" checked="">
							All
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-type" value="<?php echo APARTMENT; ?>" data-toggle="checkbox">
							Apartment
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-type" value="<?php echo VILLA; ?>" data-toggle="checkbox">
							Villa
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-type" value="<?php echo HOTEL; ?>" data-toggle="checkbox">
							Hotel
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-type" value="<?php echo HOUSE; ?>" data-toggle="checkbox">
							Entire House
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-type" value="<?php echo SHARED; ?>" data-toggle="checkbox">
							Shared House
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-type" value="<?php echo STUDIO; ?>" data-toggle="checkbox">
							Studio
						</label>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Families -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingThree">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<h4 class="panel-title">Families</h4>
					<i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				<div class="panel-body">
					
					<div class="checkbox">
						<label>
						   	<input type="checkbox" name="family" value="family-baby" data-toggle="checkbox">
							Babies/ Toddlers welcome
						</label>
					</div>

					<div class="checkbox">
						<label>
						   <input type="checkbox" name="family" value="family-extra-mattress" data-toggle="checkbox">
						   Extra mattress
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="family" value="family-no-smocking" data-toggle="checkbox">
							No Smocking
						 </label>
					</div>

			   </div>
		   </div>
	   	</div>
		
		<!-- Kitchen Facilities -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingFour">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					<h4 class="panel-title">Kitchen Facilities</h4>
					 <i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					
					<div class="checkbox">
						<label>
							<input type="checkbox" name="kitchen" value="kitchen-oven" data-toggle="checkbox">
							Oven
					  	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="kitchen" value="kitchen-microwave" data-toggle="checkbox">
							Microwave
						</label>
					</div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="kitchen" value="kitchen-fridge" data-toggle="checkbox">
							Fridge/ Freezer
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="kitchen" value="kitchen-stove" data-toggle="checkbox">
							Stove
					    </label>
				   </div>
				</div>
			</div>
		</div>
		
		<!-- Entertainment -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingFour">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFith" aria-expanded="false" aria-controls="collapseFith">
					<h4 class="panel-title">Entertainment</h4>
					 <i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseFith" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="entertainment" value="entertainment-pet" data-toggle="checkbox" checked="">
							Pets welcome
					   	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="entertainment" value="entertainment-bbq" data-toggle="checkbox">
							Grilling BBQ
					  	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="entertainment" value="entertainment-nature" data-toggle="checkbox">
							Natural surround
						</label>
					</div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="entertainment" value="entertainment-beach-view" data-toggle="checkbox">
							Beach view
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="entertainment" value="entertainment-golf" data-toggle="checkbox">
							Golf
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="entertainment" value="entertainment-fishing" data-toggle="checkbox">
							Fishing
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="entertainment" value="entertainment-pool" data-toggle="checkbox">
							Pool
					    </label>
				   </div>
				</div>
			</div>
		</div>
		
		<!-- complimentary amenities -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingFour">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
					<h4 class="panel-title">
						Complimentary amenities
					</h4>
					 <i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseSixth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="system" value="system-services-wifi" data-toggle="checkbox" checked="">
							Wifi
					   	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="system" value="system-services-tv" data-toggle="checkbox">
							TV
					  	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="system" value="system-services-shampoo" data-toggle="checkbox">
							Shampoo, Conditioning
						</label>
					</div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="system" value="system-services-toiletries" data-toggle="checkbox">
							Toiletries
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="system" value="system-services-napkins" data-toggle="checkbox">
							Napkins
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="system" value="system-services-mineral-water" data-toggle="checkbox">
							Mineral water
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="system" value="system-services-towels" data-toggle="checkbox">
							Towels
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="system" value="system-services-toothpaste" data-toggle="checkbox">
							Toothpaste
					    </label>
				   </div>

				   <div class="checkbox">
					    <label>
							<input type="checkbox" name="system" value="system-services-soap" data-toggle="checkbox">
							Soap
					    </label>
				   </div>
				</div>
			</div>
		</div>
		
		<!-- Room Facilities -->
		<div class="panel panel-default panel-info">
			<div class="panel-heading" role="tab" id="headingFour">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventh" aria-expanded="false" aria-controls="collapseSeventh">
					<h4 class="panel-title">
						Room Facilities
					</h4>
					 <i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
			<div id="collapseSeventh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-service" value="room-services-balcony" data-toggle="checkbox" checked="">
							Balcony
					   	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-service" value="room-services-ac" data-toggle="checkbox">
							Air-conditioning
					  	</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="room-service" value="room-services-washing-machine" data-toggle="checkbox">
							Washing machine
						</label>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
