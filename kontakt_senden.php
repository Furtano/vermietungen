<?php
$firma = $_GET["firma"];
$name = $_GET["name"];
$email = $_GET["email"];
$nachrichteninhalt = $_GET["nachricht"];
$website = $_GET["website"];
$telefon = $_GET["telefon"];


// mehrere Empfänger
$empfaenger  = 'm2294@posteo.de'; // beachten Sie das Komma

// Betreff
$betreff = 'Kontaktanfrage von ' . $firma  . ' (' . $name . ')' . '-> Website(Vermietungen)';

// Nachricht
$nachricht = '
<html>
<body>
'

."<strong>Telefon: </strong>" . $telefon . "<br/> <strong>Website: </strong>" . $website . "<br/><strong>Nachricht:</strong><br/>" . $nachrichteninhalt .
'
</body>
</html>
';

// für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// zusätzliche Header
$header .= 'From: ' . $firma  . '(' . $name . ')' . '<' . $email . '>' . "\r\n";
// verschicke die E-Mail
mail($empfaenger, $betreff, $nachricht, $header);

 ?>
