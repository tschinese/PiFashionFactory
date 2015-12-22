<!--Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
Task: 320-3 (#10505) Daten in einem View aufbereiten
Gesamtaufwand: 12 Stunden
Beschreibung: Hier wird die Menüleiste erstellt
-->

<main>
    <section>
        <div>
            <form action="index.php?url=Analysecontroller" method="post">
                <br><br>
                <input name="durchschnittspreis" type="submit" value="Durchschnittsbestellpreis">
                <input name="gesamtumsatz" type="submit" value="Gesamtumsatz">
                <input name="umsatzprodukt" type="submit" value="Umsatz pro Produkt">
                <input name="bestellungprodukt" type="submit" value="Bestellungen pro Produkt">
                <input name="rezensionprodukt" type="submit" value="Rezensionen pro Produkt">
                <input name="produktkategorie" type="submit" value="Produkte pro Kategorie">
                <input name="anzahlkunden" type="submit" value="Anzahl der Kunden">
                <input name="bestellungkunde" type="submit" value="Bestellungen pro Kunde">
                <input name="umsatzkunde" type="submit" value="Umsatz pro Kunde">
            </form>
        </div>