<div class="card card-plain card-blog">
	<div class="row">
		<div class="col-md-6">
			<div class="card-image">
				<img class="img img-raised" src="<?php echo $room['room_thumbnail']; ?>" alt="<?php echo $room['room_no'] ?>" />
			</div>
		</div>
		<div class="col-md-6">
			<h3 class="card-title">
				<a href="<?= base_url() ?>room/<?php echo $room['id'] ?>"><?php echo $room['room_no'] ?></a>
			</h3>
			<p class="card-description">
				Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and… <a href="sections.html#pablo"> Read More </a>
			</p>
		</div>
	</div>
</div>