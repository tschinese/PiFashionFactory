<!--
Sprint 5, Gruppe 4 Onlineshop, Verfasser: Renato Cabriolu, Datum: 10.01.2016 Version 1
UserStory: Als Kunde möchte ich ein Einheitliches Designe haben.
Task: 430-´7  Meine Profil designen
Aufwand: 2 Stunden
Beschreibung: Eingabeformular überarbeiten
 
 
<!-- --Sprint 3, Gruppe 4 Onlineshop, 
Verfasser: Hanim Yerlikaya, Datum: 24.11.2015
UserStory: Passwortzurücksetzung mit automatischen Email-Versand programmieren
Task: 200-1 (#10321) Passwort zurück setzen
Aufwand: 5 Stunden
Beschreibung: Der User kann ein einen neuen Passwort beantragen. 
Bearbeitung und ergänzung zum 3. Sprint  

Mysql-Connection benutzt von Kerstin Gräter  -->

<!-- Sprint 3 Hanim Yerlikaya Start -->
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
</form
<!-- Sprint 3 Hanim Yerlikaya Ende -->

<!-- Sprint 5 Renato Cabriolu Start -->
 <p><br/></p>
	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="panel panel-default">
  				<div class="panel-body">
    					<div class="page-header" style="margin-top:5px;">
    						<h3>Profil bearbeiten</h3>
    					</div>
    					<form action="index.php?url=Profilcontroller/aktualisieren" method="post">
                                            <input type="text" name="id" value="<?php print $profil->id; ?>" hidden />
  						<div class="form-group">
    							<label for="vorname" class="col-sm-2 control-label">Vorname</label>
    							<div class="col-sm-10">
    								<div class="input-group">
                                                                    <span class="input-group-addon"></span>
      								<input type="Text" class="form-control" id="vorname" value="<?php print $profil->vorname; ?>" placeholder="Vorname" name = "Vorname">
							

      							</div>
    							</div>
  						</div>
        
                                            	<div class="form-group">
    							<label for="nachname" class="col-sm-2 control-label">Nachname</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"></span>
                                                                        <input type="text" class="form-control" id="nachname" value="<?php print $profil->name; ?>" placeholder="Nachname" name = "nachname">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="geschlecht" class="col-sm-2 control-label">Geschlecht</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"></span>
                                                                        <input type="text" class="form-control" id="geschlecht" value="<?php print $profil->geschlecht; ?>" placeholder="Geschlecht" name = "geschlecht">
      							</div>
    							</div>
  						</div>
  						<div class="form-group">
    							<label for="geburtsdatum" class="col-sm-2 control-label">Geburtsdatum</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"></span>
                                                                        <input type="date" class="form-control" id="geburtsdatum" value="<?php print $profil->geburtstag; ?>" placeholder="JJJJ-MM-TT" name = "geburtsdatum">
      							</div>
    							</div>
  						</div>
                                                    	<div class="form-group">
    							<label for="strasse" class="col-sm-2 control-label">Strasse</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"></span>
                                                                        <input type="text" class="form-control" id="strasse" value="<?php print $profil->strasse; ?>" placeholder="Straße" name = "strasse">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="plz" class="col-sm-2 control-label">Plz</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"></span>
                                                                        <input type="text" class="form-control" id="plz" value="<?php print $profil->plz; ?>" placeholder="89073" name = "plz">
      							</div>
    							</div>
  						</div>
                                        
						<!--Sprint 4 Start Renato Cabriolu bestätigung anzeigen beim Registrieren-->
						<script>
							function display_alert()
							  {
							   alert("Profil wurde Bearbeitet!");
							  }
						</script>
  						<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      							<button type="submit" onclick="display_alert()" name="action" class="btn btn-primary">Bearbeiten</button>
    							
									</div>
  						</div>
					</form>
  				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
	</div>
</main>
<!-- Sprint 5 Renato Cabriolu Ende -->