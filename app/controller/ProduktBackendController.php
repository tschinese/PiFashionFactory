<?php

// Sprint 5 Gruppe 4 Onlineshop Datum: 03.01.2016
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// Userstory: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben.
// Task: 410-4 (#10604) "Produkt anlegen und löschen" überarbeiten
// Zeitaufwand: 0,5 Stunden
// Beschreibung: "übergeordneter" Controller für Produkte im Backend
// 
// Sprint 5 Marcel Riedl Start
// extends Controller aus Sprint 2 von Marcel Riedl, überarbeitet Sprint 3 Renato Cabriolu
class ProduktBackendController extends Controller {

    // auszuführende Methode
    function index() {
        // Hier wird der Backendheader einbezogen
        $this->view("backend/Backendheader");
        // Hier wird der View ProduktBearbeiten.php einbezogen
        $this->view("Produkt/ProduktBearbeiten");
    }

}

// Sprint 5 Marcel Riedl Ende
