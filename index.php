
<?php

var_dump ($_POST) ;


if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    echo 'Bonjour ' . $_POST['nom']; 
    echo $_POST['mail'];
    echo $_POST['compagny'];

    
    echo '<br>'; 



?>