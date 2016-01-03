<?php

// Sprint 5, Gruppe 4 Onlineshop, Datum: 03.01.2016
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// Userstory: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
// Task: 410-4 (#10609) "Produkte anlegen und löschen" überarbeiten
// Zeitaufwand: 
// Beschreibung: Neue function backendanlegen
// 
//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Hanim Yerlikaya, Datum: 08.12.2015
//UserStory: Als Kunde möchte ich eine Bildergalerie haben für die Produkte
//Task: 300-1 (#10507) Datenbank upload programmieren
//Aufwand: 4 Stunden
//Zeile: 63-96
//Beschreibung: Der Admin kann die entsprechenden Bilder uploaden.
//
//Sprint 4, Gruppe 4 Onlineshop Datum: 05.12.2015, Version 4
//Verfasser: Marcel Riedl, Matrikelnummer: 3113845
//UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
//Task: 370-2 (#10576) Änderungen im Produkt implementieren
//Aufwand: 1 Stunde
//Beschreibung: Alle SQL Statements wurden überarbeitet.
//
//Sprint 3, Gruppe 4 Onlineshop, Datum: 19.11.2015 Version 3
//Verfasser: Marcel Riedl, Matrikelnummer: 3113845
//UserStory: 90 Als Kunde möchte ich eine einfache Navigation in Kategorien, so dass ich schnell mein Wunschprodukt finden kann.
//UserStory: 270 Als Programmierer möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen
//Task: 270-1 (#10329) Zusammenführen
//Task: 90-1 (10315) Kategorien auswählen und programmieren
//Aufwand: 5 Stunden
//Beschreibung: Es wird das Model zum Produkt erstellt.
//
//Sprint 2, Gruppe 4 Onlineshop, Datum: 09.11.2015 Version 2
//Verfasser: Marcel Riedl, Matrikelnummer: 3113845
//UserStory: Als Programmierer möchte ich den Aufbau als Model-View-Controller (MVC) haben.
//Task: 140-2 (#10190) Eigenen Code an MVC anpassen
//Aufwand: 4 Stunden
//Beschreibung: Es wird der grundlegende Aufbau des Produkts als MVC erstellt.
//
//Sprint 1, Gruppe 4 Onlineshop
//Verfasser: Marcel Riedl Matrikelnummer: 3113845
//UserStory: Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
//Task: #10003 Produkte anlegen
//Datum: 23.10.2015 Version 1
//Zeitaufwand: 8 Stunden
//
// Kerstin Gräter Start
include_once '../app/config/Connect_Mysql.php';

// Kerstin Gräter Ende
// Sprint 1 Marcel Riedl Start
class Produkt_Model {

    // Klassenvariablen
    protected $sql;
    protected $con;
    protected $result;

    // Konstruktor
    function __construct() {
        
    }

    // Sprint 1 Marcel Riedl Ende
    // Sprint 5 Marcel Riedl Start
    function backendanlegen() {
        // Objekt von Connect_Mysql erstellen
        // Connect_Mysql von Kerstin Gräter
        $this->con = new Connect_Mysql();
        // Verbindung zur Datenbank herstellen
        $con = $this->con->verbinden();

        // SQL Statement für die Farben erstellen
        $sql0 = 'select farbe from farbe';
        // Statement vorbereiten
        $stmt0 = $con->prepare($sql0);
        // Statement ausführen
        $stmt0->execute();
        // Daten als Array in Variable speichern
        $dat0 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // SQL Statement für Hersteller
        $sql1 = 'select hersteller from hersteller';
        // Statement vorbereiten
        $stmt1 = $con->prepare($sql1);
        // Statement ausführen
        $stmt1->execute();
        // Daten als Array in Variable speichern
        $dat1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // SQL Statement für Größen
        $sql2 = 'select groese from groese';
        // Statement vorbereiten
        $stmt2 = $con->prepare($sql2);
        // Statement ausführen
        $stmt2->execute();
        // Daten als Array in Variable speichern
        $dat2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // SQL Statement für Kategorien
        $sql3 = 'select * from kategorie';
        // Statement vorbereiten
        $stmt3 = $con->prepare($sql3);
        // Statement ausführen
        $stmt3->execute();
        // Daten als Array in Variable speichern
        $dat3 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Daten zusammenführen
        $daten = array(farbe => $dat0, hersteller => $dat1, groese => $dat2, kategorie => $dat3);

        // Connection schließen
        $con = null;
        $this->con->schließen();

        // RÜckgabewert
        return $daten;
    }

