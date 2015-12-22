<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird der View zur Analyse 'Anzahl Produkte einer Kategorie' erstellt
-->

<div>
    <h2>Anzahl aller Produkte einer Kategorie</h2>
<!--    Formular um Kategorienummer einzugeben-->
    <form action="index.php?url=AnalyseKategorieproduktController" method="post">
        Geben Sie hier die Kategorienummer ein: <input type="text" name="kat">
        <input type="submit" name="los" value="Los">
    </form>

    <?php
        //Ausgabe
	if ($data != null){
            echo '<br><br><font size="+1">Anzahl: <b>'.$data['Produkte_pro_Kategorie'].'</b>';
	}
    ?>
</div>
</section>
</main>
