<div class="card card-plain card-blog">
	<div class="row">
		<div class="col-md-6">
			<div class="card-image">
				<img class="img img-raised" src="<?php echo $room['room_thumbnail']; ?>" alt="<?php echo $room['room_no'] ?>" />
			</div>
		</div>
		<div class="col-md-6">
			<h3 class="card-title">
				<a href="<?= base_url() ?>room/<?php echo $room['id'] ?>"><?php echo "Room: " $room['room_no'] ?></a>
			</h3>
			<p class="card-description">
				<img src="<?php echo base_url('assets/img/daily.png'); ?>" style="width: 20px; float: left;" alt=""> <?php echo $room['room_daily_tax']; ?><sup>USD</sup> per night.
			</p>
			<p class="card-description">
				Type: <?php switch ($room['room_type']) {
					case HOUSE:
						echo 'HOUSE';
						break;
					case APARTMENT:
						echo 'APARTMENT';
						break;
					case VILLA:
						echo 'VILLA';
						break;
					case HOTEL:
						echo 'HOTEL';
						break;
					case STUDIO:
						echo 'STUDIO';
						break;
					case SHARED:
						echo 'SHARED';
						break;
					
				} ?>
			</p>
			<p class="card-description">
				<img src="<?php echo base_url('assets/img/icon/bed.png') ?>" style="width: 20px;float: left;" alt=""> <?php echo $room['room_beds'] . ' Beds'; ?>
			</p>
			<p class="card-description">
				<?php //print_r($location); ?>
				<i class="fa fa-map-marker"></i>
			</p>
		</div>
	</div>
</div>