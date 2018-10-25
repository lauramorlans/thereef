            <div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Login</h1>

        <div   id="formulaire">
	<?php
	
	echo form_open('Ajout_utilisateurs');
	$nom= array(
		'name'=>'nom',
		'id'=>'nom',
		'placeholder'=>'Name',
		'value'=>set_value('nom')
	);
	echo form_input($nom);

	$prenom= array(
		'name'=>'prenom',
		'id'=>'prenom',
		'placeholder'=>'First name',
		'value'=>set_value('prenom')
	);
	echo form_input($prenom);

	$mdp= array(
		'name'=>'mdp',
		'id'=>'mdp',
		'placeholder'=>'Password',
		'value'=>set_value('mdp')
	);
	echo form_password($mdp);

	$naissance= array(
		'name'=>'naissance',
		'id'=>'naissance',
		'placeholder'=>'aaaa/mm/jj',
		'value'=>set_value('naissance')
	);
	echo form_input($naissance);

	$nation= array(
		'name'=>'nation',
		'id'=>'nation',
		'placeholder'=>'Nationality',
		'value'=>set_value('nation')
	);
	echo form_input($nation);

	$mail= array(
		'name'=>'mail',
		'id'=>'mail',
		'placeholder'=>'Mail',
		'value'=>set_value('mail')
	);
	echo form_input($mail);

	$rang= array(
		'name'=>'rang',
		'id'=>'rang',
		'placeholder'=>'Rang',
		'value'=>set_value('rang')
	);
	echo form_input($rang);

	echo form_submit('envoi', 'Validate');


	echo form_close();

	?>
        </div>

    </section> 

     </div>
    </div>
</div>