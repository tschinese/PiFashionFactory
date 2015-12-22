<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird der View zur Analyse 'Anzahl Kunden' erstellt
-->

<div>
    <h2>Anzahl aller Kunden</h2>

<br>
    <?php
	echo '<font size="+1">Anzahl der Admins: </font><b>'.$data[0]['Anzahl_Admin'].'</b><br>';
        echo '<font size="+1">Anzahl der normalen Kunden: </font><b>'.$data[1]['Anzahl_Kunden'].'</b><br>';
	echo '<font size="+1">Anzahl aller Kunden: </font><b>'.$data[2]['Gesamtanzahl'].'</b>';
    ?>

</div>
</section>
</main>

