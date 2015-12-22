<?php

//Sprint 3, Gruppe 4 Onlineshop 
//Verfasser: Marcel Riedl, Datum: 19.11.2015 Version 1
//UserStory: #90 Als Kunde möchte ich eine einfache Navigation in Kategorien, so dass ich schnell mein Wunschprodukt finden kann.
//Task: #90-1 (10315) Kategorien auswählen und programmieren
//Aufwand: 0,5 Stunden
//Beschreibung: Es wird der Controller für die Kategorien erstellt. 
//
// Sprint 3 Marcel Riedl Start
class Kategoriecontroller extends Controller {

    function index($kat) {
        // Objekt von Kategorie_Model
        $kategorie = $this->model('Kategorie_Model');

        // Aufruf der Views
        $this->view('Header');
        // Übergabe der notwendigen Daten
        $this->view('Kategorie/Kategorie_View', $kategorie->kategorienanzeigen($kat));
        $this->view('Footer');
    }

}

// Sprint 3 Marcel Riedl Ende