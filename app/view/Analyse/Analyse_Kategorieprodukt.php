<!--Sprint 5, Gruppe 4 Onlineshop, Datum: 07.01.2016 Version 2
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory:(450-1) Als Admin möchte ich über eine vernünftige Auswahl-Möglichkeit im Backend-Bereich verfügen.
Task: #10611 Auswahl in den Analyse-Funktionen überarbeiten 
Gesamtaufwand Task: 8 Stunden
Beschreibung: View wurde angepasst auf Auswahlmöglichkeiten-->

<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird der View zur Analyse 'Anzahl Produkte einer Kategorie' erstellt
-->

<!--Sprint 4, Kerstin Gräter START-->
<div>
    <h2>Anzahl aller Produkte einer Kategorie</h2>
<!--    Formular um Kategorienummer einzugeben-->
    <form action="index.php?url=AnalyseKategorieproduktController" method="post">
        <!--Sprint 5, Kerstin Gräter START-->
        <label for="kat">Auswahl:</label>
        <select name="kat">
            <?php
                $a = 0;
                $dat = $data['auswahl'];
                $total = sizeof($dat);
                
                while($a < $total){
                    echo '<option>'.$data['auswahl'][$a]['katID']. ', ' .$data['auswahl'][$a]['kategorie'].'</option>'; 
                    $a++;
                }
            ?>
        </select>
        <input type="submit" name="los" value="Los">
    </form>

    <?php
        //Ausgabe
        if ($data != null){
            echo '<br><br><font size="+1">Die Anzahl der Produkte innerhalb der Kategorie beträgt: <b>'.$data['analyse']['Produkte_pro_Kategorie'].'</b>';
	}
    ?>
    <!--Sprint 5, Kerstin Gräter ENDE-->
</div>
</section>
</main>
<!--Sprint 4, Kerstin Gräter ENDE-->