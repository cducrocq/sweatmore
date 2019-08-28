<?php
include('../init.php');
include('../header.php');

if (isset($_GET["item"]))
{
    include('../item.php');
}
elseif (isset($_GET["category"]))
{
    include('../category.php');
}
elseif (isset($_GET["signup"]))
{
    include('../signup.php');
}
elseif (isset($_GET["login"]))
{
    include('../login.php');
}
elseif (isset($_GET["contact"]))
{
    include('../contact.php');
}
else
{
    include('../home.php');
}

include('../footer.php'); ?>
