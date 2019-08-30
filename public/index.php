<?php
// DATABASE
require dirname(__DIR__).'/config/bdd.php';


// HEADER
require dirname(__DIR__).'/templates/header.html.php';


// ROUTER
// Admin
if (isset($_GET["login"]))                  { require dirname(__DIR__).'/templates/admin/login.html.php'; }
elseif (isset($_GET["signup"]))             { require dirname(__DIR__).'/templates/admin/signup.html.php'; }
elseif (isset($_POST['login']))             { require dirname(__DIR__).'/controller/treatment.php'; }
elseif (isset($_POST["signup"]))            { require dirname(__DIR__).'/controller/treatment.php'; }
// Pages
elseif (isset($_GET["about"]))              { require dirname(__DIR__).'/templates/pages/about.html.php'; }
elseif (isset($_GET["article"]))            { require dirname(__DIR__).'/templates/pages/article.html.php'; }
elseif (isset($_GET["category"]))           { require dirname(__DIR__).'/templates/pages/category.html.php'; }
elseif (isset($_GET["cgv"]))                { require dirname(__DIR__).'/templates/pages/cgv.html.php'; }
elseif (isset($_GET["comment-commander"]))  { require dirname(__DIR__).'/templates/pages/comment-commander.html.php'; }
elseif (isset($_GET["contact"]))            { require dirname(__DIR__).'/templates/pages/contact.html.php'; }
elseif (isset($_GET["faq"]))                { require dirname(__DIR__).'/templates/pages/faq.php.html'; }
elseif (isset($_GET["info-legale"]))        { require dirname(__DIR__).'/templates/pages/info-legale.html.php'; }
else                                        { require dirname(__DIR__).'/templates/pages/home.html.php'; }


// FOOTER
require dirname(__DIR__).'/templates/footer.html.php';

?>
