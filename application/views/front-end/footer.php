  
  
<!-- Footer -->
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

<!-- Chatbox -->
  
<div id="chat-circle" class="btn btn-raised">
    <div id="chat-overlay"></div>
    <i class="fa fa-envelope"></i>
    <sup class="h6"></sup>
</div>
  
<div class="chat-box">
    <div class="chat-box-header">
      	Tư vấn
      	<span class="chat-box-toggle"><i class="fa fa-compress"></i></span>
    </div>
    <div class="chat-box-body">
      	<div class="chat-box-overlay">   
      	</div>

      	<!--chat-log -->
      	<div class="chat-logs">
      	</div>
    </div>
    <div class="chat-input">      
      	<form>
        	<input type="text" id="chat-input" placeholder="Send a message..."/>
      		<button type="submit" class="chat-submit" id="chat-submit"><i class="fa fa-send-o"></i></button>
      	</form>      
    </div>
</div>
  

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
<script src="assets/js/toastr.min.js" type="text/javascript"></script>
<script src="assets/js/atv-img-animation.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/material-kit.min.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<?php if ($this->session->flashdata('type')): ?>
	<script type="text/javascript">
		jQuery(document).ready(function() {   
		    toastr['<?= $this->session->flashdata('type') ?>']('<?= $this->session->flashdata('msg'); ?>', '<?= $this->session->flashdata('title') ?>');
		});
	</script>
<?php endif ?>
<?php if (isset($is_room_page)): ?>
	<?php if (isset($meta['address'])):
		list($lat, $lng) = explode(',', $meta['address']);
	else:
		list($lat, $lng) = explode(',', $location['location_address']);
	endif; ?>
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
		        title: "<?= isset($room['room_no']) ? $room['room_no'] : $location['location_name']; ?>",
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

<?php endif ?>
</html>
