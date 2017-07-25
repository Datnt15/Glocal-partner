<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<div class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<?php for($i = 1; $i < 7; $i++): ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>"></li>
			<?php endfor; ?>
		</ol>

		<!-- Wrapper for slides -->
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
										<a href="sections.html#pablo" class="btn btn-primary btn-lg">
											Read More
										</a>
										<a href="sections.html#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="sections.html#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="sections.html#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
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

		<!-- Controls -->
		<a class="left carousel-control" href="sections.html#carousel-example-generic" data-slide="prev">
			<i class="material-icons">keyboard_arrow_left</i>
		</a>
		<a class="right carousel-control" href="sections.html#carousel-example-generic" data-slide="next">
			<i class="material-icons">keyboard_arrow_right</i>
		</a>
	</div>
</div>

<div class="section section-gray">
	<div class="container">
		<div class="main main-raised main-product">
			<div class="main main-raised main-product">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                       <div class="tab-content">
                            <div class="tab-pane" id="product-page1">
                                 <img src="assets/img/room-1.jpg"/>
                              </div>
                              <div class="tab-pane active" id="product-page2">
                                  <img src="assets/img/room-2.jpg"/>
                             </div>
                              <div class="tab-pane" id="product-page3">
                                  <img src="assets/img/room-3.jpg"/>
                              </div>
                              <div class="tab-pane" id="product-page4">
                                  <img src="assets/img/room-4.jpg"/>
                              </div>
                        </div>
                        <ul class="nav flexi-nav" role="tablist" id="flexiselDemo1">
							<li class="active">
								<a href="product-page.html#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
									<img src="assets/img/room-5.jpg"/>
								</a>
							</li>
							<li>
								<a href="product-page.html#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
									<img src="assets/img/room-6.jpg"/>
								</a>
							</li>
							<li>
								<a href="product-page.html#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
									<img src="assets/img/room-7.jpg"/>
								</a>
							</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
						<h2 class="title"> Becky Silk Blazer </h2>
						<h3 class="main-price">$335</h3>
						<div id="acordeon">
                            <div class="panel-group" id="accordion">
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="product-page.html#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Description
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <p>Eres' daring 'Grigri Fortune' swimsuit has the fit and coverage of a bikini in a one-piece silhouette. This fuchsia style is crafted from the label's sculpting peau douce fabric and has flattering cutouts through the torso and back. Wear yours with mirrored sunglasses on vacation.</p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="product-page.html#collapseTwo" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Designer Information
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                An infusion of West Coast cool and New York attitude, Rebecca Minkoff is synonymous with It girl style. Minkoff burst on the fashion scene with her best-selling 'Morning After Bag' and later expanded her offering with the Rebecca Minkoff Collection - a range of luxe city staples with a "downtown romantic" theme.
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="product-page.html#collapseThree" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Details and Care
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                     <li>Storm and midnight-blue stretch cotton-blend</li>
                                     <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
                                     <li>Two button fastening</li>
                                     <li>84% cotton, 14% nylon, 2% elastane</li>
                                     <li>Dry clean</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>
                        </div><!--  end acordeon -->

			            <div class="row pick-size">
                            <div class="col-md-6 col-sm-6">
                                <label>Select color</label>
								<select class="selectpicker" data-style="select-with-transition" data-size="7">
									<option value="1">Rose </option>
									<option value="2">Gray</option>
									<option value="3">White</option>
								</select>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label>Select size</label>
								<select class="selectpicker" data-style="select-with-transition" data-size="7">
									<option value="1">Small </option>
									<option value="2">Medium</option>
									<option value="3">Large</option>
								</select>
                            </div>
                        </div>
                        <div class="row text-right">
                            <button class="btn btn-rose btn-round">Add to Cart &nbsp;<i class="material-icons">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            </div>
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

			<div class="related-products">
				<h3 class="title text-center">You may also be interested in:</h3>

				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="product-page.html#pablo">
									<img class="img" src="assets/img/room-2.jpg" />
								</a>
							</div>

							<div class="card-content">
								<h6 class="category text-rose">Trending</h6>
								<h4 class="card-title">
									<a href="product-page.html#pablo">Dolce & Gabbana</a>
								</h4>
								<div class="card-description">
									Dolce & Gabbana's 'Greta' tote has been crafted in Italy from hard-wearing red textured-leather.
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$1,459</h4>
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

					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="product-page.html#pablo">
									<img class="img" src="assets/img/room-4.jpg" />
								</a>
							</div>

							<div class="card-content">
								<h6 class="category text-muted">Popular</h6>
								<h4 class="card-title">
									<a href="product-page.html#pablo">Balmain</a>
								</h4>
								<div class="card-description">
									Balmain's mid-rise skinny jeans are cut with stretch to ensure they retain their second-skin.
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$459</h4>
									</div>
	                            	<div class="stats">
										<button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
											<i class="material-icons">favorite</i>
										</button>
	                            	</div>
	                            </div>

							</div>

						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="product-page.html#pablo">
									<img class="img" src="assets/img/room-5.jpg" />
								</a>
							</div>

							<div class="card-content">
								<h6 class="category text-muted">Popular</h6>
								<h4 class="card-title">
									<a href="product-page.html#pablo">Balenciaga</a>
								</h4>
								<div class="card-description">
									Balenciaga's black textured-leather wallet is finished with the label's iconic 'Giant' studs. This is where you can...
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$590</h4>
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

					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="product-page.html#pablo">
									<img class="img" src="assets/img/room-6.jpg" />
								</a>
							</div>

							<div class="card-content">
								<h6 class="category text-rose">Trending</h6>
								<h4 class="card-title">
									<a href="product-page.html#pablo">Dolce & Gabbana</a>
								</h4>
								<div class="card-description">
									Dolce & Gabbana's 'Greta' tote has been crafted in Italy from hard-wearing red textured-leather.
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$1,459</h4>
									</div>
	                            	<div class="stats">
										<button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
											<i class="material-icons">favorite</i>
										</button>
	                            	</div>
	                            </div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>