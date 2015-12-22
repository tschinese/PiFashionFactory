<?php

// Sprint 3 Gruppe 4 Onlineshop, Verfasser Marcel Riedl, Datum: 23.11.2015 Version 2
// UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
// Task: 270-1 (#10329) Zusammenführen
// Aufwand:
// Beschreibung: Es wird der Controller der Produkts im Backend erstellt.
// 
// Sprint 3 Marcel Riedl Start
class ProduktloeschenController extends Controller {

    function index() {
        // Objekt von Produkt_Model
        $produkt = $this->model('Produkt_Model');

        // Aufruf der Views
        $this->view('backend/Backendheader');
        // Übergabe der benötigten Daten
        $this->view('Produkt/Produkt_Anzeigen', $produkt->alleProdukte());

        // Ausführung sobald der Button loeschen im Produkt_Anzeigen ausgeführt wird
        if (isset($_Post['loeschen'])) {
            $produkt->löeschen($_POST['Produktnr']);
        }
    }

}

// Sprint 3 Marcel Riedl Ende