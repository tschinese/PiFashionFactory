<!--Sprint 5, Gruppe 4 Onlineshop Datum: 12.12.2015
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
User Story: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereich haben.
Task: 410-4 (#10604) "Produkt anlegen und löschen" überarbeiten
Zeitaufwand: 1 Stunde
Beschreibung: Es wird ein View erstellt, um auf die verschiedenen Funktionen zu verlinken.
-->

<!-- Sprint 5 Marcel Riedl Ende -->
<main>
    <br>
    <!-- Überschrift -->
    <div>
        <h1 class="page-header">Produkte bearbeiten</h1>
    </div>
    <!-- Links auf die Controller um die jeweiligen Funktionen auszuführen -->
    <div>
        <h3><a class="linkProdukt" href="index.php?url=Produktcontroller">Produkte anlegen</a></h3>
        
        <h3><a class="linkProdukt" href="index.php?url=ProduktloeschenController">Produkte löschen</a></h3>
    </div>
    <br>
    <!-- Formular um zurück zum Hauptmenu des Backends zukommen -->
    <div>
        <form action="index.php?url=backend" method="post">
            <input type="submit" value="Zurück">
        </form>
    </div>
</main>
<!-- Sprint 5 Marcel Riedl Ende -->