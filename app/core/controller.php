<!--Sprint 3, Gruppe 4 version 2
Verfasser: Renato Cabriolu, Matrikelnummer: 3112468
UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen. update aus 110 Als Programmierer möchte ich den Aufbau als Model–view–controller (MVC) haben..
Task: 270 MVC Anpassen 
Aufwand: 1 Stunde -->

<!--Sprint 2, Gruppe 4 Onlineshop Version 1
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory:
Task:
Zeitaufwand:
Beschreibung: -->

<?php

// Sprint 2 Marcel Riedl Start
class Controller {

    public function model($model) {

        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function view($view, $data = []) {
        // Sprint 2 Marcel Riedl Ende
        // Sprint 3 Renato Cabriolu Start
        // require_once '../app/view/Header.php';
        // Sprint 3 Renato Cabriolu Ende
        // Sprint 2 Marcel Riedl Start
        require_once '../app/view/' . $view . '.php';
        // Sprint 2 Marcel Riedl Ende
        // Sprint 2 Marcel Riedl Start
        // require_once '../app/view/Footer.php';
        // Sprint 3 Renato Cabriolu Ende
        // Sprint 2 Marcel Riedl Start
    }

}

// Sprint 2 Marcel Riedl Ende