           <div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Modify operation</h1>

        <div   id="formulaire">
	<?php
	echo form_open('Modif_operation/modifier');

	$op_nom= array(
		'name'=>'nom',
		'id'=>'nom',
		'value'=>$tous[0]->op_nom
	);
	
	echo form_input($op_nom);


	$op_desc= array(
		'name'=>'desc',
		'id'=>'desc',
		'value'=>$tous[0]->op_desc
	);
	echo form_textarea($op_desc);

	$op_obj= array(
		'name'=>'obj',
		'id'=>'obj',
		'value'=>$tous[0]->op_obj
	);
	echo form_textarea($op_obj);


	$op_id= array(
		'name' =>'id',
		'id' => 'id',
		'value' =>$tous[0]->op_id
	);

	echo form_input($op_id);

	echo form_submit('envoi', 'Valider');


	echo form_close();

	?>
        </div>

    </section> 

     </div>
    </div>
</div>