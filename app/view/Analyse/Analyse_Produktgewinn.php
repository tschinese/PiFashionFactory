<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird der View zur Analyse 'Umsatz pro Produkt' erstellt
-->

<div>
    <h2>Umsatz pro Produkt</h2>
<!--    Formular um Produktnummer einzugeben-->
    <form action="index.php?url=AnalyseProduktgewinnController" method="post">
        Geben Sie hier die Produktnummer ein: <input type="text" name="produkt">
        <input type="submit" name="los" value="Los">
    </form>

    <?php
        //Ausgabe
        if ($data != null){
            echo '<br><br><font size="+1">Umsatz: <b>'.$data.'</b>';
	}
    ?>
</div>
</section>
</main>
