	        <div id="textintro" class="text-center">
	        	<div>
					<h2>Operations</h2>
				</div>
			</div>
    </div>
</div>

<section>

	<div class="textcentera text-center needmargin needmargintop">
	<?php
		if ($this->session->userdata('user_rank') == 'Admin') {
		echo '<a href='.base_url().'Ajout_operation><button class="needmarginpetit">Add operation</button></a></br>';
		}

		echo '<p id="pagination">'. $pagination . '</p>';

	?>
	<form class="needmargintop" action="<?php echo site_url('Operations/search');?>" method = "post">
		<input type="text" name = "keyword" />
		<input type="submit" value = "Search" />
	</form>



	<?php

	echo '<a href='.base_url().'Operations/tri_actif><button class="buttoncentral needmargintop">In progress</button></a>';
	echo '<a href='.base_url().'Operations/tri_fin><button class="buttoncentral">Finished</button></a>';
	


?>


	</div>

</section>

<section class="needmargin">
      <div class="container">
        <div class="row ">
        <?php
				
			foreach ($tous as $uneoperation) {
						
				$titre = $uneoperation->op_nom;
			?>	

          <div class="col-lg-3 mx-auto text-center">
          <div class="container">
          	<div class="row">

		          <div class="col-lg-12 mx-auto text-center">
		            
		          	<a href="<?php echo base_url() .'Fiche_op/fiche_op/'.$uneoperation->op_id.'>'.$titre; ?>" >
		          	<img src="<?php echo base_url() .'asset/img/'. $uneoperation->op_img; ?>" alt="Sandwich" style="width:100%">
				      	<div class="bottomleft text-white">
					     <h4 id="titre_op"><?php echo $titre ?></h4>
					     
					    </div>
			  		</a>
			  	  </div>

			  	  <div >
		            


					<?php
			  		if ($this->session->userdata('user_rank') == 'Admin') {
							echo ' <a href='.base_url().'Supp_op/supp_operations/'.$uneoperation->op_id.'><button class="buttoncentral">Delete operation </button></a><a href='.base_url().'Modif_operation/modif_operation/'.$uneoperation->op_id.'><button class="buttoncentral needmarginpetit">Modify operation</button></a>';
						}
						?>
				  </div>
				  </div>
				  </div>
          	</div>
          <?php } ?>
        </div>
      </div>
    </section>