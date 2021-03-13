<?php

var_dump ($_GET);

if ( isset( $_GET['submit'] ) ) {}
        $nom = $_GET ['nom'];
        $mail = $_GET ['mail'];
        $company = $_GET ['company'];
        $industry = $_GET ['industry'];
        $msg = $_GET ['msg-contact'];

        echo "<h1>Information du client<h1>";
        echo "Name : " . $nom;
        echo "<br>";
        echo "Mail : " . $mail;
        echo "<br>";
        echo "Company : " . $company;
        echo "<br>";
        echo "Industry : " . $industry;
        echo "<br>";
        echo "Message : " . $msg;

     exit;
     

?>