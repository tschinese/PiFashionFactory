
 <!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 360-2 #10522
    User Story: Als Programmierer baue ich einen Email-Footer ein.
    Task: Email Footer in automatisch generierte Mails inkludieren 
    Zeile 72-89
    Aufwand: 0.5 Stunden
 -->
<?php
//Sprint 2, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 05.11.2015
//UserStory: Als Kunde möchte ich eine automatische Bestellbestätigung per Mail erhalten
//Task: 180-1 Automatischen E-Mailversand programmieren (#10196)
//Aufwand: 22 Stunden
//Beschreibung: Es wird eine automatich generierte Bestellbestätigung verschickt 

require ('../PHPMailer/PHPMailerAutoload.php');
require ('../models/userdata.php');
   
//Erstellen der Klasse Mail
class Mail{
  

public function mail() {


    //Objekte von Userdata und PHPMailer erstellen
    $data = new Userdata();
    $mail = new PHPMailer;
    //Variablen
    $bestellung = $data->getBestellung();
    $kundennummer = $data->getKundennummer();
    $vorname = $data->getVorname();
    $nachname = $data->getNachname();
    $empfänger = $data->getEmpfänger();
    //function um die Anrede Männlich/Weiblich zu definieren
    $geschlecht = $data->getGeschlecht();
        if ($geschlecht == 'w'){
            $anrede = ' geehrte Frau ';
        }
        else {
            $anrede = ' geehrter Herr ';
        }
    
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
    $mail->addAddress($empfänger, $nachname);
    $mail->addReplyTo('WIFShop@gmx.de', 'Kundendienst');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    //Betreff und Inhalt 
    $mail->Subject = 'Ihre Bestellung Nr: - '.$bestellung;
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);
    $mail->Body    = '<img src="https://t1.ftcdn.net/jpg/00/46/79/64/500_F_46796494_T2nsU8rxP1NKLBb8a8Egy6TgZiMgf3lz.jpg" />
                      <br>
                      <h1><b>Vielen Dank für Ihre Bestellung bei WIFShop!</b></h1><br>
                      <hr><br><br>
                      Sehr'.$anrede.$vorname.' '.$nachname.',<br><br>
                      Wir haben Ihre Bestellung mit der Bestellnummer: '.$bestellung.' erhalten.
                      <hr>
                      <br>
                      <fieldset>
                      Möchten Sie Ihre Bestellung ändern, besuchen Sie bitte unsere Hilfeseite, wo Sie Informationen und Hilfevideos dazu finden.

                      Wir freuen uns auf Ihren nächsten Besuch!<br>
                      FashionFactory<br>
                      http://wfprj-wf5.informatik.hs-ulm.de/36/RenatoSicherheitskopie/wfprjTest2/public/index.php
                      </fieldset>
                      <br>
                      <fieldset>
                      <font size ="-10">Artikel mit dem Hinweis "Versand durch FashionFactory" werden bei einem Drittanbieter gekauft, aber von einem unserer Logistikzentren an Sie verschickt. 

                       Wir weisen darauf hin, dass Verkäufer möglicherweise zusätzliche Informationen, wie beispielsweise die USt-Identifikationsnummer anfragen werden, um korrekte Rechnungen ausstellen zu können.

                       Bitte beachten Sie: Diese E-Mail dient lediglich der Bestätigung des Einganges Ihrer Bestellung und stellt noch keine Annahme Ihres Angebotes auf Abschluss eines Kaufvertrages dar. Ihr Kaufvertrag für einen Artikel kommt zu Stande, wenn wir Ihre Bestellung annehmen, indem wir Ihnen eine E-Mail mit der Benachrichtigung zusenden, dass der Artikel an Sie abgeschickt wurde.

                       Dies ist eine automatisch versendete Nachricht. Bitte antworten Sie nicht auf dieses Schreiben, da die Adresse nur zur Versendung von E-Mails eingerichtet ist. </font>
                      </fieldset>';
	//Sprint 4 Ridvan Zeile 77-89
    //Bestätigung über Versand bzw. ErrorInfo
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else {
		$data->closeDB();
        echo 'Message has been sent';
    }
}
}
new mail();