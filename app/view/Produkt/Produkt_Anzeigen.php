<!--Sprint 4, Gruppe 4 Onlineshop Datum: 07.12.2015 Version 3
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
Task: 370-2 (#10576) Änderungen im Produkt implementieren
Aufwand: 0,5 Stunde
Beschreibung: Änderungen bei der Ausgabe der Tabelle. 
-->

<!-- Sprint 3, Gruppe 4 Onlineshop, Datum: 23.11.2015 Version 2
Verfasser Marcel Riedl, Matrikelnummer: 3113845
UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
Task: 270-1 (#10329) Zusammenführen
Auswand: 2 Stunden
Beschreibung: Er wird hier eine Liste aller verfügbarer Produkte angezeigt, um dann eines Löschen zu können
-->

<!--Sprint 2, Gruppe 4 Onlineshop, Datum: 02.11.2015 Version 1
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: Als Programmierer möchte ich meinen Code als Model-View-Controller (MVC) haben.
Task: 110-2 (#10190) Eigenen Code an MVC anpassen
Aufwand: 0,5 Stunden
Beschreibung: Es wird ein View aller Produkte eines einzelnen Herstellers erstellt. 
-->

<!--Sprint 1, Gruppe 4 Onlineshop, Datum: 23.10.2015 Version 1
Verfasser: Marcel Riedl Matrikelnummer: 3113845
UserStory: Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
Task: #10003 Produkte anlegen
Zeitaufwand: 8 Stunden
Beschreibung: 
-->

<!-- Sprint 3 Marcel Riedl Start -->
<main>
    <br>
    <h2>Produkt löschen</h2>
    <div>
        <br>
        Geben Sie hier die Produktnummer des zu löschenden Produkts ein:
        <!-- Formular, um ein Produkt löschen zu können -->
        <form method="post">
            <font size="+1">Produktnummer: </font><input type="number" name="produktnr"><br>
            <input type="submit" name="loeschen" value="Produkt löschen">
        </form>
    </div>
    <div class="table-responsive">
        <!-- Tabelle aller Produkte -->
        <table class="table table-striped">
            <!-- Tabellen Kopf -->
            <thead>
            <th>Produktnummer</th>
            <th>Name</th>
            <th>Farbe</th>
            <th>Größe</th>
            <th>Hersteller</th>
            <th>Preis</th>
            <th>Kategorie</th>
            <th>Oberkategorie</th>
            </thead>
            <!-- Tabellen Body -->
            <?php
            // Counter erstellen
            $a = 0;
            // Anzahl der übermittelten Datensätze
            $total = sizeof($data);
            echo '<tbody>';
            // Ausgabe der Daten
            while ($a < $total) {
                // Sprint 3 Marcel Riedl Ende
                // Sprint 4 Marcel Riedl Start
                echo '<tr><td>' . $data[$a]['Produktnummer']
                . '</td><td>' . $data[$a]['Benennung']
                . '</td><td>' . $data[$a]['Farbe_farbe']
                . '</td><td>' . $data[$a]['Groese_groese']
                . '</td><td>' . $data[$a]['Hersteller_hersteller']
                . '</td><td>' . $data[$a]['Preis']
                . '</td><td>' . $data[$a]['Kategorie']
                . '</td><td>' . $data[$a]['oberkat'] . '</td></tr>';
                // Sprint 4 Marcel Riedl Ende
                // Sprint 3 Marcel Riedl Start
                // Erhöhung des Counters
                $a++;
            }
            echo '</tbody>';
            ?>
        </table>       
    </div>
</main>
<!-- Sprint 3 Marcel Riedl Ende -->
<!--Sprint 2: ALT

Produkte anzeigen <br />
Anmerkungen: Notieren Sie sich die richtige Produktnummer
<table> <tr> <td> Produktnummer </td> <td> Produktname </td> </tr>
Sprint 2 Ende-->