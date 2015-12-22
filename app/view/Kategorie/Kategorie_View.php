<!--Sprint 3, Gruppe 4 Onlineshop 
Verfasser: Marcel Riedl, Datum: 14.11.2015 Version 1
UserStory: #90 Als Kunde möchte ich eine einfache Navigation in Kategorien, so dass ich schnell mein Wunschprodukt finden kann.
Task: #90-1 (10315) Kategorien auswählen und programmieren
Aufwand: 2 Stunden
Beschreibung: Es wird der View für die Kategorien erstellt. -->

<main>
    <!-- Überschrift -->
    <h2>Hier sehen Sie alle Kategorien</h2>

    <?php
    // Ermittelung der Anzahl der Datensätze
    $total = sizeof($data);
    // Counter erstellen
    $a = 0;

    // Schreiben der Kategoruen mit Link
    while ($a < $total) {
        // Link zu den Kategorien erstellen
        echo '<div><a href="index.php?url=ProduktlisteController/' . $data[$a]['KatID']
        . '">' . $data[$a]['Kategorie'] . '</a></div><br>';
        // Counter erhöhen
        $a++;
    }
    ?>
</main>