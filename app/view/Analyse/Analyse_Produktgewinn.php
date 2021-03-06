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
Beschreibung: Hier wird der View zur Analyse 'Umsatz pro Produkt' erstellt
-->

<div>
    <h2>Umsatz pro Produkt</h2>
    <!--    Formular um Produktnummer einzugeben-->
    <form action="index.php?url=AnalyseProduktgewinnController" method="post">
<!--        Sprint 5, Kerstin Gräter START-->
        <label for="produkt">Auswahl</label>
        <select name="produkt">
            <?php
            $a = 0;
            $dat = $data['auswahl'];
            $total = sizeof($dat);

            while ($a < $total) {
                echo '<option>' . $data['auswahl'][$a]['Produktnummer']. ', ' .$data['auswahl'][$a]['Benennung']. '</option>';
                $a++;
            }
            ?>
<!--        Sprint 5, Kerstin Gräter ENDE-->
        </select>
        <input type="submit" name="los" value="Los">
    </form>

    <?php
    //Ausgabe
    $pr = $_POST['produkt'];
    if ($data != null) {
        echo '<br><br><font size="+1">Der Umsatz des Produkts ' .$pr. ' beträgt: <b>' . $data['analyse'] . ' €</b>';
    }
    ?>
</div>
</section>
</main>
