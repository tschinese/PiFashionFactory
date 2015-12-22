<!--<!--Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Renato Cabriolu, Datum: 07.12.2015 
//UserStory: Als Programmierer möchte ich die Rezessionen und Login designen.
//Task: (350-3) Passwort vergessen designen 
//Aufwand: 10min Stunden
//Beschreibung:Es wurde das eingabe designe Überarbeitet 

 --Sprint 3, Gruppe 4 Onlineshop, 
Verfasser: Hanim Yerlikaya, Datum: 24.11.2015
UserStory: Passwortzurücksetzung mit automatischen Email-Versand programmieren
Task: 200-1 (#10321) Passwort zurück setzen
Aufwand: 5 Stunden
Beschreibung: Der User kann ein einen neuen Passwort beantragen.   

Mysql-Connection benutzt von Kerstin Gräter  -->



<main>
    <form method="post" action="index.php?url=ForgottenPassword/validate">
        <label>Email: </label><input type="text" name="email" />
        <button type="submit">Anfordern</button>
    </form>
	
		<!--Sprint 4 Start Renato Cabriolu designe erstellt-->
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="panel panel-default">
  				<div class="panel-body">
				<form action="index.php?url=ForgottenPassword/validate" method="post" class="form-inline" role="form">
					<div class="form-group">
					<label for="email">Email :</label>
					<input type="email" class="form-control" id="email" placeholder="Email" name = "email">
					</div>
					<button type="submit" class="btn btn-default">Anfordern</button>
				</form>
				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
	</div><!--Sprint 4 Ende Renato Cabriolu designe erstellt-->
</main

