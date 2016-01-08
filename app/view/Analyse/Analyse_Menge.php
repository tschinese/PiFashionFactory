<!--Sprint 5, Gruppe 4 Onlineshop, Datum: 07.01.2016 Version 2
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory:(450-1) Als Admin möchte ich über eine vernünftige Auswahl-Möglichkeit im Backend-Bereich verfügen.
Task: #10611 Auswahl in den Analyse-Funktionen überarbeiten 
Gesamtaufwand Task:  Stunde
Beschreibung: View wurde angepasst auf Auswahlmöglichkeiten-->

<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird der View zur Analyse 'Menge Bestellungen eines Produkts' erstellt
-->

<!--Sprint 4, Kerstin Gräter START-->
<div>
    <h2>Anzahl der Bestellungen eines Produkts</h2>
<!--    Formular um Produktnummer einzugeben-->
    <form action="index.php?url=AnalyseMengeController" method="post">
<!--        Sprint 5, Kerstin Gräter START-->
        <label for="produkt">Auswahl:</label>
        <select name="produkt">
            <?php
                $a = 0;
                $dat = $data['auswahl'];
                $total = sizeof($dat);
                
                while ($a < $total){
                    echo '<option>' .$data['auswahl'][$a]['Produktnummer']. ', ' .$data['auswahl'][$a]['Benennung']. '</option>'; 
                    $a++;
                }
            
            ?>
            
            
        </select>
        <input type="submit" name="los" value="Los">
    </form>

    <?php
        //Ausgabe
        $pr = $_POST['produkt'];
        if ($data != null){
            echo '<br><br><font size="+1">Die Anzahl der Bestellungen des Produkts ' .$pr. ' beträgt: <b>'.$data['analyse']['Bestellungen_pro_Produkt'].'</b>';
	}
     // Sprint 5, Kerstin Gräter ENDE
    ?>
</div>
</section>
</main>
<!--Sprint 4, Kerstin Gräter ENDE-->
