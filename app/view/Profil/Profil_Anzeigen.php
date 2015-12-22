<!-- --Sprint 3, Gruppe 4 Onlineshop, 
Verfasser: Hanim Yerlikaya, Datum: 24.11.2015
UserStory: Passwortzurücksetzung mit automatischen Email-Versand programmieren
Task: 200-1 (#10321) Passwort zurück setzen
Aufwand: 5 Stunden
Beschreibung: Der User kann ein einen neuen Passwort beantragen.   

Mysql-Connection benutzt von Kerstin Gräter  -->


<?php
$profil = $data;
?>

<main>
<h2>Profil</h2>
<table>
<!-- Eingügen vin Isset-->
<tr><td>Vorame:</td><td><?php print $profil->vorname; ?></td></tr>
<tr><td>Nachname:</td><td><?php print $profil->name; ?></td></tr>
<tr><td>Geschlecht:</td><td><?php print $profil->geschlecht; ?></td></tr>
<tr><td>Geburtstag:</td><td><?php print $profil->geburtstag; ?></td></tr>
<tr><td>Stra&szlig;e:</td><td><?php print $profil->strasse; ?></td></tr>
<tr><td>PLZ:</td><td><?php print $profil->plz; ?></td></tr>
<tr><td>Ort:</td><td><?php print $profil->ort; ?></td></tr>
</table>
<form method="post" action="index.php?url=Profilcontroller/bearbeiten">
<input type="text" name="id" value="<?php print $profil->id; ?>" hidden />
<button type="submit">Bearbeiten</button>
</form>
</main>
