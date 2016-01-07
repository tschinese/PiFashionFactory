<!--Sprint 4, Gruppe 4 Onlineshop, Datum: Version 3.1
Verfasser: Denis Kevljanin, Matrikelnummer: 
UserStory:
Task:
Zeitaufwand:
Beschreibung: -->

<!--Sprint 4, Gruppe 4 Onlineshop Datum: 05.12.2015, Version 4
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
Task: 370-2 (#10576) Änderungen im Produkt implementieren
Aufwand: 0,5 Stunde
Beschreibung: Die Ausgabe der Daten wird überarbeitet.-->

<!--Sprint 3, Gruppe 4 Onlineshop, Datum: Version 3.1
Verfasser: Denis Kevljanin, Matrikelnummer: 
UserStory:
Task:
Zeitaufwand:
Beschreibung: -->

<!--Sprint 3, Gruppe 4 Onlineshop, Datum: 19.11.2015 Version 3
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 170 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
Task: 170-1 (#10329) Zusammenführen
Aufwand: 2 Stunden
Beschreibung: Es wird ein View für alle Produkte aus einer Kategorie gezeigt  -->

<!--Sprint 2, Gruppe 4 Onlineshop, Datum: 02.11.2015 Version 2
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 140 Als Programmierer möchte ich meinen Code als Model-View-Controller (MVC) haben.
Task: 140-2 (#10200) Eigenen Code an MVC anpassen
Aufwand: 0,5 Stunden
Beschreibung: Es wird der View der Produktliste erstellt. -->

<!--Sprint 1, Gruppe 4 Onlineshop Version 1
Verfasser: Marcel Riedl Matrikelnummer: 3113845
UserStory: Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
Task: #10003 Produkte anlegen
Datum: 23.10.2015 Version 1
Zeitaufwand: 8 Stunden-->

<!-- Sprint 3 Denis Kevljanin Start-->
<main>
    <meta charset="UTF-8">
    <!-- Section #3 -->
    <section id="about" data-speed="2" data-type="background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Überblick <span class="sr-only">(aktuell)</span></a></li>
                        <div>
                            <label for="range">Bereich</label>
                            <input type="range" name="range" id="range" min="0" max="10" step="2">
                        </div>
                        <li><a href="#">Berichte</a></li>
                        <li><a href="#">Analysen</a></li>
                        <li><a href="#">Exportieren</a></li>
                    </ul>
                    <!-- Sprint 3 Denis Kevljanin Ende -->
                    <!-- Sprint 4 Denis Kevljanin Start -->
                    <form action="index.php?url=FilterController/<?php $kategorie = $data[1]['Kategorie_katID']; echo $kategorie;?>" method="post">
                        <b>Preis</b><br>
                        <input type="checkbox" name="preis[]" id="preis" value="50"/>< 50€<br>
                        <input type="checkbox" name="preis[]" id="preis" value="100"/>< 100€<br>
                        <input type="checkbox" name="preis[]" id="preis" value="200"/>< 200€<br>
                        <b>Größe</b><br>
                        <input type="checkbox" name="groesse[]" id="groesse" value="S"/>S<br>
                        <input type="checkbox" name="groesse[]" id="groesse" value="M"/>M<br>
                        <input type="checkbox" name="groesse[]" id="groesse" value="L"/>L<br>
                        <input type="checkbox" name="groesse[]" id="groesse" value="XL"/>XL<br>
                        <b>Farbe</b><br>
                        <input type="checkbox" name="farbe[]" id="farbe" value="blau"/>blau<br>
                        <input type="checkbox" name="farbe[]" id="farbe" value="rot"/>rot<br>
                        <input type="checkbox" name="farbe[]" id="farbe" value="schwarz"/>schwarz<br>
                        <input type="checkbox" name="farbe[]" id="farbe" value="beige"/>beige<br>
                        <input type="submit" name="submit" value="Submit"/>
                    </form>
                    <!-- Sprint 4 Denis Kevljanin Ende -->
                </div>
                <!-- Sprint 3 Marcel Riedl Start -->
                <?php
                // Erstellen des Counters
                $a = 0;
                // Anzahl der übermittelten Datensätze
                $total = sizeof($data);
                // Ausgabe der Datensätze
                while ($a < $total) {
                    // Auswahl, welcher Preis angezeigt wird
                    if ($data[$a]['SalePreis'] < $data[$a]['Preis']) {
                        $preis = $data[$a]['SalePreis'];
                    } else {
                        $preis = $data[$a]['Preis'];
                    }
                    // Sprint 3 Marcel Riedl Ende
                    // Sprint 4 Marcel Riedl Start
                    echo '<dir class="col-xs-6 col-lg-4"><h2><a href = "index.php?url=ProduktansichtController/'
                    . $data[$a]['Produktnummer'] . '">' . $data[$a]['Benennung'] . '</a></h2>';
                    echo 'Preis: ' . $preis . ' Hersteller: ' . $data[$a]['Hersteller_hersteller']
                    . '&nbsp<br>' . ' Farbe: ' . $data[$a]['Farbe_farbe'] . ' Größe: ' . $data[$a]['Groese_groese'] . '</dir>';
                    // Sprint 4 Marcel Riedl Ende
                    // Sprint 3 Marcel Riedl Start
                    // Counter wird erhöht
                    $a++;
                }
                ?>


            </div><!--/.col-xs-12.col-sm-9-->
        </div>



    </section>
</main>
<!-- Sprint 3 Marcel Riedl Ende -->