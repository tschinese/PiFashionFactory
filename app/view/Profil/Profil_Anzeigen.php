<!--
Sprint 5, Gruppe 4 Onlineshop, Verfasser: Renato Cabriolu, Datum: 10.01.2016 Version 1
UserStory: Als Kunde möchte ich ein Einheitliches Designe haben.
Task: 430-´7  Meine Profil designen
Aufwand: 1.5 Stunden
Beschreibung: Eingabeformular überarbeiten


﻿<!-- --Sprint 3, Gruppe 4 Onlineshop, 
Verfasser: Hanim Yerlikaya, Datum: 24.11.2015
UserStory: Passwortzurücksetzung mit automatischen Email-Versand programmieren
Task: 200-1 (#10321) Passwort zurück setzen
Aufwand: 5 Stunden
Beschreibung: Der User kann ein einen neuen Passwort beantragen.   

Mysql-Connection benutzt von Kerstin Gräter  -->

<!-- Sprint 3 Hanim Yerlikaya Start -->
<?php
$profil = $data;
?>

<main><!--
<h2>Profil</h2>
<table>
<!-- Eingügen vin Isset
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
<!-- Sprint 3 Hanim Yerlikaya Ende -->
<!--Sprint 5 Renato Cabriolu Start -->
 <p><br/></p>
	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="panel panel-default">
  				<div class="panel-body">
    					<div class="page-header" style="margin-top:5px;">
    						<h3>Mein Profil</h3>
    					</div>
    					
  						<div class="form-group">
    							<label for="Vorname" class="col-sm-2 control-label">Vorname</label>
    							<div class="col-sm-10">
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->vorname; ?>" disabled>
    							</div>
  						</div>
                                                <div class="form-group">
    							<label for="Nachname" class="col-sm-2 control-label">Nachname</label>
    							<div class="col-sm-10">
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->name; ?>" disabled>
    							</div>
  						</div>
                                                 <div class="form-group">
    							<label for="Geschlecht" class="col-sm-2 control-label">Geschlecht</label>
    							<div class="col-sm-10">
                                                          
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->geschlecht; ?>" disabled>
    							</div>
  						</div>
                                                <div class="form-group">
    							<label for="Geburtstag" class="col-sm-2 control-label">Geburtstag</label>
    							<div class="col-sm-10">
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->geburtstag; ?>" disabled>
    							</div>
  						</div>
                                                <div class="form-group">
    							<label for="Strasse" class="col-sm-2 control-label">Strasse</label>
    							<div class="col-sm-10">
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->strasse; ?>" disabled>
    							</div>
  						</div>
                                                <div class="form-group">
    							<label for="PlZ" class="col-sm-2 control-label">Pls</label>
    							<div class="col-sm-10">
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->plz; ?>" disabled>
    							</div>
  						</div>
                                                <div class="form-group">
    							<label for="Ort" class="col-sm-2 control-label">Ort</label>
    							<div class="col-sm-10">
                                                            <input class="form-control" id="deaktiviertesFeld" type="text" placeholder="<?php print $profil->ort; ?>" disabled>
    							</div>
  						</div>
					
  						<div class="form-group">
                                                     <form method="post" action="index.php?url=Profilcontroller/bearbeiten">
    							<div class="col-sm-offset-2 col-sm-10">
                                                        <input type="text" name="id" value="<?php print $profil->id; ?>" hidden />
      							<button type="submit" name="id" class="btn btn-primary">Bearbeiten</button>
    							
									</div>
                                                        </form>

  						</div>
                                                
			
  				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
	</div>
</main>
<!-- Sprint 5 Renato Cabriolu Ende -->
