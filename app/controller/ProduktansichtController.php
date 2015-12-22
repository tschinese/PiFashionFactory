<?php

//Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Marcel Riedl, Datum: 19.11.2015 Version 1
//UserStory: 270 Als Programmierer möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: 270-1 (#10329) Zusammenführen
//Aufwand: 2 Stunden
//Beschreibung: Es wird der Controller des Produkts im Frontend erstellt. 
//
// von Kerstin Gräter
require_once '../app/config/Connect_Mysql.php';

// Kerstin Gräter Ende
// Sprint 3 Marcel Riedl Start
class ProduktansichtController extends Controller {

    function index($produktnummer) {
        // Objekt von Produkt_Model
        $produktliste = $this->model('Produkt_Model');
        // Aufruf der Views
        $this->view('Header');
        // Übergabe der notwendigen Daten aus der Datenbank
        $this->view('Produkt/Produktansicht', ['data' => $produktliste->produktansicht($produktnummer)]);
        $this->view('Footer');
    }

}

// Sprint 3 Marcel Riedl Ende