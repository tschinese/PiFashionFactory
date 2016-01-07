<!-- Sprint 5, Gruppe 4 Onlineshop, Datum: 03.01.2016, Version 5
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
Userstory: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben
Task: 410-4(#10609) "Produkt anlegen und löschen" überarbeiten
Zeitaufwand: 1 Stunde
Beschreibung: Überarbeitung des Formulars zum Anlegen -->

<!--  //Sprint 4, Gruppe 4 Onlineshop, Version 4
//Verfasser: Hanim Yerlikaya, Datum: 08.12.2015
//UserStory: 300 Als Kunde möchte ich eine Bildergalerie haben für die Produkte
//Task: 300-3 (#10509) Zuordnung zum richtigen Produkt erstellen
//Aufwand: 4 Stunden
//Zeile: 52 update
Zeile: 59 update
//Beschreibung: Der Admin kann die entsprechenden Bilder uploaden. -->

<!--Sprint 3, Gruppe 4 Onlineshop, Datum: 23.11.2015 Version 2
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 270 Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
Task: 270-1 (#10329) Zusammenführen
Aufwand: 1 Stunden
Beschreibung: Es wird der View zum Anlegen eines neuen Produkts erstellt.     
-->

<!--Sprint 2, Gruppe 4 Onlineshop, Datum: 02.11.2015 Version 1
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 140 Als Programmierer möchte ich meinen Code als Model-View-Controller (MVC) haben.
Task: 140-2 (#10190) Eigenen Code an MVC anpassen
Aufwand: 0,5 Stunden
Beschreibung: Es wird ein View des Produkts erstellt.     
-->

<!--Sprint 1, Gruppe 4 Onlineshop
Verfasser: Marcel Riedl Matrikelnummer: 3113845
UserStory: 20 Als Kunde erwarte ich eine schnelle und einfache, sowie eine reibungslose Bestellabwicklung
Task: 20-2 (#10003) Produkte anlegen
-->

<!-- Sprint 3 Marcel Riedl Start -->
<main>        
    <br>
    <h1>Produkt anlegen</h1>
    <!-- Sprint 2 Marcel Riedl ALT
            <p>Anmerkungen: <br>
                1. Um einen Artikel löschen oder aktualisieren zu können, benötigen Sie die dazugehörige Produktnummer.<br>
                2. Bei der Aktualisierung dürfen nur die Felder ausgefüllt sein, die zu ändern sind.<br>
            </p>
    
            <a id='handle' href="../controller/produktcontroller.php">Produkte anzeigen</a><br /><br />
    Sprint 2 Marcel Riedl Ende-->
    <div>
        <!--Formular, um Produkte Verwalten zu können-->
        <!-- Sprint 3 Marcel Riedl Ende -->
        <!-- Sprint 4 Hanim Yerlikaya Start -->
        <form action="index.php?url=produktcontroller" method="POST" enctype="multipart/form-data">
            <!-- Sprint 4 Hanim Yerlikaya Ende -->
            <!-- Sprint 5 Marcel Riedl Start -->
            <label for="name">Name:</label> <input type="text" name="name"><br>
            <label for="hersteller">Hersteller:</label> 
            <select name="hersteller">
                <?php
                // Counter erstellen
                $a = 0;
                // Größe des Arrays ermitteln
                $total = sizeof($data);
                // Ausgabe der verschiedenen Möglichkeiten
                while ($a < $total) {
                    echo '<option>' . $data['hersteller'][$a]['hesteller'] . '</option>';
                    // Counter erhöhen
                    $a++;
                }
                ?>
            </select><br>
            <label for="farbe">Farbe:</label> 
            <select name="farbe">
                <?php
                // Counter erstellen
                $b = 0;
                // Ausgabe der verschiedenen Möglichkeiten
                while ($b < $total) {
                    echo '<option>' . $data['farbe'][$b]['farbe'] . '</option>';
                    // Counter erhöhen
                    $b++;
                }
                ?>
            </select><br>
            <label for="groese">Größe:</label> 
            <select name="groese">
                <?php
                // Counter erstellen
                $c = 0;
                // Ausgabe der verschiedenen Möglichkeiten
                while ($c < $total) {
                    echo '<option>' . $data['groese'][$c]['groese'] . '</option>';
                    // Counter erhöhen
                    $c++;
                }
                ?>
            </select><br>
            <label for="preis">Preis:</label> <input type="text" name="preis"><br>
            <label for="kategorie">Kategorie:</label> 
            <select name="kategorie">
                <?php
                // Counter erstellen
                $d = 0;
                // Ausgabe der verschiedenen Möglichkeiten
                while ($d < $total) {
                    // Überprüfung, welche Oberkategorie Betroffen ist
                    if ($data['kategorie'][$d]['Oberkategorie_OkerkatID'] = 1) {
                        echo '<option> Damen ' . $data['kategorie'][$d]['kategorie'] . '</option>';
                    } else if ($data['kategorie'][$d]['Oberkategorie_OkerkatID'] = 2) {
                        echo '<option> Herren ' . $data['kategorie'][$d]['kategorie'] . '</option>';
                    } else if ($data['kategorie'][$d]['Oberkategorie_OkerkatID'] = 3) {
                        echo '<option> Kinder ' . $data['kategorie'][$d]['kategorie'] . '</option>';
                    } else if ($data['kategorie'][$d]['Oberkategorie_OkerkatID'] = 4) {
                        echo '<option>' . $data['kategorie'][$d]['kategorie'] . '</option>';
                    }
                    // Counter erhöhen
                    $d++;
                }
                ?>
            </select><br>

            <!-- Sprint 5 Marcel Riedl Ende -->
            <!-- Sprint 3 Marcel Riedl Start ALT
            <font size="+1">Name:</font> <input type="text" name="name" placeholder="Pflichtfeld"> <br>
            <font size="+1">Hersteller:</font> <input type="text" name="hersteller" placeholder="Pflichtfeld"> <br>
            <font size="+1">Farbe:</font> <input type="text" name="farbe" placeholder="Pflichtfeld"><br>
            <font size="+1">Größe:</font> <input type="text" name="groesse" placeholder="Pflichtfeld"><br>
            <font size="+1">Preis:</font> <input type="text" name="preis" placeholder="Pflichtfeld"> <br>
            <font size="+1">Kategorie:</font> <input type="number" name="kategorie" placeholder="Pflichtfeld"><br><br>
            Sprint 3 Marcel Riedl Ende -->
            <!-- Sprint 4 Hanim Yerlikaya Start -->
            <input type="file" name="images[]" multiple/>
            <!-- Sprint 4 Hanim Yerlikaya Ende -->
            <!-- Sprint 3 Marcel Riedl Start -->
            <input type="submit" name="anlegen" value="Anlegen">
        </form>
    </div>
</main>
<!-- Sprint 3 Marcel Riedl Ende -->