<?php

//Hanim

require_once ('../app/models/Profil_Model.php');
/**
 * Description of BestellungHtml
 *
 * @author Yerlikaya
 */
class BestellungEmail
{
    public static function createHtml(Profil_Model $profil, $data, $datum)
    {
        $html = '<!doctype html>';
        $html .= '<html>';
        $html .= '<head>';
        $html .= '<title>Bestellungsübersicht '.$datum.'</title>';
        $html .= '</head>';
        $html .= '<body>';
        $html .= '<h1>Bestellungsübersicht</h1>';
        $html .= '<p>Sehr ' . ($profil->geschlecht === 'w' ? 'geehrte Frau ' : 'geehreter Herr ') . $profil->vorname . ' ' . $profil->name . ',</p>';
        $html .= '<p>Vielen Dank für ihre Bestellung vom '.$datum.', nachfolgende Tabelle zeigt Ihnen nähere Details zur Bestellung.</p>';
        $html .= '<table>';
        $html .= '<tr><th>Anzahl</th><th>Artikelnummer</th><th>Hersteller</th><th>Artikel</th><th>Farbe</th><th>Größe</th><th>Stückpreis</th><th>Gesamtpreis</th></tr>';
        $gesamt = 0;
        for ($i = 0; $i < count($data); $i++)
        {
            $html .= '<tr>';
            $html .= '<td>'.$data[$i]['Menge'].'</td>';
            $html .= '<td>'.$data[$i]['Produktnummer'].'</td>';
            $html .= '<td>'.$data[$i]['Hersteller_hersteller'].'</td>';
            $html .= '<td>'.$data[$i]['Bennennung'].'</td>';
            $html .= '<td>'.$data[$i]['Farbe_farbe'].'</td>';
            $html .= '<td>'.$data[$i]['Groese_groese'].'</td>';
            $html .= '<td>'.$data[$i]['Preis'].' &euro;</td>';
            $html .= '<td>'.($data[$i]['Menge'] * $data[$i]['Preis']).' &euro;</td>';
            $html .= '</tr>';
            $gesamt += ($data[$i]['Menge'] * $data[$i]['Preis']);
        }
        $html .= '<tr><td colspan="7"><b>Gesamt: </b></td><td><b>'.$gesamt.' &euro;</b></td></tr>';
        $html .= '</table>';
        $html .= '<p>Bitte beehren sie uns bald wieder, Ihre FashinFactory!</p>';
        $html .= '</body>';
        $html .= '</html>';
        return $html;
    }
    
    public static function createEmailText(Profil_Model $profil, $data, $datum)
    {
        $tmp = 'Sehr ' . ($profil->geschlecht === 'w' ? 'geehrte Frau ' : 'geehreter Herr ') . $profil->vorname . ' ' . $profil->name . ',\n';
        $tmp .= 'Vielen Dank für ihre Bestellung vom '.$datum.', nachfolgende Auflistung zeigt Ihnen nähere Details zur Bestellung.\n';
        $tmp .= 'Desweiteren befindet sich eine PDF-Datei mit der Übersicht im Anhang.\n\n';
        $gesamt = 0;
        for ($i = 0; $i < count($data); $i++)
        {
            $tmp .= 'Menge: '.$data[$i]['Menge'].'\n';
            $tmp .= 'Artikelnummer: '.$data[$i]['Produktnummer'].'\n';
            $tmp .= 'Hersteller: '.$data[$i]['Hersteller_hersteller'].'\n';
            $tmp .= 'Artikel: '.$data[$i]['Benennung'].'\n';
            $tmp .= 'Farbe: '.$data[$i]['Farbe_farbe'].'\n';
            $tmp .= 'Größe: '.$data[$i]['Groese_groese'].'\n';
            $tmp .= 'Stückpreis: '.$data[$i]['Preis'].'\n';
            $tmp .= 'Gesamtpreis: '.($data[$i]['Menge'] * $data[$i]['Preis']).' &euro;\n\n';
            $gesamt += ($data[$i]['Menge'] * $data[$i]['Preis']);
        }
        $tmp .= 'Gesamt: '.$gesamt.' &euro;\n\n';
        $tmp .= 'Bitte beehren sie uns bald wieder, Ihre FashinFactory!';
        return $tmp;
    }
    
    public static function createPdf(Profil_Model $profil, $data, $datum)
    {
        require_once '../app/dompdf/dompdf_config.inc.php';
        $dompdf = new DOMPDF();
        $dompdf->load_html(static::createHtml($profil, $data, $datum));
        $dompdf->render();

        $dir = "../app/tmp/";

        if (!file_exists($dir)) {
            mkdir($dir, 0644);
        }

        $number = count(scandir($dir, SCANDIR_SORT_ASCENDING)) - 2;
            
        $file = fopen($dir.$number.".pdf", "w");
        fwrite($file, $dompdf->output());
        fclose($file);

        return $dir.$number.".pdf";
    }
    
    public static function send(Profil_Model $profil, $data)
    {
        require_once '../app/PHPMailer/PHPMailerAutoload.php';
        $datum = date('d.m.Y H:i');
        $datum2 = date('Y_m_d-H_i');
        
        $mail = new PHPMailer();

        $mail->SMTPDebug = 0;
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
        $mail->addAddress($profil->email, $profil->vorname . ' ' . $profil->name);
        $mail->addReplyTo('WIFShop@gmx.de', 'Kundendienst');
        
        $mail->Subject = 'FashionFactory - Bestellübersicht ' . $datum;
        $mail->CharSet = 'utf-8';
        $mail->isHTML(true);
        $mail->Body = static::createHtml($profil, $data, $datum);
        $mail->AltBody = static::createEmailText($profil, $data, $datum);
        
        $pfad = static::createPdf($profil, $data, $datum);
        $mail->addAttachment($pfad, 'Bestelluebersicht_' . $datum2 . '.pdf');

        //Bestätigung über Versand bzw. ErrorInfo
        return $mail->send();
        
        unlink($pfad);
    }
}
