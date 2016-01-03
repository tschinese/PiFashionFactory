<?php

// Sprint 5 Gruppe 4 Onlineshop Datum: 12.12.2015
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// User Story: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
// Task: 410-3 (#10603) Hersteller hinzufügen und löschen
// Aufwand: 1 Stunde
// Beschreibung: Hier wird der Controller für Hersteller erstellt 
//
// Sprint 5 Marcel Riedl Start
class HerstellerController extends Controller {

    // auszuführende function
    function index() {
        // Objekt von Hersteller_Model erstellen
        $hersteller = $this->model('Hersteller_Model');

        // views erstellen
        $this->view('Backend/Backendheader');
        // function anzeigen aus Hersteller_Model aufrufen
        $this->view('Hersteller/Hersteller_View', $hersteller->anzeigen());

        // wird aktiviert sobald Button hinzufuegen im Hersteller_View gedrückt wird
        if (isset($_POST['hinzufuegen'])) {
            // Wert aus dem Textfeld hersteller im Hersteller_View bekommen
            $her = $_POST['hinzuhersteller'];
            // function hinzufuegen aus Hersteller_Model aufrufen
            $hersteller->hinzufuegen($her);
        }
        // wird aktiviert sobald Button loeschen im Hersteller_View gedrückt wird
        if (isset($_POST['loeschen'])) {
            // Wert aus dem Textfeld hersteller im Hersteller_View bekommen
            $her = $_POST['hersteller'];
            // function loeschen aus Hersteller_Model aufrufen
            $hersteller->loeschen($her);
        }
    }

}

// Sprint 5 Marcel Riedl Ende
