<div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Contact</h1>

        <div   id="formulaire">

<?php
	
	echo form_open('Contact');

	$mail= array(
		'name'=>'mail',
		'id'=>'mail',
		'placeholder'=>'Your mail adress',
		'value'=>set_value('mail')
	);
	echo form_input($mail);

	$objet= array(
		'name'=>'objet',
		'id'=>'objet',
		'placeholder'=>'Object',
		'value'=>set_value('objet')
	);
	echo form_input($objet);

	$text= array(
		'name'=>'text',
		'id'=>'text',
		'placeholder'=>'Your message',
		'value'=>set_value('text')
	);
	echo form_textarea($text);



	echo form_submit('envoi', 'Send');


	echo form_close();

?>
</div>
    </section> 

     </div>
    </div>
</div>
