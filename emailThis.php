<?php
session_start();
if (isset($_POST) && !empty($_POST)) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($nom) && !empty($email) &&  !empty($message)) {
        $mess = '<html><head><title></title></head><body><p>Bonjour Mr ou Mme ' . $nom .' , </p><p>Nous consultons votre message et revenons vers vous avec une proposition.</p><p>Cordialement,<br>L\'équipe du projet Alpha.</p></body></html>';
        $to = $email;
        $subject = "Réponse automatique suite validation du formulaire";
        $header= "From: contact-Standbyflex@projet-alpha.fr\n";
        $header.='Content-Type: text/html; charset="UTF-8"'. "\n";
        $header.='Récapitulatif de votre message: ' . $message;

        // envoie du mail
        mail($to,$subject,$mess,$header);
        // affichage message envoyé
        echo "message envoyé";
    }else{
        if (empty($nom)){
            echo "veuillez compléter le champ nom";
        }
        if (empty($email)){
            echo "veuillez compléter le champ nom";
        }
        if (empty($message)){
            echo "veuillez compléter le champ nom";
        }
    }
}