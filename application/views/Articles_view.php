	        <div id="textintro" class="text-center">
	        	<div>
					<h2>News</h2>
				</div>
			</div>
    </div>
</div>



<section>

	<div class="text-center needmargin needmargintop textcentera">
	<?php
		if ($this->session->userdata('user_rank') == 'Admin') {
		echo '<a href='.base_url().'Ajout_articles><button class="buttoncentral needmarginpetit">Add article</button></a></br>';
		}

		echo '<p id="pagination">'. $pagination . '</p>';
	?>
	<form class="needmargintop" action="<?php echo site_url('Articles/search');?>" method = "post">
		<input type="text" name = "keyword" />
		<input type="submit" value = "Search" />
	</form>

	</div>

</section>

<section class="needmargin">
      <div class="container">
        <div class="row ">
        <?php
				
			foreach ($tous as $unarticle) {

			$titre = $unarticle->art_nom;
			?>	
          <div class="col-lg-3 mx-auto text-center">
          <div class="container">
          	<div class="row">

		          <div class="col-lg-12 mx-auto text-center">
		            
		          	<a href="<?php echo base_url() .'Fiche_art/fiche_art/'. $unarticle->art_id; ?>" >
		          	<img src="<?php echo base_url() .'asset/img/'. $unarticle->art_img; ?>" alt="article image" style="width:100%">
				      	<div class="bottomleft text-white">
					     <h4 id="titre_op"><?php echo $titre ?></h4>
					     
					    </div>
			  		</a>
			  	  </div>

			  	  <div >
		            

					<?php
			  		if ($this->session->userdata('user_rank') == 'Admin') {
							echo ' <div class="centretoi"><a href='.base_url().'Supp_articles/supp_articles/'.$unarticle->art_id.'><button class="buttoncentral">Supprimer l\'article </button></a><a href='.base_url().'Modif_articles/modif_articles/'.$unarticle->art_id.'><button class="buttoncentral needmarginpetit">Modifier l\'article</button></a></div>';
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