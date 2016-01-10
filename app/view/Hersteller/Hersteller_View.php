<!--
Sprint 5, Gruppe 4 Onlineshop Datum: 12.12.2015
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
User Story: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben.
Task: 410-3 (#10603) Hersteller hinzufügen und löschen
Zeitaufwand: 1 Stunde
Beschreibung: Hier wird der View für Hersteller erstellt. -->

<!-- Sprint 5 Marcel Riedl Start -->
<main>
    <br>
    <!-- Überschrift -->
    <div>
        <h1 class="page-header"> Hersteller bearbeiten </h1>
    </div>
    <!-- Formular um einen Hersteller löschen zu können -->
    <div>
        <form action="index.php?url=HerstellerController" method="post">
            <label for="hersteller">zu löschender Hersteller:&nbsp;</label>
            <!-- Auswahlfeld um zu löschenden Hersteller auszuwählen -->
            <select name="hersteller">
                <?php
                // neuer Counter
                $b = 0;
                // Anzahl der dazugehörigen Datenätze ermittlen
                $total = sizeof($data);
                // Ausgabe der bestehenden Hersteller
                while ($b < $total) {
                    // Ausgabe der Auswahlmöglichkeiten
                    echo '<option>' . $data[$b]['hersteller'] . '</option>';
                    // Counter erhöhen
                    $b++;
                }
                ?>
            </select>&nbsp;
            <!-- Bestätigungsbutton -->
            <input type="submit" name="loeschen" value="Löschen">
        </form>
    </div>
    <!-- Formular um einen Hersteller hinzuzufügen -->
    <div>
        <form action="index.php?url=HerstellerController" method="post">
            <!-- Textfeld um neuen Hersteller hinzuzufügen -->
            <label for="hinzuhersteller">hinzuzufügender Hersteller:&nbsp;</label> 
            <input name="hinzuhersteller" type="text">&nbsp;
            <!-- Bestätigungsbutton -->
            <input type="submit" name="hinzufuegen" value="Hinzufügen"><br>
        </form>
    </div>
    <div>
        <!-- Tabelle für die vorhandenen Daten aus der Datenbank erstellen -->
        <table class="table table-striped">
            <!-- Tabellen Kopf erstellen -->
            <thead>
            <th>vorhandene Hersteller</th>
            </thead>
            <!-- Tabellen Body erstellen -->
            <tbody>
                <!-- Anzeigen der Daten aus der Datenbank -->
                <?php
                // Counter erstellen
                $a = 0;
                // Ausgabe der Datensätze
                while ($a < $total) {
                    // Daten aus der Datenbank
                    echo '<tr><td>' . $data[$a]['hersteller'] . '</td></tr>';
                    //Counter erhöhen
                    $a++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Formular um zurück zum Hauptmenu des Backends zukommen -->
    <div>
        <form action="index.php?url=backend" method="post">
            <input type="submit" value="Zurück">
        </form>
    </div>
</main>

<!-- Sprint 5 Marcel Riedl Ende -->