    // Sprint 5 Marcel Riedl Ende
    // Sprint 1 Marcel Riedl Start
    // function um ein Produkt anlegen zu können
    public function anlegen($name, $hersteller, $farbe, $groesse, $preis, $kategorie, $files) {
        // Sprint 1 Marcel Riedl Ende
        // Überarbeitet Sprint 4 Marcel Riedl Start
        $this->sql = 'insert into Produkt (Benennung, Farbe_farbe, Groese_groese, Hersteller_hersteller, Preis, SalePreis, Kategorie_katID) '
                . 'values ("' . $name . '","' . $farbe . '","' . $groesse . '", "'
                . $hersteller . '", ' . $preis . ',' . $preis . ' , "' . $kategorie . '");';
        // Überarbeitet Sprint 4 Marcel Riedl Ende
        // Sprint 1 Marcel Riedl Start
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Sprint 1 Marcel Riedl Ende
        // Überarbeitet Sprint 4 Marcel Riedl Start
        //INSERT farbe IF NOT EXISTS
        $stmt = $con->prepare('INSERT IGNORE INTO farbe (farbe) VALUES (:farbe);');
        $stmt->execute(array('farbe' => $farbe));

        //INSERT groese IF NOT EXISTS
        $stmt = $con->prepare('INSERT IGNORE INTO groese (groese) VALUES (:groesse);');
        $stmt->execute(array('groesse' => $groesse));

        //INSERT hersteller IF NOT EXISTS
        $stmt = $con->prepare('INSERT IGNORE INTO hersteller (hersteller) VALUES (:hersteller);');
        $stmt->execute(array('hersteller' => $hersteller));
        // Überarbeitet Sprint 4 Marcel Riedl Ende
        // Sprint 1 Marcel Riedl Start
        $stmt = $con->prepare($this->sql);
        $stmt->execute();
        $this->saveUploadedFiles($con->lastInsertId(), $files);
        $con = null;
        $this->con->schließen();
        echo 'Das Produkt ' . $name . ' wurde angelegt!';
        return $this->con;
    }

// Sprint 1 Marcel Riedl Ende
//Sprint 4, Gruppe 4 Onlineshop, Start
//Verfasser: Hanim Yerlikaya, Datum: 08.12.2015
//UserStory: Als Kunde möchte ich eine Bildergalerie haben für die Produkte
//Task: 300-1 (#10507) Datenbank upload programmieren
//Aufwand: 4 Stunden
//Zeile: 63-96
//Beschreibung: Der Admin kann die entsprechenden Bilder uploaden. -->
    private function saveUploadedFiles($productId, array $files) {
        if ($productId !== null && $productId != 0 && $files !== null && count($files) > 0) {
            $dir = "gallery/" . $productId . "/";

            if (!file_exists($dir)) {
                mkdir($dir, 0644);
            }

            $number = count(scandir($dir, SCANDIR_SORT_ASCENDING)) - 2;

            for ($i = 0; $i < count($files['name']); $i++) {
                if (strpos($files['name'][$i], "php") || strpos($files['type'][$i], "image") !== 0) {
                    print 'Code injection detected!';
                    $number--;
                    continue;
                }

                $ext = substr($files['name'][$i], strrpos($files['name'][$i], "."));
                move_uploaded_file($files['tmp_name'][$i], $dir . ($number + $i) . $ext);
            }
        }
    }

    //Ende der Funktion. Hanim Yerlikaya Sprint 4
    // function um ein Produkt löschen zu können
    // Sprint 1 Marcel Riedl Start
    public function loeschen($produktnummer) {
        $this->sql = 'delete from Produkt where produktnummer = ' . $produktnummer;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Prepared Statement ausführen
        $stmt->execute();
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return 'Das Produkt wurde gelöscht.';
    }

    // function um das Produkt zu aktualisieren
    // still under work
    public function aktualisieren($produktnummer, $aenderung, $wert) {
        $this->sql = 'update table produkt set' . $aenderung . ' = ' . $wert
                . ' where produktnummer = ' . $produktnummer;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Prepared Statement ausführen
        $stmt->execute();
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // Return Wert
        return "Das Produkt wurde aktualisiert.";
    }

    // Sprint 1 Marcel Riedl Ende
    // function um ein spezielles Produkt anzuzeigen
    // Sprint 2 Marcel Riedl Start
    public function produktansicht($produktnummer) {
        // Abfrage nach dem Produkt
        $this->sql = 'Select Produktnummer, Benennung, Farbe_farbe, Groese_groese, Hersteller_hersteller, Preis, SalePreis from produkt where Produktnummer = ' . $produktnummer;
        // Verbindung zur Datenbank
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement erzeugen und ausführen
        $stmt = $con->prepare($this->sql);
        $stmt->execute();
        // Daten in Variable speichern
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // Sprint 2 Marcel Riedl Ende
        // Sprint 4 Hanim Yerlikaya Start
        $data['images'] = $this->scanGallery($data['Produktnummer']);
        // Sprint 4 Hanim Yerlikaya Ende
        // // Sprint 2 Marcel Riedl Start
        // Return Wert
        return $data;
    }

