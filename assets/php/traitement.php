<?php
        //Les putains de variable en PHP commencent obligatoirement par un $
        $society = htmlspecialchars($_POST["society"], ENT_QUOTES);

        $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
        if(empty($email)) {
            header('location: ../HTML/error.html');
        };

        $telephone = htmlspecialchars($_POST["telephone"], ENT_QUOTES);
        if(empty($telephone)) {
            header('location: ../HTML/error.html');*
            exit
        };

        $lname = htmlspecialchars($_POST["lname"], ENT_QUOTES);
        if(empty($lname)) {
            header('location: ../HTML/error.html');
            exit
        };
        $fname = htmlspecialchars($_POST["fname"], ENT_QUOTES);
        if(empty($fname)) {
            header('location: ../HTML/error.html');
            exit
        };

        $sujet = htmlspecialchars($_POST["sujet"], ENT_QUOTES);
        if(empty($sujet)) {
            header('location: ../HTML/error.html');
            exit
        };

        $ftext = htmlspecialchars($_POST["ftext"], ENT_QUOTES);
        if(empty($ftext)) {
            header('location: ../HTML/error.html');
            exit
        };

        $captcha = htmlspecialchars($_POST["captcha"], ENT_QUOTES);
        if(empty($captcha)) {
            header('location: ../HTML/error.html');
            exit
        };

        $to = "Joseph.debethune56@gmail.com";
        $subject = "Nouveau message provenant de JDPaysage: ".$sujet;
        //La concaténation se fait avec . et pas un + parce que... PHP
        $message = "Société: ".$society."\nNom: ".$lname."\nPrénom: ".$fname. 
        "\nSujet: ".$sujet."\n\n".$ftext;

        //La fonction mail suffit à envoyer un mail. Mais parfois elle est bloquée par l'hébergeur
        if ($captcha == "50"){
            mail($to,$subject,$message);
            header('location: ../HTML/send.html');
            exit
        } else {
            header('location: ../HTML/error.html');
            exit
        }
?>