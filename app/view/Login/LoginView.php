<!DOCTYPE html>



<!--Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Renato Cabriolu, Datum: 07.12.2015 Version 1.2
//UserStory: Als Programmierer möchte ich die Rezessionen und Login designen.
//Task: (350-1) Login Design erstellen
//Aufwand: 20min Stunden
//Beschreibung:Es wurde das eingabe designe Überarbeitet -->




<!--Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 19.11.2015 Version 1.1
//UserStory: Als Programmierer möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: Zusammenführen
//Aufwand: 15min Stunden
//Beschreibung: Es wird das >Formular zum login erstellt...getrennt von model -->
        <!--Sprint 3 Start Christian Frindt -->
	<!--	<div id=s>
        <form action="index.php?url=LoginController/login" method="post">
            <div class=space><label>Email</label></div><div class=space2><input type="text" name="mail" size="24" maxlength="50"/></div>
            <div class=space><label>Passwort</label></div><div class=space2><input type="password" name="pw" size="24" maxlength="50"/></div><br/>
			<div id=short2></label><input type="submit" name="submit" value="Bestätigen"/></br></div>
			<!--Hanims Part 
            <div id=short><label><a href="index.php?url=ForgottenPassword/">Passwort vergessen?</a></div>
			<!--Hanims Part Ende 
		</form>
		</div>-->
		<!--Ende Sprint 3 Christian Frindt -->	
		<!-- Sprint 4 Renato Cabriolu neues designe der eingabemaske-->	
	<main>
	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="panel panel-default">
  				<div class="panel-body">
    					<div class="page-header" style="margin-top:5px;">
					<form action="index.php?url=LoginController/login" method="post" class="form-horizontal" role="form">
					<div class="form-group">
						<label for="mail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
						<input type="email" class="form-control" id="mail" placeholder="Email" name = "mail">
						</div>
					</div>
					  <div class="form-group">
						<label for="pw" class="col-sm-2 control-label">Passwort</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" id="pw" placeholder="Passwort" name="pw">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <!--Hanims Part -->
								<div id=short><label><a href="index.php?url=ForgottenPassword/">Passwort vergessen?</a></div>
								<!--Hanims Part Ende -->
						</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Anmelden</button>
							</div>
						  </div>
    				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
 
</form>
</main>
<!-- Sprint 4 Renato Cabriolu : designe Ende-->
     
  