    // Sprint 2 Marcel Riedl Ende
    // Sprint 4 Hanim Yerlikaya Start
    private function scanGallery($productId) {
        $dir = "gallery/" . $productId . "/";
        if (!file_exists($dir)) {
            return null;
        }

        $images = scandir($dir, SCANDIR_SORT_ASCENDING);
        $removes = 0;
        for ($i = 0; $i < count($images) + $removes; $i++) {
            if (strpos($images[$i], ".") === 0) {
                //Aus array löschen wenn 1. Zeichen ein Punk
                unset($images[$i]);
                $removes++;
                continue;
            } else if (!strpos($images[$i], ".")) {
                //Aus array löschen wenn kein Zeichen ein Punk ist
                unset($images[$i]);
                $removes++;
                continue;
            }

            if ($removes > 0) {
                $images[$i - $removes] = $dir . $images[$i];
                unset($images[$i]);
            } else {
                $images[$i] = $dir . $images[$i];
            }
        }
        return $images;
    }

    // Sprint 4 Hanim Yerlikaya Ende 
    // function um alle Produkte anzuzeigen
    // Sprint 2 Marcel Riedl Start
    public function alleProdukte() {
        // SQL-Abfrage zu allen Produkten eines speziellen Herstellers
        $this->sql = 'Select p.Produktnummer, p.Benennung, p.Farbe_farbe, p.Groese_groese, p.Hersteller_hersteller, '
                . 'p.Preis, k.Kategorie, o.oberkat from Produkt p join Kategorie k '
                . 'join Oberkategorie o where p.Kategorie_katID = k.katID '
                . 'and k.Oberkategorie_OberkatID = o.OberkatID order by Produktnummer;';
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Prepared Statement ausführen
        $stmt->execute();
        // Daten in Variable speichern
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // Return Wert
        return $row;
    }

    // function um Produkte aus einer Kategorie zu sehen
    function liste($kategorie) {
        // SQL Statement
        $this->sql = 'Select Produktnummer, Benennung, Farbe_farbe, Groese_groese, Hersteller_hersteller, Preis, SalePreis from Produkt where Kategorie_katID = ' . $kategorie;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Prepared Statement ausführen
        $stmt->execute();
        // Daten in Variable speichern
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // Return Wert
        return $data;
    }

    // Sprint 2 Marcel Riedl Ende
    // Sprint 1 Marcel Riedl Start Veraltet und Verbessert
    // function um Produkte aus einer Kategorie zu sehen
    public function produktliste($kategorie) {
        $this->sql = 'Select Produktnummer, Benennung,Farbe_farbe, Groese_groese, Hersteller_hersteller, Preis, SalePreis from produkt where Kategorie_KatID = ' . $kategorie;
        // Verbinden mit Datenbank
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement erstellen und ausführen
        $stmt = $con->prepare($this->sql);
        $stmt->execute();

        $total = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $a = 0;
        echo '<main>';

        while ($a < $total) {
            echo '<div><h2><a href ="../ProduktansichtController/' . $row['Produktnummer'] . '" >'
            . $row['Benennung'] . ' </a></h2> <nbsp><nbsp><nbsp>' . $row['Preis'] . ' €';
            echo '<br>Hersteller:' . $row['Hersteller_hersteller'] . '<br>';
            echo 'Farbe: ' . $row['Farbe_farbe'];
            echo '     Größe: ' . $row['Groese_groese'];
            $a++;
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        echo '</main>';
        $con = null;
        $this->con->schließen();
    }

    // function um alle produkte eines speziellen Herstellers anzuzeigen
    public function produkthersteller($hersteller) {
        // SQL-Abfrage zu allen Produkten eines speziellen Herstellers
        $this->sql = 'Select Produktnummer, Benennung from produkt where Hersteller_hersteller = "' . $hersteller . '";';

        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();

        $stmt = $con->prepare($this->sql);
        $stmt->execute();
        $total = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $a = 0;


        while ($a < $total) {
            echo '<tr> <td> ' . $row['Produktnummer'] . ' </td> <td>' . $row['Benennung'] . ' </td> </tr>';
            $a++;
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        echo '</table>';
        $con = null;
        $this->con->schließen();
    }

}

// Sprint 1 Marcel Riedl Ende
