
<div id="textintro">
                

    <section class="text-center" id="login">

    <h1>Donate</h1>

        <div id="formulaire">
        <?php
        echo form_open('Donate');

	$op=array();

foreach ($tous as $uneoperation) {

		$nom = $uneoperation->op_nom;
		$id = $uneoperation->op_id;
	
		$op[$id] = $nom;

				
	}
		echo '<p class="dropdown1">'. form_dropdown('op', $op).'</p></br>';


	$don = array(
		'name' => 'don',
		'id' => 'don',
		'placeholder' => 'Amount',
		'value' => set_value('don')
	);

	echo form_input($don).'</br>';


	echo '<p class="needmargintop">'. form_submit('envoi', 'Validate') . '</p>';

	echo form_close();

	?>

           
        </div>

    </section> 

     </div>
    </div>
</div>
