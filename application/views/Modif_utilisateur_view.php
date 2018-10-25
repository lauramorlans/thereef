           <div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Modify user</h1>

        <div   id="formulaire">
	<?php
	echo form_open('Modif_utilisateur/modifier');

	$user_nom= array(
		'name'=>'nom',
		'id'=>'nom',
		'value'=>$tous[0]->user_nom
	);
	
	echo form_input($user_nom);


	$user_prenom= array(
		'name'=>'desc',
		'id'=>'desc',
		'value'=>$tous[0]->user_prenom
	);
	echo form_input($user_prenom);


	$user_mdp= array(
		'name'=>'mdp',
		'id'=>'mdp',
		'value'=>$tous[0]->user_mdp
	);
	echo form_input($user_mdp);


	$user_naissance= array(
		'name' =>'naissance',
		'id'=>'naissance',
		'value'=>$tous[0]->user_naissance
	);
	echo form_input($user_naissance);

	$user_nation= array(
		'name' =>'nation',
		'id' =>'nation',
		'value'=>$tous[0]->user_nation
	);
	echo form_input($user_nation);

	$user_mail= array(
		'name' =>'mail',
		'id'=> 'mail',
		'value'=> $tous[0]->user_mail
	);
	echo form_input($user_mail);


	$user_rang= array(
		'donateur' =>'Donateur',
		'admin'=> 'Admin'
	);
	echo form_dropdown('user_rang',$user_rang);

	$user_id= array(
		'name' =>'id',
		'id' => 'id',
		'value' =>$tous[0]->user_id
	);

	echo form_input($user_id);

	echo form_submit('envoi', 'Valider');


	echo form_close();

	?>
        </div>

    </section> 

     </div>
    </div>
</div>