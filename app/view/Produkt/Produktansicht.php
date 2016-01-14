<!--
Sprint 5, Gruppe 4 Onlineshop, Verfasser: Renato Cabriolu, Datum: 10.01.2016 Version 1
UserStory: Als Kunde möchte ich ein Einheitliches Designe haben.
Task: 430-1  Produktansicht Designen
Aufwand: 0.1 Stunden
Beschreibung: Blockansicht




<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 08.12.2015 Version 5
Verfasser: Hanim Yerlikaya, 
UserStory: 300 Als Kunde möchte ich eine Bildergalerie haben für die Produkte
Task: 300-3 (#10509) Zuordnung zum richtigen Produkt erstellen
Aufwand: 4 Stunden
Beschreibung: Der Admin kann die entsprechenden Bilder uploaden. -->

<!--Sprint 4, Gruppe 4 Onlineshop Datum: 05.12.2015, Version 4
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
Task: 370-2 (#10576) Änderungen im Produkt implementieren
Aufwand: 0,5 Stunde
Beschreibung: Die Ausgabe der Daten wird überarbeitet.-->

<!--Sprint 3, Gruppe 4 Onlineshop, Version 3.1 
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 
Task:
Aufwand: -->

<!--Sprint 3, Gruppe 4 Onlineshop, Datum: 19.11.2015 Version 3
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 170 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
Task: 170-1 (#10329) Zusammenführen
Aufwand: 2 Stunden
Beschreibung: Es wird ein View für ein bestimmtes Produkte aus einer Kategorie gezeigt  -->

<!--Sprint 2, Gruppe 4 Onlineshop, Datum: 02.11.2015 Version 2
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 140 Als Programmierer möchte ich meinen Code als Model-View-Controller (MVC) haben.
Task: 140-2 (#10190) Eigenen Code an MVC anpassen
Aufwand: 0,5 Stunden
Beschreibung: Es wird ein View über ein bestimmtes Produkt erstellt.     -->

<!--Sprint 1, Gruppe 4 Onlineshop, Datum: 23.10.2015 Version 1
Verfasser: Marcel Riedl Matrikelnummer: 3113845
UserStory: 10 Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
Task: 10-2 #10003 Produkte anlegen
Zeitaufwand: 8 Stunden-->

<!-- Sprint 2 Marcel Riedl Start -->
<main>
        <!-- Sprint 2 Marcel Riedl Ende -->
        <!-- Sprint 5 Renato Cabriolu Start -->
       <blockquote>
        <!-- Sprint 5 Renato Cabriolu Ende -->
        <!-- Sprint 2 Marcel Riedl Start -->
    <div class="col-xs-6 col-lg-4">
        <?php
        // Sprint 2 Marcel Riedl Ende
        // Sprint 3 Christian Frindt Start
        require_once '../app/lib/Warenkorb.php';
        // Sprint 3 Christian Frindt Ende
        // Sprint 2 Marcel Riedl Start
        // Erstellung des Counters
        $a = 0;
        // Anzahl der übermittelten Datensätze
        $total = sizeof($data);
        // Anzeige des Produkts
        while ($a < $total) {
            // Anweisung, welcher Preis angezeigt wird
            if ($data['data']['SalePreis'] < $data['data']['Preis']) {
                $preis = $data['data']['SalePreis'];
            } else {
                $preis = $data['data']['Preis'];
            }
            // Sprint 2 Marcel Riedl Ende
            // Sprint 4 Marcel Riedl Start
            // Anzeige der Produktdaten:
            echo '<div><h2>' . $data['data']['Benennung'] . '</h2>' . $data['data']['Hersteller_hersteller'] . '<br>'
            . $preis . ' € <br>';
            echo 'Farbe:' . $data['data']['Farbe_farbe'] . ' <br>Größe: ' . $data['data']['Groese_groese'];
            // Sprint 4 Marcel Riedl Ende
            // Sprint 2 Marcel Riedl Start
            $a++;
        }
        // Sprint 2 Marcel Riedl Ende
        // Sprint 4 Hanim Yerlikaya Start
        print '<table><tr>';
        for ($i = 0; $i < count($data['data']['images']); $i++)
        {
            print '<td><a href="' . $data['data']['images'][$i] . '"><img width="100" src="'
                    . $data['data']['images'][$i] . '"></a></td>';
        }
        print '</tr></table>';
        // Sprint 4 Hanim Yerlikaya Ende
        // Sprint 2 Marcel Riedl Start
        ?>
    </div>
    <!-- Sprint 2 Marcel Riedl Ende -->
    <!-- Sprint 3 Christian Frindt Start -->
    <form action='#' method="post">
        <input type="hidden" name="add" value="<?php echo $data['data']['Produktnummer'] ?>">
        <input type="submit" value="In den Warenkorb">
    </form>
    <!-- Sprint 3 Christian Frindt Ende-->
    <!-- Sprint 1 Denis Kevljanin START -->
    <form action='#' method="POST">
        <input type="submit" value="Sofortkaufen">
  
    </form> 
    <!-- Sprint 1 Denis Kevljanin ENDE -->
    <!--  Sprint 3 Kerstin Gräter Start-->
    <form action='index.php?url=GTHcontroller' method="post">
        <input type="submit" value="Größentabelle" name="tabelle">
    </form>
    <!-- Sprint 3 Kerstin Gräter Ende-->
    <!-- Sprint 3 Christian Frindt Start -->
    <a href="index.php?url=BewertungController/bewertungAnzeigen/<?php echo $data['data']['Produktnummer'] ?>">Rezensionen</a>
    <!-- Sprint 3 Christian Frindt Ende -->
    <!-- Sprint 2 Marcel Riedl Start -->
      <!-- Sprint 2 Marcel Riedl Ende -->
      <!-- Sprint 5 Renato Cabriolu Start -->
       <blockquote>
        <!-- Sprint 5 Renato Cabriolu Ende -->
        <!-- Sprint 2 Marcel Riedl Start -->
</main> 
<!-- Sprint Marcel Riedl Ende -->