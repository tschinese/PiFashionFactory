
<!-- --Sprint 3, Gruppe 4 Onlineshop, 
Verfasser: Hanim Yerlikaya, Datum: 24.11.2015
UserStory: Passwortzurücksetzung mit automatischen Email-Versand programmieren
Task: 200-1 (#10321) Passwort zurück setzen
Aufwand: 5 Stunden
Beschreibung: Der User kann ein einen neuen Passwort beantragen. 
Bearbeitung und ergänzung zum 3. Sprint  

Mysql-Connection benutzt von Kerstin Gräter  -->

<?php
$profil = $data;
?>

<main>
<h2>Profil</h2>
<!-- Link angepasst und Isset eingefügt-->
<form action="index.php?url=Profilcontroller/aktualisieren" method="post">
    <input type="text" name="id" value="<?php print $profil->id; ?>" hidden />
    <table>
        <tr><td>Vorame:</td><td><input type="text" name="vorname" value="<?php print $profil->vorname; ?>" placeholder="Vorname" /></td></tr>
        <tr><td>Nachname:</td><td><input type="text" name="nachname" value="<?php print $profil->name; ?>" placeholder="Nachname" /></td></tr>
        <tr><td>Geschlecht:</td><td><input type="text" name="geschlecht" value="<?php print $profil->geschlecht; ?>" placeholder="Geschlecht" /></td></tr>
        <tr><td>Geburtstag:</td><td><input type="text" name="geburtstag" value="<?php print $profil->geburtstag; ?>" placeholder="Geburtstag" /></td></tr>
        <tr><td>Stra&szlig;e:</td><td><input type="text" name="strasse" value="<?php print $profil->strasse; ?>" placeholder="Stra&szlig;e" /></td></tr>
        <tr><td>PLZ:</td><td><input type="text" name="plz" value="<?php print $profil->plz; ?>" placeholder="PLZ" /></td></tr>
        <tr><td>Ort:</td><td><input type="text" name="ort" value="<?php print $profil->ort; ?>" placeholder="Ort" /></td></tr>
        <tr><td></td><td><button type="submit">Aktualisieren</button></td></tr>
    </table>
</form>

<br><br>

<form action="index.php?url=Profilcontroller/loeschen" method="post">
    <input type="text" name="id" value="<?php print $profil->id; ?>" hidden />
    <button type="submit" name="han" value="loeschen">Account loeschen</button>
</form>
</main>