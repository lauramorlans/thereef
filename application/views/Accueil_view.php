	         <div id="textintro">
            <div>
          <h2 class="text-center">Welcome</h2>
        </div>
      </div>
    </div>
</div>

<div class="cd-tabs js-cd-tabs">
    <nav>
      <ul class="cd-tabs__navigation js-cd-navigation">
        <li><a data-content="project" class="cd-selected project" href="#0">Project</a></li>
        <li><a data-content="thereef" class="thereef" href="#0">The Reef</a></li>
        <li><a data-content="crew" class="crew" href="#0">The crew</a></li>
      </ul>
    </nav>

    <ul class="cd-tabs__content js-cd-content">
      <li data-content="project" class="cd-selected project">
        <p>The reef is an ecologic and solidary association with the goal to save the Great Barrier Reef, situated at the west side of Oceania. Actually the Great Barrier Reef, unique in the world, is currently in danger : more than fifty of the barrier is destroyed. The reasons ? Global warming, tourism, pollution, some invasive marine species.</p>

        <p>Earth is composed with 72% of water, hence its surname of blue planet. If we don’t save one of the most beautiful marine creation now, what would be left of the blue planet ?</p>
      </li>

      <li data-content="thereef" class="thereef">
        <p>The Great Barrier Reef is the world's largest coral reef system composed of over 2,900 individual reefs and 900 islands stretching for over 2,300 kilometres over an area of approximately 344,400 square kilometres. The reef is located in the Coral Sea, off the coast of Queensland, Australia.</p>
      </li>

      <li data-content="crew" class="crew">
        <p>We are a group with different sex, age, nationality, passion. However, we are reunited together to invest in a project that is important for us : help marine nature to regain force and to rebuild itself in a safe envionnement.</p>
      </li>
    </ul>
  </div>

  <div class="bigslogan">
    <h2>« Save the Great Barrier Reef »</h2>
  </div>

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

  <div class="w3-row-padding w3-center">
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

<div class="bignumber" id="particles-js">
  <?php $sum = $this->Accueil_model->recupsumtot();?>
    <h2><?php echo $sum[0]->don_montant; ?> € </h2>
    <h3>with <?php echo $nbuser; ?> members</h2>
</div>

<div class="descriptop">
      <h3>Last news</h3>
      <div class="descriptopleft">
        <p>You can find a lot of articles about The Reef and our project !</p>
        <p>Read us !</p>
      </div>
      <div class="descriptopright">
        <a href="<?php echo base_url() ?>Articles/articlespage"><button>All news</button></a>
      </div>
    </div>

<div class="w3-content" style="margin-bottom:80px;">

  <div class="w3-row-padding  w3-center">
    <div class="w3-quarter quartertop quartertopfirst bottomcontainer">

      <a href="<?php echo base_url() .'Fiche_art/fiche_art/'.$art[0]->art_id; ?>" >
      <img src="<?php echo base_url() ?>asset/img/blog1.jpg" alt="Sandwich" style="width:100%">
        <div class="bottomleft">
        <h4 id="titre_op">
        <?php echo $art[0]->art_nom;?></h4>
      </div>
    </a>
    </div>
    <div class="descriptopright longdiv">
      <h4>Don't want to miss a new ?</h4>
      <input type="text" placeholder="mail" name="mail">
      <a href="<?php echo base_url().'Message_news'?>"><button>Subscribe</button></a>
    </div>
  </div>
</div>