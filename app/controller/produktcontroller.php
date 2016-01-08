<?php

// Sprint 5, Gruppe 4 Onlienshop, Datum 03.01.2016 Version 3
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// Userstory: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
// Task: 410-4 (#10609) "Produkt anlegen und löschen" überarbeiten
// Aufwand: 0,25 Stunden
// Beschreibung: Variablen Namen wurden überarbeitet
//
// Sprint 3 Gruppe 4 Onlineshop, Datum: 23.11.2015 Version 2
// Verfasser Marcel Riedl, Matrikelnummer: 3113845
// UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
// Task: 270-1 (#10329) Zusammenführen
// Aufwand: 1 Stunde
// Beschreibung: Es wird der Controller der Produkts im Backend erstellt.
// 
// Sprint 2, Gruppe 4 Onlineshop, Verfasser: Marcel Riedl, Datum: 05.11.2015 Version 1
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// UserStory: 110 Als Programmierer möchte ich meinen Code als Model-View-Controller (MVC) haben.
// Task: 110-2 (#10190) Eigenen Code an MVC anpassen
// Aufwand: 5 Stunden
// Beschreibung: Es wird der Controller des Produkts im Backend erstellt. 
//
// Sprint 3 Marcel Riedl Start
// Controller aus Sprint 2 Marcel Riedl, Überarbeitet Sprint 3 Renato Cabriolu
class Produktcontroller extends Controller {

    function index() {
        // Erstellen eines Objekts vom Produkt_Model
        // function model aus Controller
        $produkt = $this->model('Produkt_Model');
        // Sprint 3 Marcel Riedl Ende
        // Sprint 5 Marcel Riedl Start        
        // Aufruf der benötigten Daten aus der Datenbank
        $data = $produkt->backendanlegen();
        // Sprint 5 Marcel Riedl Ende
        // Sprint 3 Marcel Riedl Start
        // Übergabe der Daten an den View
        $this->view('backend/Backendheader');
        // Sprint 5 Marcel Riedl: Übergabe der Daten
        $this->view('Produkt/Produkt_Anlegen', $data);
        // Produkt anlegen sobald benutzt
        if (isset($_POST['anlegen'])) {
            $produkt->anlegen($_POST['name'], $_POST['hersteller'], $_POST['farbe'], $_POST['groesse'], $_POST['preis'], $_POST['kategorie'], $_FILES['images']);
        }
    }

}

// Sprint 3 Marcel Riedl Ende

/* Sprint 2 Marcel Riedl Start
class Produktcontroller {

    public function __construct($handle) {
        switch ($handle) {
            case 'anlegen':
                $this->anzeigen();

                break;
            case 'herstelleranzeigen':
                $this->herstelleranzeigen();

                break;

            default:
                break;
        }

        $produkt = new Produkt_Model();
        if (isset($_POST['anlegen'])) {
            echo $produkt->anlegen($_POST['name'], $_POST['hersteller'], $_POST['preis'], $_POST['kategorie']);
        }

        if (isset($_POST['loeschen'])) {
            $produkt->loeschen($_POST['nummer']);
        }

        if (isset($_POST['aktualisieren'])) {
            echo 'Still under work!';
        }

        if (isset($_POST['bild'])) {
            echo 'Still under work!';
        }
    }

    // function um alle Produkte eines einzelnen Herstellers anzuzeigen
    public function herstelleranzeigen() {
        require_once '../view/Produkt/Produkt_Anzeigen.php';
        $hersteller = 'G-Star';
        $produkt = new Produkt_Model();
        echo $produkt->produkthersteller($hersteller);
    }

    // function um die Liste aller Produkte anzuzeigen
    public function anzeigen() {
        require_once '../view/Produkt/Produkt_Anlegen.php';
    }

}
Sprint 2 Marcel Riedl Ende */