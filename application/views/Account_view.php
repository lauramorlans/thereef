	        <div id="textintro" class="text-center">
	        	<div>
					<h2 class="needmarginpetit">Welcome in your personnal space</br>
					<?php
						//Ceci est une tentative d'affichage des données utilisateurs
						
						echo $_SESSION['user_name'].' '.$_SESSION['user_firstname'];
					?></h2>
					<a href="http://195.83.128.55/~mmi171db10/thereef/User/logout"><button >Disconnect</button></a>

					<?php
						if ($this->session->userdata('user_rank') == 'Admin') {
						echo '<a href='.base_url().'Admin><button class="buttoncentral">Administation</button></a></br>';
						}
					?>
				</div>
			</div>
    </div>
</div>
<!--page perso-->


<section>
      <div class="container">
        <div class="row ">
          <div class="col-lg-12 mx-auto text-center">
            <div class="descriptop">
	  		<h3 class="needmarginpetit">Project</h3>
	  		</div>

	  		
            <table class="needmargin">
				<tr><th>Donate </th><th> Operation </th><th> Date </th></tr>

				<?php


	  		foreach ($don as $undon) {
	  			$montant=$undon->don_montant;
	  			$nom = $undon->op_nom;
	  			$date=$undon->don_date;
	  		
				echo'<tr><td>'.$montant.'</td><td>'.$nom.'</td><td>'.$date.'</td></tr>';

			}
?>
			
			</table>

			<a href="<?php echo base_url() ?>Donate"><button class="buttoncentral">Donate</button></a>
          </div>
        </div>
      </div>
    </section>



<div class="descriptop">
  		<h3>Current operations</h3>
  		<div class="descriptopleft">
  			<p>All our operations help to save the Great Barrier Reef.</p>
  			<p>Join us !</p>
  		</div>
  		<div class="descriptopright">
  			<a href="<?php echo base_url() ?>Operations/operationspage"><button>All operations</button></a>
  		</div>
  	</div>

<div class="w3-content">

  <div class="w3-row-padding  w3-center">
    <div class="w3-quarter quartertop quartertopfirst bottomcontainer">
      <a href="<?php echo base_url() .'Fiche_op/fiche_op/'.$op1[0]->op_id; ?>"><img src="<?php echo base_url() ?>asset/img/op1.jpg" alt="Sandwich" style="width:100%">
      	<div class="bottomleft">
	      <h4><?php echo $op1[0]->op_nom; ?></h4>
	      <p></p>
  		</div>
  	</a>
    </div>
    <div class="w3-quarter quarterbottom bottomcontainer">
      <a href="<?php echo base_url() .'Fiche_op/fiche_op/'.$op2[0]->op_id; ?>"><img src="<?php echo base_url() ?>asset/img/op2.jpg" alt="Steak" style="width:100%">
      	<div class="bottomleft">
      <h4><?php echo $op2[0]->op_nom; ?></h4>
      <p></p>
    	</div>
    </a>
	</div>
    <div class="w3-quarter quartertop bottomcontainer" >
      <a href="<?php echo base_url() .'Fiche_op/fiche_op/'.$op3[0]->op_id; ?>"><img src="<?php echo base_url() ?>asset/img/op3.jpg" alt="Cherries" style="width:100%">
      	<div class="bottomleft">
	      <h4><?php echo $op3[0]->op_nom; ?></h4>
	      <p></p>
    	</div>
    	</a>	
   </div> 
    <div class="w3-quarter quarterbottom bottomcontainer">
      <a href="<?php echo base_url() .'Fiche_op/fiche_op/'.$op4[0]->op_id; ?>"><img src="<?php echo base_url() ?>asset/img/op4.jpg" alt="Pasta and Wine" style="width:100%">
      	<div class="bottomleft">
	      <h4><?php echo $op4[0]->op_nom; ?></h4>
	      <p></p>
	    </div>
	   </a> 
   </div> 
  </div>
</div>


<section class="needmargin">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12 mx-auto text-center">
            <div class="descriptop">
	  		<h3 class="needmarginpetit">News</h3>
	  		</div>

	  		<div class="container">
              <div class="row ">


            <div class="col-lg-4 mx-auto">
		      <a href="<?php echo base_url() .'Fiche_art/fiche_art/'.$art1[0]->art_id; ?>"><img src="<?php echo base_url() ?>asset/img/blog1.jpg" alt="Sandwich" style="width:100%">
		      	<div class="bottomleft text-white">
			      <h4><?php echo $art1[0]->art_nom; ?></h4>
			      <p><?php echo $art1[0]->art_desc; ?></p>
		  		</div>
		  	  </a>
		    </div>

		    <div class="col-lg-4 mx-auto">
		      <a href="<?php echo base_url() .'Fiche_art/fiche_art/'.$art2[0]->art_id; ?>"><img src="<?php echo base_url() ?>asset/img/blog2.jpg" alt="Sandwich" style="width:100%">
		      	<div class="bottomleft text-white">
			      <h4><?php echo $art2[0]->art_nom; ?></h4>
			      <p><?php echo $art2[0]->art_desc; ?></p>
		  		</div>
		  	  </a>
		    </div>

		    <div class="col-lg-4 mx-auto">
		      <a href="<?php echo base_url() .'Fiche_art/fiche_art/'.$art3[0]->art_id; ?>"><img src="<?php echo base_url() ?>asset/img/blog3.jpg" alt="Sandwich" style="width:100%">
		      	<div class="bottomleft text-white">
			      <h4><?php echo $art3[0]->art_nom; ?></h4>
			      <p><?php echo $art3[0]->art_desc; ?></p>
		  		</div>
		  	  </a>
		    </div>

		    </div>
		    </div>

          </div>
        </div>
      </div>
    </section>
