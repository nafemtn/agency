<?php

var_dump ($_GET);

$mail = $_GET ['mail'];
$nom = $_GET ['nom'];
$company = $_GET ['company'];
$industry = $_GET ['industry'];
$msg = $_GET ['msg-contact'];

$sent = mail( $mail, $nom, $company);

if ($sent) {
    echo"<h1> Thank you<h1> <br> <p>Thanks for your trust, we will contact you soon as possible, <p>";
}
else {
    echo "hmmm, something went wrong.. but what?";
}


/*
if ( mail ( $mail, "Hello", "Thank you for have taken time to complete the form", "We will contact you as soon as we can", "have a beautiful day") )
{
    echo "Thanks you for your answers";
}
else
{
    echo "Something went wrong :(";
}


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
*/

/*
$mail = $_GET['mail'];

$sent = mail('you@domain.com', 'Feedback Form Submission', $feedback, $headers);

if ($sent) {
    echo "votre information sont bien pris en compte! Merci";
} 
else {
    echo "une erreur s'est produite";
}
*/

?> 
