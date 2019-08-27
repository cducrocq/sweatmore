<?php 
include('../header.php');
include('../nav.php');

if (isset($_GET["produit"])) 
{
    include('../produit.php'); 
}
else
{
    include('../accueil.php'); 
}

include('../footer.php'); ?>
