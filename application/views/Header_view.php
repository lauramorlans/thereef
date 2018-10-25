<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/ourstyle.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/welcblog.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/styletab.css">
  <script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
function myFunction() {
    var x = document.getElementById("mainheader");
    if (x.className === "header") {
        x.className += " responsive";
    } else {
        x.className = "header";
    }
}
</script>
</head>
<body>

<div class="header" id="mainheader">
  <img class="left" src="<?php echo base_url() ?>asset/img/logo_the_reef_couleurs.svg" width="75px">
  <a href="<?php echo base_url() ?>Accueil" class="slogan left">Save the great barrier reef</a>
  <div class="header-right">
        <a href="<?php echo base_url() ?>Accueil">Home</a>
        <a href="<?php echo base_url() ?>About">About us</a>
        <a href="<?php echo base_url() ?>Operations/operationspage">Operations</a>
        <a href="<?php echo base_url() ?>Articles/articlespage">News</a>
        <a href="<?php echo base_url() ?>Contact">Contact</a>
        <?php
  if (!$this->session->userdata('user_id')) {
  echo '<a href='.base_url().'Connexion>Login</a>';
}
else{
  echo '<a href='.base_url().'Account>Account</a>';
}

?>

        <a class="active" href="<?php echo base_url() ?>Donate">Donate</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i><img src="<?php echo base_url() ?>asset/img/bars.svg" width="20px"></i>
        </a>
      </div>
</div>

<div  id="accueil">
            <div id="zoneintro">
                    <video autoplay muted loop>
                    <source src="<?php echo base_url() ?>asset/video/reef.mp4" type="video/mp4" />
                    <source src="<?php echo base_url() ?>asset/video/reef.webm" type="video/webm" />
                    <source src="<?php echo base_url() ?>asset/video/reef.ogv" type="video/ogg" />
          </video>