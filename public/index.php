<!DOCTYPE html>
<!--Sprint 2, Gruppe 4 Onlineshop
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 110 Als Programmierer möchte ich den Aufbau als Model-View-Controller (MVC) haben 
Task: 110-2 (#10190) Ordnerstruktur anlegen 
Zeitaufwand: 0,25 Stunden
Beschreibung: Hier wird die Start-Datei erstellt -->
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fashion-Factory</title>
    </head>
    <body>
        <?php
        require_once '../app/init.php';
        $app = new App;
        ?>
    </body>
</html>
