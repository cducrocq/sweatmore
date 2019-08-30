<?php
// DATABASE
require dirname(__DIR__).'/config/bdd.php';


// SESSION
require dirname(__DIR__).'/config/session.php';


// HEADER
require dirname(__DIR__).'/templates/header.html.php';


// ROUTER
// Admin
if (isset($_GET["login"]))                  { require dirname(__DIR__).'/controller/login.php'; }
elseif (isset($_GET["signup"]))             { require dirname(__DIR__).'/templates/admin/signup.html.php'; }
elseif (isset($_GET["admin"]))              { require dirname(__DIR__).'/controller/admin.php'; }
elseif (isset($_GET["adminuser"]))          { require dirname(__DIR__).'/controller/adminuser.php'; }
elseif (isset($_GET["adminarticles"]))      { require dirname(__DIR__).'/controller/adminarticles.php'; }
elseif (isset($_GET["adminuseredit"]))      { require dirname(__DIR__).'/controller/adminuseredit.php'; }
elseif (isset($_GET["adminuserdel"]))       { require dirname(__DIR__).'/controller/adminuserdel.php'; }

elseif (isset($_POST['login']))             { require dirname(__DIR__).'/controller/login.php'; }
elseif (isset($_POST["signup"]))            { require dirname(__DIR__).'/controller/signup.php'; }
// Pages
elseif (isset($_GET["about"]))              { require dirname(__DIR__).'/templates/pages/about.html.php'; }
elseif (isset($_GET["article"]))            { require dirname(__DIR__).'/templates/pages/article.html.php'; }
elseif (isset($_GET["category"]))           { require dirname(__DIR__).'/controller/category.php'; }
elseif (isset($_GET["cgv"]))                { require dirname(__DIR__).'/templates/pages/cgv.html.php'; }
elseif (isset($_GET["comment-commander"]))  { require dirname(__DIR__).'/templates/pages/comment-commander.html.php'; }
elseif (isset($_GET["contact"]))            { require dirname(__DIR__).'/templates/pages/contact.html.php'; }
elseif (isset($_GET["faq"]))                { require dirname(__DIR__).'/templates/pages/faq.php.html'; }
elseif (isset($_GET["info-legale"]))        { require dirname(__DIR__).'/templates/pages/info-legale.html.php'; }
else                                        { require dirname(__DIR__).'/controller/home.php'; }


// FOOTER
require dirname(__DIR__).'/templates/footer.html.php';

?>
