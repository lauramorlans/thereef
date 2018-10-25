
	        <div id="textintro" class="text-center">
	        	<div>
					<h2>Users</h2>
				</div>
			</div>
    </div>
</div>
<section class="needmargintop">

	<div class="text-center">
	<?php

		echo '<a href='.base_url().'Ajout_utilisateurs><button>Add user</button></a>';

	?>

	</div>
</section>

<section  class="needmargin">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12 mx-auto text-center">
            <div class="descriptop">
	  		<h3 class="needmargin">Manage users</h3>
	  		</div>


            <table>
            <tr><th>User Name</th><th> </th><th> </th></tr>
            <?php 
            foreach ($tous as $unuser) {
			echo '<tr><td>'.$titre = $unuser->user_nom.'</td>
			<td><a href='.base_url().'Supp_utilisateurs/supp_user/'.$unuser->user_id.'><button>Delete user</button></a></td>
			<td><a href='.base_url().'Modif_utilisateur/modif_user/'.$unuser->user_id.'><button>Modify user</button></a></td></tr>';
				
				}?>

			</table>


          </div>
        </div>
      </div>
    </section>

