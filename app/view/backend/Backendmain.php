<!-- Sprint 5, Gruppe 4 Onlineshop, Datum: 12.12.2015
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
Task: 410-1 (#10601) Farben hinzufügen und löschen
Task: 410-2 (#10602) Groesen hinzufügen und löschen
Task: 410-3 (#10603) Hersteller hinzufügen und löschen
Task: 410-4 (#10604) "Produkt anlegen und löschen" überarbeiten
Aufwand: 1 Stunde
Beschreibung: Verlinkungen zu den Controllern erstellen
-->

<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 01.12.2015
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Zeitaufwand: 0,5 Stunden
Beschreibung: Analyse Button belegen
-->

<!--Sprint 4, Gruppe 4 Onlineshop Datum: 07.12.2015
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
Task: 370-2 (#10576) Änderungen im Produkt implementieren
Aufwand: 1 Stunde
Beschreibung: Eine Tabelle für alle Produkte (zu sehen im Backend). 
-->

<!-- Sprint 3, Gruppe 4 Onlineshop, Verfasser Marcel Riedl, Datum: 23.11.2015
UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
Task: 270-1 (#10329) Zusammenführen
Auswand: 2 Stunden
Beschreibung: Er wird hier eine Liste aller verfügbarer Produkte angezeigt
-->

<!--Sprint: 2
 * @author: Renat Cabriolu
 * Datum: 10.11.2015
 * User Story (Nr.: 140-7) Eigenen Code an MVC anpassen 
 * Zeit insgesamt: 3h
 * bemerkung : es gab einige probleme mit Bootstrape
-->

<!--Sprint 1, Gruppe 4 Onlineshop Datum: 23.10.2015
Verfasser: Marcel Riedl Matrikelnummer: 3113845
UserStory: Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
Task: #10003 Produkte anlegen
Zeitaufwand: 8 Stunden
-->

<!--Sprint: 1
 * @author: Renat Cabriolu
 * Datum: 25.10.2015
 * User Story (Nr.: 10) Einheitliches Design
 * Zeit insgesamt: 8h
-->

<!-- Sprint 1 Renato Cabriolu Start -->
<main>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="index.php?url=Produktcontroller">Produkt Anlegen <span class="sr-only">(aktuell)</span></a></li>
                    <li><a href="#">Berichte</a></li>
                    <!-- Sprint 1 Renato Cabriolu Ende -->
                    <!-- Sprint 4 Kerstin Gräter Start-->
                    <li><a href="index.php?url=AnalyseController">Analysen</a></li>
                    <!-- Sprint 4 Kerstin Gräter Ende -->
                    <!-- Sprint 1 Renato Cabriolu Start -->
                    <li><a href="#">Exportieren</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">Nav-Eintrag</a></li>
                    <li><a href="">Noch ein Nav-Eintrag</a></li>
                    <li><a href="">Und noch einer</a></li>
                    <li><a href="">Anderer Nav-Eintrag</a></li>
                    <li><a href="">Mehr Navigation</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">Noch ein Nav-Eintrag</a></li>
                    <li><a href="">Und noch einer</a></li>
                    <li><a href="">Anderer Nav-Eintrag</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <h1 class="page-header">Dashboard</h1>

                <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generisches Platzhalter-Bild">
                        <!-- Sprint 1 Renato Cabriolu Ende -->
                        <!-- Sprint 3 Marcel Riedl Start -->
                        <h4><span class="text-muted"><a href="index.php?url=Produktcontroller">Neues Produkt anlegen</a></span></h4>
                        <!-- Sprint 3 Marcel Riedl  Ende -->
                        <!-- Sprint 1 Renato Cabriolu Start -->
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generisches Platzhalter-Bild">
                        <!-- Sprint 1 Renato Cabriolu Ende -->
                        <!-- Sprint 3 Marcel Riedl Start -->
                        <h4><span class="text-muted"><a href="index.php?url=GroeseController">Größen bearbeiten</a></span></h4>
                        <!-- Sprint 3 Marcel Riedl Ende -->
                        <!-- Sprint 1 Renato Cabriolu Start -->
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generisches Platzhalter-Bild">
                        <!-- Sprint 1 Renato Cabriolu Ende -->
                        <!-- Sprint 5 Marcel Riedl Start -->
                        <h4><span class="text-muted"><a href="index.php?url=FarbeController">Farben bearbeiten</a></span></h4>
                        <!-- Sprint 5 Marcel Riedl Ende -->
                        <!-- Sprint 1 Renato Cabriolu Start -->
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generisches Platzhalter-Bild">
                        <!-- Sprint 1 Renato Cabriolu Ende -->
                        <!-- Sprint 3 Marcel Riedl Start -->
                        <h4><span class="text-muted"><a href="index.php?url=HerstellerController">Hersteller bearbeiten</a></span></h4>
                        <!-- Sprint 1 Marcel Riedl Ende -->
                        <!-- Sprint 1 Renato Cabriolu Start -->
                    </div>
                </div>
                <!-- Sprint 1 Renato Cabriolu Ende -->
                <!-- Sprint 4 Marcel Riedl Start -->
                <h2 class="sub-header">Produkte</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produktnummer</th>
                                <th>Benennung</th>
                                <th>Farbe</th>
                                <th>Größe</th>
                                <th>Hersteller</th>
                                <th>Preis</th>
                                <th>Kategorie</th>
                                <th>Oberkategorie</th>
                            </tr>
                        </thead>
                        <?php
                        $a = 0;
                        $total = sizeof($data);
                        echo '<tbody>';
                        while ($a < $total) {
                            echo ' <tr><td>' . $data[$a]['Produktnummer'] . '</td>';
                            echo '<td>' . $data[$a]['Benennung'] . '</td>';
                            echo '<td>' . $data[$a]['Farbe_farbe'] . '</td>';
                            echo '<td>' . $data[$a]['Groese_groese'] . '</td>';
                            echo '<td>' . $data[$a]['Hersteller_hersteller'] . '</td>';
                            echo '<td>' . $data[$a]['Preis'] . '</td>';
                            echo '<td>' . $data[$a]['Kategorie'] . '</td>';
                            echo '<td>' . $data[$a]['oberkat'] . '</td></tr>';
                            $a++;
                        }
                        echo '</tbody>';
                        ?>
                    </table>
                </div>
                <!-- Sprint 4 Marcel Riedl Ende-->
                <!-- Sprint 1 Renato Cabriolu Start -->
            </div>
        </div>
    </div>
    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Nur, um unsere Platzhalter-Bilder zum Laufen zu bringen. Die nächste Zeile nicht wirklich kopieren! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10-Anzeigefenster-Hack für Fehler auf Surface und Desktop-Windows-8 -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</main> 
</body>
</html>
<!-- Sprint 1 Renato Cabriolu Ende -->