<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird der View zur Analyse 'Umsatz eines Kunden' erstellt
-->

<div>
    <h2>Gesamtumsatz eines Kunden</h2>
<!--    Formular zur Eingabe der Kundennummer-->
    <form action="index.php?url=AnalyseUmsatzkundeController" method="post">
        Geben Sie hier die Kundennummer ein: <input type="text" name="kunde">
        <input type="submit" name="los" value="Los">
    </form>

    <?php
	//Ausgabe
        if ($data != null){
            echo '<br><br><font size="+1">Umsatz: <b>'.$data['Kundenumsatz'].'</b>';
	}
    ?>
</div>
</section>
</main>

