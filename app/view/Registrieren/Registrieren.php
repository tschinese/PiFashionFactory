<!-- Renato Cabriolu, 3112468
    23.11.2015 Group #4 Onlineshop
    Sprint 4, Task : (370-1)
    User Story: Als Entwickler möchte ich, dass der Onlineshop auf dem Hochschulserver läuft.
    Task: Verbesserungen aus Sprint 3 Implementieren.
    Aufwand: 0.20 Stunden
 -->
<!-- Renato Cabriolu, 3112468
    23.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-1
    User Story: Als Kunde möchte ich in den Wichtigsten Funktionen ein Fertiges Ergebnis sehen. 
    Task: Eigener Code anpassen
    Aufwand: 4 Stunden
 -->

 <!--Sprint 4: Start Renato Cabriou-->
<main>

    <p><br/></p>
	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="panel panel-default">
  				<div class="panel-body">
    					<div class="page-header" style="margin-top:5px;">
    						<h3>Zum Registrieren, bitte das Formular ausfuellen</h3>
    					</div>
    					<form action="index.php?url=Registrieren_Controller/Hinzufuegen" method="post" class="form-horizontal" role="form">
  						<div class="form-group">
    							<label for="Email" class="col-sm-2 control-label">Email</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon">@</span>
      								<input type="email" class="form-control" id="Email" placeholder="Email" name = "Email"  required="required">
							<!--  <td><input class="tf" type = "text" name = "Email" required="required"  maxlength="45" value="max.mustermann@hotmail.de" /></td>-->

      							</div>
    							</div>
  						</div>
                                            <div class="form-group">
    							<label for="Passwort" class="col-sm-2 control-label">Password</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
      								<input type="password" class="form-control" id="Passwort" placeholder="Password" name = "Passwort" required="required">
      							</div>
    							</div>
  						</div>
  						<div class="form-group">
    							<label for="Vorname" class="col-sm-2 control-label">Vorname</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                        <input type="text" class="form-control" id="Vorname" placeholder="Vorname" name = "Vorname" required="required">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="Nachname" class="col-sm-2 control-label">Nachname</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                        <input type="text" class="form-control" id="Nachname" placeholder="Nachname" name = "Nachname" required="required">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="Geschlecht" class="col-sm-2 control-label">Geschlecht</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                        <input type="text" class="form-control" id="Heschlecht" placeholder="Geschlecht" name = "Geschlecht" required="required">
      							</div>
    							</div>
  						</div>
  						<div class="form-group">
    							<label for="Geburtsdatum" class="col-sm-2 control-label">Geburtsdatum</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-gift"></span></span>
                                                                        <input type="date" class="form-control" id="Geburtsdatum" placeholder="JJJJ-MM-TT" name = "Geburtsdatum" required="required">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="Plz" class="col-sm-2 control-label">Plz</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                                                        <input type="text" class="form-control" id="Plz" placeholder="89073" name = "Plz" required="required">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="Strasse" class="col-sm-2 control-label">Strasse</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                                                        <input type="text" class="form-control" id="Strasse" placeholder="Straße" name = "Strasse" required="required">
      							</div>
    							</div>
  						</div>
                                            
						<!--Sprint 4 Start Renato Cabriolu bestätigung anzeigen beim Registrieren-->
						
                                                
                                             
  						<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      							<button type="submit" name="action" class="btn btn-primary">Registrieren</button>
    							<!--onclick="index.php?url=Registrieren_Controller/Hinzufuegen"
									<input type="submit" value="Registerieren">-->
									</div>
  						</div><!--Sprint 4 Ende Renato Cabriolu bestätigung anzeigen beim Registrieren-->
					</form>
  				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
	</div>
     <!--Sprint 4: Ende Renato Cabriou-->



     
     
 <!-- Sprint 3 Start Renato Cabriolu
     <!--Das ist das aktuelle Registrierenformular das per post die eingabefelder an den RegistrierenController senden und die methode Hinzufügen ausführt -->
	     
        <!-- <p> <h3>Zum Registrieren, bitte das Formular ausfuellen. </h3> </p>
		<!--mit post methode, die eingegebene Werte weiterleiten
                <form action="index.php?url=Registrieren_Controller/Hinzufuegen" method="post" >
                        <!-- Eingabefälder für das Formular
			  <table border="0" cellpadding="0" cellspacing="4">
                                <tr>
                                        <td align="right">Email:</td>
                                        <td><input class="tf" type = "text" name = "Email" required="required"  maxlength="45" value="max.mustermann@hotmail.de" /></td>
                                </tr>
				<tr>
					<td align="right">Passwort:</td>
                                        <td><input class="tf" type="password" name="Passwort" required="required"  maxlength="45" value="$Passwort"/><br></td>
				</tr>
				
				<tr>	
					<td align="right">Vorname:</td>
                                        <td><input class="tf" type="text" name="Vorname"  required="required" maxlength="45" value="Max"/><br></td>
				</tr>	
				
				<tr>
					<td align="right">Nachname</td>
                                        <td><input class="tf" type="text" name="Nachname"  required="required" maxlength="45" value="Mustermann"/><br></td>
				</tr>			
		
				<tr>
					<td align="right">Geschlecht</td>
                                        <td><input class="tf" type="radio" name="Geschlecht" value="Maennlich" checked="checked"/> Männlich<br></td>
                                        <td><input class="tf" type="radio" name="Geschlecht" value="Weiblich"/> Weiblich<br></td>
                                </tr>   
				
				<tr>	
					<td align="right">Geburtsdatum:</p</td>
                                        <td><input class="tf" type="date" name="Geburtsdatum" required="required" maxlength="45" value="1990-12-21"/><br></td>
				</tr>
                            
                                <tr>
					<td align="right">Plz</td>
                                        <td><input class="tf" type="text" name="Plz"  required="required" maxlength="45" value="89073"/><br></td>
				</tr>	
                                
                                <tr>
					<td align="right">Strasse</td>
                                        <td><input class="tf" type="text" name="Strasse"  required="required" maxlength="45" value="Pritwitzstrasse"/><br></td>
				</tr>	
    		
			</table>
			<p>
			<input type="submit" value="Registerieren">
			</p>
	</form>-->
      <!--Sprint 3 Ende Renato Cabriolu       --> 
</main>
