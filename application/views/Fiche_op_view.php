<div id="textintro" class="text-center">
	        	<div>
					<h2><?php echo $tous[0]->op_nom ?></h2>
				</div>
			</div>
    </div>
</div>

<section class="fiches">

	<div class="text-center">

<?php

	echo '<p><b>Description of the operation :</b> '.$tous[0]->op_desc.' <p/></br>';
	echo '<p><b>Goal of the operation :</b> '.$tous[0]->op_obj.' € <p/></br>';
	echo '<p><b>Date :</b> '.$tous[0]->op_datefin.' <p/></br>';
	echo '<p><b>Situation of the operation :</b> '.$tous[0]->op_etat.' <p/></br>';
	$op_id = $tous[0]->op_id;
 	$sum=$this->Fiche_op_model->recupsum($op_id);
 	$somme = $sum[0]->don_montant;
	echo '<b><p>Sum reached : </b>'.$somme.' €<p/></br>';
	echo '<b><p>Progression : </b>'.$somme*100/$tous[0]->op_obj.' %<p/><br>';
	$this->load->helper('date');
	
	echo form_open('Fiche_op/fiche_op/'.$op_id);


	$don = array(
		'name' => 'don',
		'id' => 'don',
		'placholder'=>'Value',
		'value' => set_value('don')
	);

	echo '<br><p><center><b>Faire un nouveau don : </b><center></p>';

	echo '<p class="test">'. form_input($don) . '</p>';

	echo form_submit('envoi', 'Validate');

	echo form_close();
	?>
 
</div>
</section>