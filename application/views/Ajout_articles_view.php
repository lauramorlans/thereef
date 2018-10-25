            <div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Add an article</h1>

        <div   id="formulaire">
        <?php

	
	echo form_open('Ajout_articles');
	$art_nom= array(
		'name'=>'nom',
		'id'=>'nom',
		'placeholder'=>'Name',
		'value'=>set_value('nom')
	);
	echo form_input($art_nom);

	$art_desc= array(
		'name'=>'desc',
		'id'=>'desc',
		'placeholder'=>'Description',
		'value'=>set_value('desc')
	);
	echo form_textarea($art_desc);

	$art_text= array(
		'name'=>'text',
		'id'=>'text',
		'placeholder'=>'Votre texte',
		'value'=>set_value('text')
	);

	echo form_textarea($art_text);

	$art_img= array(
		'name'=>'img',
		'id'=>'img',
		'placeholder'=>'Your image',
		'value'=>set_value('img')
	);
	echo form_upload($art_img);

	$art_date= array(
		'name'=>'date',
		'id'=>'date',
		'placeholder'=>'Date',
		'value'=>set_value('date')
	);
	echo form_input($art_date);

	echo form_submit('envoi', 'Validate');


	echo form_close();

	?>

        </div>

    </section> 

     </div>
    </div>
</div>