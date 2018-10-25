<div class="main-wrapper">
	<section class="special-offer-area">
				<div class="container-fluid">
					<div class="row">

						<?php foreach ($tous as $unesalle) { ?>
						<div class="col-md-6 text-center offer-left">
							<div class="offer_desc p-20">
								<h2><?php echo $unesalle->salle_nom ?></h2>
								<h3><?php echo $unesalle->salle_code ?></h3>
								<h4><?php echo $unesalle->salle_placemax ?></h4>
								<h5><?php echo number_format(($unesalle->salle_surface)/($unesalle->salle_placemax)) ?></h5>
							</div>
						</div>
						<?php } ?>
						
					</div>
				</div>
			</section>
</div>
