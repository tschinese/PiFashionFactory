<!--
Sprint 5, Gruppe 4 Onlineshop
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
User Story: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben.
Task: 410-2 (#10602) Größe hinzufügen und löschen
Aufwand: 1 Stunde
Beschreibung: Hier wird der View für die Groese erstellt. -->

<!-- Sprint 5 Marcel Riedl Start -->
<main>
    <br><br><br>
    <!-- Überschrift -->
    <div>
        <h4> Größen bearbeiten </h4>
    </div>
    <div>
        <!-- Tabelle für die vorhandenen Daten aus der Datenbank erstellen-->
        <table>
            <!-- Tabellen Kopf erstellen -->
            <thead>
                <tr>Vorhandene Größen</tr>
            </thead>
            <!-- Anzeigen der Daten aus der Datenbank-->
            <?php
            // Counter erstellen
            $a = 0;
            // Größe des Arrays ermitteln
            $total = sizeof($data);
            // Tabellen Body erstellen
            echo '<tbody>';
            // Für jeden Datensatz wird eine neue Zeile erstellt
            while ($a < $total) {
                // Ausgabe der Daten:
                echo '<tr><td>' . $data[$a]['groese'] . '</td></tr>';
                // Counter erhöhen
                $a++;
            }
            echo '</tbody>';
            ?>
        </table>
    </div>
    <!-- Formular um eine Größe zu löschen -->
    <div>
        <form method="post">
            <label for="groese">zu löschende Größe:</label> 
            <select name="groese">
                <?php
                // neuer Counter
                $b = 0;
                // Abfrage aller Auswahlmöglichkeiten
                while ($b < $total) {
                    // Ausgabe der Möglichkeiten
                    echo '<option>' . $data[$b]['groese'] . '</option>';
                    // Erhöhung des Counters
                    $b++;
                }
                ?>
            </select><br>
            <!-- Bestätigungsbutton -->
            <input type="submit" name="loeschen" value="Löschen"><br>
        </form>
    </div>
    <!-- Formular um eine Größe hinzuzufügen -->
    <div>
        <form action="index.php?url=GroeseController" method="post">
            <!-- Eingabe der neuen Größe -->
            <label for="hinzugroese">hinzuzufügende Größe: </label><input name="hinzugroese" type="text"><br>
            <!-- Bestätigungsbutton -->
            <input type="submit" name="hinzufuegen" value="Hinzufügen"><br>
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