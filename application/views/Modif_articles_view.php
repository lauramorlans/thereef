            <div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Modify articles</h1>

        <div   id="formulaire">
        <?php
	echo form_open('Modif_articles/modifier');

	$art_nom= array(
		'name'=>'nom',
		'id'=>'nom',
		'value'=>$tous[0]->art_nom
	);
	
	echo form_input($art_nom);

	$art_auteur= array(
		'name'=>'auteur',
		'id'=>'auteur',
		'value'=>$tous[0]->art_auteur
	);

	echo form_input($art_auteur);

	$art_desc= array(
		'name'=>'desc',
		'id'=>'desc',
		'value'=>$tous[0]->art_desc
	);
	echo form_textarea($art_desc);

	$art_text= array(
		'name'=>'text',
		'id'=>'text',
		'value'=>$tous[0]->art_text
	);
	echo form_textarea($art_text);


	$art_id= array(
		'name' =>'id',
		'id' => 'id',
		'value' =>$tous[0]->art_id
	);

	echo form_input($art_id);

	echo form_submit('envoi', 'Valider');


	echo form_close();

	?>

        </div>

    </section> 

     </div>
    </div>
</div>