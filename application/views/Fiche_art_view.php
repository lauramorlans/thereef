	        <div id="textintro" class="text-center">
	        	<div>
					<h2><?php echo $tous[0]->art_nom ?></h2>
				</div>
			</div>
    </div>
</div>

<section class="fiches">

	<div class="text-center">
<?php

	echo '<p><b>Author : </b>'.$tous[0]->art_auteur.' </p></br>';
	echo '<p><b>Description : </b>'.$tous[0]->art_desc.' </p></br>';
	echo '<p><b>Text :</b> '.$tous[0]->art_text.' </p></br>';
	echo '<p><b>Publish date : </b>'.$tous[0]->art_date.' </p></br>';
	
	?>
	</div>
</section>
 
