<?php
    if ( isset( $_POST['submit'] ) ) {
        $lastname = $_POST['lastname']; 
        $firstname = $_POST['firstname']; 

        echo 'Nom : '.htmlspecialchars($_POST['lastname']).' Prénom : '.htmlspecialchars($_POST['firstname']); 
        exit;
    }
?>