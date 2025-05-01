<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de gegevens op van het formulier
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Jouw e-mailadres waar de e-mail naar toe moet
    $to = "cedric.bouche@hotmail.com";
    
    // Onderwerp van de e-mail
    $subject = "Nieuw bericht van je portfolio website van: " . $name;
    
    // Berichttekst
    $body = "Naam: $name\nE-mail: $email\n\nBericht:\n$message";
    
    // Headers om de afzender in te stellen
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Verstuur de e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Doorverwijzen naar een bedankpagina
        header("Location: thankyou.html");
        exit;
    } else {
        echo "Er is een fout opgetreden bij het verzenden van je bericht.";
    }
}
?>
