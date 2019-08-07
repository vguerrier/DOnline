<?php
/*** Index ***/
/* Main */

require 'functions/auth.php';
//utilisateur_connecte();
require __DIR__ . '/vendor/autoload.php';
//use Adldap\Adldap;


$ad = new \Adldap\Adldap();
ldap_con();
?>