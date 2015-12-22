<?php

// Sprint 5 Gruppe 4 Onlineshop Datum: 12.12.2015
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// User Story: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
// Task: 410-2 (#10602) Größen hinzufügen und löschen
// Aufwand: 1 Stunde
// Beschreibung: Hier wird der Controller für Groese erstellt 
//
// Sprint 5 Marcel Riedl Start
class GroeseController extends Controller {

    // auszuführende function
    function index() {
        // Objekt von der Klasse Groese_Model erstellen
        
		$groese = $this->model('Groese_Model');
		
		$data = $groese->anzeigen();

        // Views erstellen mit Daten aus der Datenbank
        $this->view('backend/Backendheader');
        // function anzeigen aus dem Groese_Model
        $this->view('Groese/Groese_View', $data);

        // Groese in die Datenbank hinzufügen
        if (isset($_POST['hinzufuegen'])) {
            // Wert aus dem Textfeld aus Groese_View bekommen
            $gr = $_POST['groese'];
            // Aufruf der function hinzufuegen aus dem Groese_Model
            $groese->hinzufuegen($gr);
        }
        // Groese aus der Datenbank löschen
        if (isset($_POST['loeschen'])) {
            // Wert aus dem Textfeld aus Groese_View bekommen
            $gr = $_POST['groese'];
            // Aufruf der function loeschen aus dem Groese_Model
            $groese->loeschen($gr);
        }
    }

}

// Sprint 5 Marcel Riedl Ende
