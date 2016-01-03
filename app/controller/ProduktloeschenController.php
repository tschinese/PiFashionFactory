<?php

// Sprint 5, Gruppe 4 Onlineshop, Datum: 03.01.2016, Version 3
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// Userstory: 410 Als Admin möchte ich weitere Funktionen um Backend-Bereich haben
// Task: 410-4 (#) "Produkt anlegen und löschen" überarbeiten
// Aufwand: 0,25 Stunden
// Beschreibung: Die Variablennamen sind überarbeitet worden
// 
// Sprint 3 Gruppe 4 Onlineshop, Datum: 23.11.2015 Version 2
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
// Task: 270-1 (#10329) Zusammenführen
// Gesamtaufwand: 14 Stunden
// Beschreibung: Es wird der Controller der Produkte, um diese löschen zu können, im Backend erstellt.
// 
// Sprint 3 Marcel Riedl Start
// Controller von Marcel Riedl Sprint 2, Überarbeitet von Renato Cabriolu Sprint 3
class ProduktloeschenController extends Controller {

    function index() {
        // Objekt von Produkt_Model
        $produkt = $this->model('Produkt_Model');

        // Aufruf der Views
        $this->view('backend/Backendheader');
        // Übergabe der benötigten Daten
        // Sprint 5 Marcel Riedl: Änderung des View Namens
        $this->view('Produkt/Produkt_Löschen', $produkt->alleProdukte());

        // Ausführung sobald der Button loeschen im Produkt_Anzeigen ausgeführt wird
        // Sprint 5 Marcel Riedl: Name der Variablen überarbeitet
        if (isset($_POST['loeschen'])) {
            $produkt->löeschen($_POST['produktnr']);
        }
    }

}

// Sprint 3 Marcel Riedl Ende