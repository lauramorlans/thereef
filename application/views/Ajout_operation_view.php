            <div id="textintro">
                

    <section class="text-center" id="login">

    <h1 class="needmarginpetit">Add an operation</h1>

        <div   id="formulaire">
	<?php
	
	echo form_open('Ajout_operation');
	$op_nom= array(
		'name'=>'nom',
		'id'=>'nom',
		'placeholder'=>'Name',
		'value'=>set_value('nom')
	);
	echo form_input($op_nom);

	$op_desc= array(
		'name'=>'desc',
		'id'=>'desc',
		'placeholder'=>'Description',
		'value'=>set_value('desc')
	);
	echo form_textarea($op_desc);
	
	$op_obj= array(
		'name'=>'obj',
		'id'=>'obj',
		'placeholder'=>'Goal',
		'value'=>set_value('obj')
	);
	echo form_input($op_obj);

	$op_img= array(
		'name'=>'img',
		'id'=>'img',
		'placeholder'=>'Your image',
		'value'=>set_value('img')
	);
	echo form_upload($op_img);

	$op_datefin= array(
		'name'=>'datefin',
		'id'=>'datefin',
		'placeholder'=>'Date',
		'value'=>set_value('datefin')
	);
	echo form_input($op_datefin);

	$op_etat= array(

		'active' => 'In progress',
		'finie' => 'Finished'
	);

	echo '<p class="dropdown1">' . form_dropdown('op_etat', $op_etat) . '</p>';

	echo '<p class="needmargintop">'. form_submit('envoi', 'Validate') . '</p>';


	echo form_close();

	?>

</div>

    </section> 

     </div>
    </div>
</div>