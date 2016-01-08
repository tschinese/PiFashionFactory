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
Beschreibung: Hier wird der View zur Analyse 'Umsatz eines Kunden' erstellt
-->

<div>
    <h2>Gesamtumsatz eines Kunden</h2>
<!--    Formular zur Eingabe der Kundennummer-->
    <form action="index.php?url=AnalyseUmsatzkundeController" method="post">
       
<!--        Kerstin Gräter START, Sprint 5-->
        <label for="kunde">Auswahl</label>
            <select name="kunde">
                <?php
                    $a = 0;
                    $dat = $data['auswahl'];
                    $total = sizeof($dat);

                    while ($a < $total) {
                        echo '<option>' .$data['auswahl'][$a]['Kundennummer']. ', ' .$data['auswahl'][$a]['Nachname']. ', ' .$data['auswahl'][$a]['Vorname']. '</option>';
                        $a++;
                    }
                ?>
            </select>

        <input type="submit" name="los" value="Los">
    </form>

    <?php
	//Ausgabe
        $kn = $_POST['kunde'];
        if ($data != null){
            echo '<br><br><font size="+1">Der Umsatz von ' .$kn. ' beträgt: <b>'.$data['analyse']['Kundenumsatz'].' €</b>';
	}
    ?>
<!--        Kerstin Gräter ENDE, Sprint 5-->
</div>
</section>
</main>

