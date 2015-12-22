<!--Sprint 4, Gruppe 4 Onlineshop Datum: 07.12.2015, Version 4
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
Task: 370-2 (#10576) Änderungen im Produkt implementieren
Aufwand: 1 Stunde
Beschreibung: Eine Tabelle für alle Produkte (zu sehen im Backend).
Vorlage für die Backendmain.php -->

<!-- Sprint 3, Gruppe 4 Onlineshop, Verfasser Marcel Riedl, Datum: 23.11.2015 Version 2
UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
Task: 270-1 (#10329) Zusammenführen
Auswand: 2 Stunden
Beschreibung: Er wird hier eine Liste aller verfügbarer Produkte angezeigt
-->

<!--Sprint 1, Gruppe 4 Onlineshop
Verfasser: Marcel Riedl Matrikelnummer: 3113845
UserStory: Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
Task: #10003 Produkte anlegen
Datum: 23.10.2015 Version 1
Zeitaufwand: 8 Stunden-->

<!-- Sprint 4 Marcel Riedl Start -->
<main>
    <div>
        <!-- Überschrift -->
        <h2> Produkte </h2>
        <!-- Tabelle für die Produktliste -->
        <table>
            <!-- Tabellen Kopf -->
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
            <!-- Tabellen Body -->
            <?php
            // Erstellung des Counters
            $a = 0;
            // Anzahl der übermittelten Datensätze
            $total = sizeof($data);
            // Ausgabe der Daten
            while ($a < $total) {
                echo '<tbody> <tr>';
                echo '<td>' . $data[$a]['produktnummer'] . '</td>';
                echo '<td>' . $data[$a]['Benennung'] . '</td>';
                echo '<td>' . $data[$a]['Farbe_farbe'] . '</td>';
                echo '<td>' . $data[$a]['Groese_groese'] . '</td>';
                echo '<td>' . $data[$a]['Hersteller_hersteller'] . '</td>';
                echo '<td>' . $data[$a]['Preis'] . '</td>';
                echo '<td>' . $data[$a]['Kategorie'] . '</td>';
                echo '<td>' . $data[$a]['oberkat'] . '</td>';
                echo '</tr></tbody>';
                // Erhöhung des Counters
                $a++;
            }
            ?>

        </table>
    </div>
</main>
<!-- Sprint 4 Marcel Riedl Ende -->