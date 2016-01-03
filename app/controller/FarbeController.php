<?php

// Sprint 5 Gruppe 4 Onlineshop Datum: 12.12.2015
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// User Story: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
// Task: 410-1 (#10601) Farben hinzufügen und löschen
// Aufwand: 1 Stunde
// Beschreibung: Hier wird der Controller für Farbe erstellt 
//
// Sprint 5 Marcel Riedl Start
// Controller aus Sprint 2 Marcel Riedl, Überarbeitet Sprint 3 Renato Cabriolu
class FarbeController extends Controller {

    // auszuführende function
    function index() {
        // Objekt der Klasse Farbe_Model erstellen
        $farbe = $this->model('Farbe_Model');
        // Zu übergebende Daten ermitteln
        $data = $farbe->anzeigen();

        // views zusammenführen
        $this->view('backend/Backendheader');
        // function anzeigen aus dem Farbe_Model, um Daten im View aufbereiten zu können
        $this->view('Farbe/Farbe_View', $data);

        // Ausführen sobald der Button hinzufuegen aus dem Farbe_View gedrückt wird
        if (isset($_POST['hinzufuegen'])) {
            // Wert aus dem Textfeld in Farbe_View bekommen
            $fa = $_POST['hinzufarbe'];
            // function hinzufuegen aus dem Farbe_Model aufrufen
            $farbe->hinzufuegen($fa);
        }
        // Ausführen sobald der Button loeschen aus dem Farbe_View gedrückt wird
        if (isset($_POST['loeschen'])) {
            // Wert aus dem Textfeld in Farbe_View bekommen
            $fa = $_POST['farbe'];
            // function loeschen aus dem Farbe_Model aufrufen
            $farbe->loeschen($fa);
        }
    }

}

// Sprint 5 Marcel Riedl Ende
