<?php
/*** Index ***/
/* Main */
require_once 'elements/header.php';
require_once 'functions/auth.php';
forcer_utilisateur_connecte();
header('Location: /dashboard.php');
require_once __DIR__ . '/vendor/autoload.php';
//use Adldap\Adldap;
//utilisateur_connecte ();

//$ad = new \Adldap\Adldap();
//ldap_con();
require_once 'elements/footer.php';
?>