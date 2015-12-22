<?php

// Sprint 3, Gruppe 4 Onlineshop
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// User Story: 
// Task:
// Zeitaufwand:
// Beschreibung: Die Übersicht über alle Produkte wird im Backend implementiert
// 
// Renato Cabriolu Start
class backend extends Controller {

    public function index() {
        // Renato Cabriolu Ende        
        // Sprint 3 Marcel Riedl Start
        // Es wird ein Objekt vom Produkt_Model erstellt
        $produkt = $this->model('Produkt_Model');
        // Sprint 3 Marcel Riedl Ende
        // Renato Cabriolu Start
        //home index view
        $this->view('Backend/Backendheader');
        // Renato Cabriolu Ende        
        // Sprint 3 Marcel Riedl Start
        // Die Funktion alleProdukte aus dem Produkt_Model wird aufgerufen
        $this->view('Backend/Backendmain', $produkt->alleProdukte());
        // Sprint 3 Marcel Riedl Endes
        // Renato Cabriolu Start
    }

}

// Renato Cabriolu Ende
