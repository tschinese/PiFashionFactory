<?php

require ('../PHPMailer/PHPMailerAutoload.php');
require ('../config/Connect_Mysql.php');

//Erstellen der Klasse Newsletter
class Newsletter {

    private $db;
    private $con;

    public function __construct() {
        try {
            $this->db = new Connect_Mysql();
            $this->con = $this->db->verbinden();
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function mail() {


        //Objekte von Userdata und PHPMailer erstellen
        $mail = new PHPMailer;


        $mail->SMTPDebug = 2;
        //SMTP Versand definieren
        $mail->isSMTP();
        //Username, Passwort und Port deklarieren 
        $mail->Host = 'mail.gmx.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'wifshop@gmx.de';
        $mail->Password = 'shop1234';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //Absender/Empfänger und Reply definieren
        $mail->setFrom('WIFShop@gmx.de', 'WIFShop');
        $empfänger = "Select email FROM email";
        var_dump($empfänger);
        $mail->addAddress();
        $mail->addReplyTo('WIFShop@gmx.de', 'Kundendienst');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        //Betreff und Inhalt 
        $mail->Subject = '';
        $mail->CharSet = 'utf-8';
        $mail->isHTML(true);
        $mail->Body = '';
        //Bestätigung über Versand bzw. ErrorInfo
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $this->con = null;
            $this->db->schließen();
            echo 'Message has been sent';
        }
    }

}
