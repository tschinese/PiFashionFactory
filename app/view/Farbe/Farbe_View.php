<!-- 
Sprint 5 Gruppe 4 Onlineshop
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
User Story: 410 Als Admin möchte ich weitere Funktionen für den Backend-Bereich haben.
Task: 410-1 (#10601) Farbe hinzufügen und löschen
Zeitaufwand: 1 Stunde 
Beschreibung: Hier wird der View für Farben erstellt. -->

<!-- Sprint 5 Marcel Riedl Start -->
<main>
    <br><br><br>
    <!-- Überschrift -->
    <div>
        <h4> Farbe bearbeiten </h4>
    </div>
    <div>
        <!-- Tabelle für die Daten aus der Datenbank erstellen -->
        <table>
            <!-- Tabellen Kopf erstellen -->
            <thead>
            <th> vorhandene Farben </th>
            </thead>
            <!-- Tabellen Body mit den Daten erstellen -->
            <?php
            // Counter erstellen
            $a = 0;
            // Anzahl der Datensätze ermitteln
            $total = sizeof($data);
            echo '<tbody>';
            // Für jeden Datensatz wird eine neue Tabellenzeile erstelle
            while ($a < $total) {
                // Ausgabe der Daten
                echo '<tr><td>' . $data[$a]['farbe'] . '</td></tr>';
                // Counter erhöhen
                $a++;
            }
            echo '</tbody>';
            ?>
        </table>
    </div>
    <br>
    <div>
        <!-- Formular um Farben löschen zu können -->
        <form action="index.php?url=FarbeController" method="post">
            <label for="farbe">zu löschende Farbe: </label>
            <select name="farbe">
                <?php
                // neuer Counter für die Auswahlmöglichkeiten
                $b = 0;
                // while-Schleife um die Auswahlmöglichkeiten zu bestimmen
                while ($b < $total) {
                    // Ausgabe der Möglichkeiten
                    echo '<option>' . $data[$b]['farbe'] . ' </option>';
                    // Counter wird erhöht
                    $b++;
                }
                ?>
            </select><br>
            <!-- Bestätigungsbutton -->
            <input type="submit" name="loeschen" value="Löschen"><br>
        </form>
    </div>
    <!-- Formular um Farben hinzufügen zu können -->
    <div>
        <form action="index.php?url=FarbeController" method="post">
            <label for="hinzufarbe">hinzuzufügende Farbe: </label> <input type="text" name="hinzufarbe"><br>
            <!-- Bestätigungsbutton -->
            <input type="submit" name="hinzufuegen" value="Hinzufügen">
        </form>
    </div>
    <!-- Formular um zurück zum Hauptmenu des Backends zukommen -->
    <div>
        <form action="index.php?url=backend" method="post">
            <input type="submit" value="Zurück">
        </form>
    </div>
</main>
<!-- Sprint 5 Marcel Riedl Ende -->
