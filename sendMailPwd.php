<?php
require "model.php";
require "phpmailer/vendor/autoload.php";

// librairie PHPMailer pour gérer l'envoi de mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['mail'])){

    $toEmail=$_POST['mail'];

    // création du selector et token qui seront dans l'url
    $selector=bin2hex(random_bytes(8));
    $token=random_bytes(32);

//----------------CHANGER L'URL AVANT DEPLOIEMENT SUR HOSTINGER !!!!-------------------------

    $url="http://localhost/github/glimpse/controller.php?page=pwdchangeform&selector=".$selector."&token=".bin2hex($token); 

//-------------------------------------------------------------------------------------------

    // Date actuelle au format Unix + 1800 sec = fin de valitidé du lien
    $expires=date("U")+1800; // 30 minutes

    // Supprime toute entrée de ce mail dans table reinit_mdp avant d'en créer une
    deleteFromReinitMdp($_POST['mail']); // 

    // Créé le row (insère le token)
    insertIntoReinitMdp($_POST['mail'], $selector, $token, $expires);

    // Config du mail à envoyer
    $mail = new PHPMailer(true);
    $mail->CharSet="UTF-8";
    $mail->isSMTP();
    $mail->SMTPDebug = 2;

    // Paramètres SMTP Hostinger
    $mail->Host = 'smtp.hostinger.fr';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'site@milleculturesuneorigine.but-mmi-champs.fr';
    $mail->Password = 'Milleculturesuneorigine77420!';

    // Config des emails et message
    $mail->setFrom('site@milleculturesuneorigine.but-mmi-champs.fr', 'Mille Cultures, une Origine');
    $mail->addAddress($toEmail);
    $mail->isHTML(true);
    $mail->Subject = 'Réinitialisation de votre mot de passe';
    $mail->Body    = "Réinitialisez de votre mot de passe en cliquant sur ce lien (valable 30 minutes) : $url";
    
    $mail->send();
    header('Location: controller.php?page=mailconf');
} else {
    header("Location: controller.php?page=pwdforgot");
}

