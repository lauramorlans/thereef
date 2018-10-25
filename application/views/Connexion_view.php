            <div id="textintro">
                

    <section class="text-center" id="login">

    <h1 class="needmarginpetit">Login</h1>

        <div   id="formulaire">
        <?php

            //Ouverture du formulaire et fichier ou les infos seront envoyées
            echo form_open('Connexion');
            //Premier champs
            $email= array(
                'name' => 'email',
                'id' => 'email',
                'placeholder' => 'Email',
                'value' => set_value('email')
            );
            //Format du champs
            echo form_input($email).'</br>';

            //Deuxieme champs
            $mdp= array(
            'name'=>'mdp',
            'id'=>'mdp',
            'placeholder'=>'Password',
            'value'=>set_value('mdp')
            );

            echo '<p class="needmarginpetit">' . form_password($mdp).'</p></br>';

            echo '<p class="needmarginpetit">'. form_submit('envoi', 'Validate') . '</p>';

            echo form_close();

            //Si une donnée flash 'noconnect' existe, crée un message d'erreur
            if ($this->session->flashdata('noconnect'))
            echo "<div class=\"alert alert-error\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>" . $this->session->flashdata('noconnect') . "<strong>";
        ?>
        </div>
        <a href="Inscription">Registration</a>
    </section> 

     </div>
    </div>
</div>








