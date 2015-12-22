<!--Sprint 3, Gruppe 4 version 2
Verfasser: Renato Cabriolu, Matrikelnummer: 3112468
UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen. update aus 110 Als Programmierer möchte ich den Aufbau als Model–view–controller (MVC) haben..
Task: 270 MVC Anpassen 
Aufwand: 2 Stunde -->

<!-- Sprint 2, Gruppe 4 Onlineshop, Version 1
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory:
Task:
Zeitaufwand: 
Beschreibung: -->

<?php
// Sprint 2 Marcel Riedl Start
class App {

    protected $controller = "home";
    protected $method = "index";
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        if (file_exists('../App/controller/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../App/controller/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            return $url = explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
        }
    }

}// Sprint 2 Marcel Riedl Ende
