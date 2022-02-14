<?php

include "user.php";

$utilisateurs = new user();
//$utilisateurs -> register('jean','moutarde','jean@jean.fr','jean','christophe');
//$utilisateurs -> connect('jean','moutarde');        
$utilisateurs -> connect('maurice','poil');  
$utilisateurs -> disconnect();
//$utilisateurs -> delete();
//$utilisateurs -> update('maurice','poil','maurice@maurice.fr','maurice','raoul');
//$utilisateurs -> getAllInfos();
//$utilisateurs -> getLogin();
//$utilisateurs -> getEmail();
//$utilisateurs -> getFirstname();
//$utilisateurs -> getLastname();
//utilisateurs -> refresh();
?>
