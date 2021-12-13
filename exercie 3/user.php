<?php
    if ( isset( $_GET["submit"] ) ) {
        $lastname = $_GET["lastname"]; 
        $firstname = $_GET["firstname"]; 

        echo "Nom : ".$lastname." Prénom : ".$firstname; 
        exit;
    }
?>