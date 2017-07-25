<footer class="footer footer-black footer-big">
		<div class="container">

			<div class="content">
				<div class="row">
					<div class="col-md-4">
						<h5>About Us</h5>
						<p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
					</div>

					<div class="col-md-4">
						<h5>Social Feed</h5>
						<div class="social-feed">
							<div class="feed-line">
								<i class="fa fa-twitter"></i>
								<p>How to handle ethical disagreements with your clients.</p>
							</div>
							<div class="feed-line">
								<i class="fa fa-twitter"></i>
								<p>The tangible benefits of designing at 1x pixel density.</p>
							</div>
							<div class="feed-line">
								<i class="fa fa-facebook-square"></i>
								<p>A collection of 25 stunning sites that you can use for inspiration.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<h5>Instagram Feed</h5>
						<div class="gallery-feed">
							<img src="assets/img/faces/card-profile6-square.jpg" class="img img-raised img-rounded" alt="" />
							<img src="assets/img/faces/christian.jpg" class="img img-raised img-rounded" alt="" />
							<img src="assets/img/faces/card-profile4-square.jpg" class="img img-raised img-rounded" alt="" />
							<img src="assets/img/faces/card-profile1-square.jpg" class="img img-raised img-rounded" alt="" />

							<img src="assets/img/faces/marc.jpg" class="img img-raised img-rounded" alt="" />
							<img src="assets/img/faces/kendall.jpg" class="img img-raised img-rounded" alt="" />
							<img src="assets/img/faces/card-profile5-square.jpg" class="img img-raised img-rounded" alt="" />
							<img src="assets/img/faces/card-profile2-square.jpg" class="img img-raised img-rounded" alt="" />
						</div>

					</div>
				</div>
			</div>


			<hr />

			<a class="footer-brand" href="#">Material Kit PRO<div class="ripple-container"></div></a>


            <ul class="pull-center">
                <li>
                    <a href="index.html#pablo">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="index.html#pablo">
                        Presentation
                    </a>
                </li>
                <li>
                    <a href="index.html#pablo">
                       Discover
                    </a>
                </li>
                <li>
                    <a href="index.html#pablo">
                        Payment
                    </a>
                </li>
                <li>
                    <a href="index.html#pablo">
                        Contact Us
                    </a>
                </li>
            </ul>

            <ul class="social-buttons pull-right">
                <li>
                    <a href="https://twitter.com/" target="_blank" class="btn btn-just-icon btn-simple">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank" class="btn btn-just-icon btn-simple">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank" class="btn btn-just-icon btn-simple">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>

		</div>
	</footer>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/bootstrap-tagsinput.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexisel.js"></script>
	<script src="assets/js/atv-img-animation.js" type="text/javascript"></script>
	<script src="assets/js/material-kit.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			materialKit.initFormExtendedDatetimepickers();
			var slider2 = document.getElementById('sliderRefine');

			noUiSlider.create(slider2, {
				start: [42, 880],
				connect: true,
				range: {
				   'min': [30],
				   'max': [900]
				}
			});

			var limitFieldMin = document.getElementById('price-left');
			var limitFieldMax = document.getElementById('price-right');

			slider2.noUiSlider.on('update', function( values, handle ){
				if (handle){
					limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
				} else {
					limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
				}
			});
			// $("#flexiselDemo1").flexisel({
			// 	visibleItems: 4,
	  //   		itemsToScroll: 1,
	  //   		animationSpeed: 400,
	  //           enableResponsiveBreakpoints: true,
	  //           responsiveBreakpoints: {
	  //               portrait: {
	  //                   changePoint:480,
	  //                   visibleItems: 3
	  //               },
	  //               landscape: {
	  //                   changePoint:640,
	  //                   visibleItems: 3
	  //               },
	  //               tablet: {
	  //                   changePoint:768,
	  //                   visibleItems: 3
	  //               }
	  //           }
	  //       });
		});
	</script>
</html>
