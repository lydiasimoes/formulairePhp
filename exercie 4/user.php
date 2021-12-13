<?php
    if ( isset( $_POST["submit"] ) ) {
        $lastname = $_POST["lastname"]; 
        $firstname = $_POST["firstname"]; 

        echo "Nom : ".$_POST["lastname"]." Prénom : ".$_POST["firstname"]; 
        exit;
    }
?>