 <!--
Sprint 5, Gruppe 4 Onlineshop, Verfasser: Renato Cabriolu, Datum: 10.01.2016 Version 1
UserStory: Als Kunde möchte ich ein Einheitliches Designe haben.
Task: 430-3  Lieferadresse designen
Aufwand: 1 Stunden
Beschreibung: Eingabeformulat gestaltet
 <!-- 
 
 Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 370-9 #10586
    User Story: Als Entwickler möchte ich, dass der Onlineshop auf dem Hochschulserver läuft.
    Task: Die hinzugefügte Lieferadresse dem eingeloggten Kunden zuordnen
    Zeile 25-31
    Aufwand: 2 Stunden
 -->

<!-- Ridvan Atacan, 3113837
    24.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-6 #10334
    User Story: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
    Task: Zusammenführen
    Aufwand: 5 Stunden
 -->
 <!-- Ridvan Atacan, 3113837
    10.11.2015 Group #4 Onlineshop
    Sprint 2, Task : 140-6 #10204
    User Story: Als Programmierer möchte ich meine Codes als Model–view–controller (MVC) haben
    Task: Eigenen Code an MVC anpassen
    Aufwand: 5 Stunden
 -->
 <!-- Formular um die eingelesenen Daten aus den Textfeldern mittels submit und action an den Controller zu übergeben -->
 <main>
     <!-- Anfang Ridvan Atacan 07.12.2015 Sprint 4-->
     <?php
     
    $best = $this->model("MeineBestellungen_Model");
    //Zugriff auf die SESSION ID von Christian Frindt
	$name = $best->Kundenname($_SESSION['logged']['id']);
    echo("Hey <strong>" .$name['Vorname']." " .$name['Nachname']."</strong>,<br>Falls Sie mehrere Lieferadressen haben, können Sie diese hier hinzufügen!");
     ?>
     <!-- Ende Ridvan Atacan 07.12.2015 Sprint 4-->
     <!-- Anfang Ridvan Atacan 24.11.2015 Sprint 3-->

     <form action = "index.php?url=LieferAdresse_Controller" method ='post'>
               


        <br>Vorname: 
        <input type="text" name ="name" placeholder ="Vorname" ><br>
            Nachname: 
            <input type="text" name ="nname" placeholder ="Nachname" ><br>
                Strasse:
                <input type="text" name ="strasse" placeholder ="Strasse"><br>
                    Postleitzahl: 
                    <input type="text" name ="plz" placeholder ="Postleitzahl"><br><br>
                        
                        

                    <input type="submit" name ="submit" value = "Hinzufügen">
                 </form>
        
	<!-- Ende Ridvan Atacan 24.11.2015 Sprint 3-->
        <!-- Sprint 5 Anfang--> 
        <form action ="index.php?url=Bestellungcontroller" method ="Post">
            <input type ="submit" name ="warenkrb" value ="Zum Warenkorb">
        </form>
 
                <!-- Start Renato Cabriolu Sprint 5-->
        <p><br/></p>
	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="panel panel-default">
  				<div class="panel-body">
    					<div class="page-header" style="margin-top:5px;">
    						<h3>Lieferadresse Hinzufügen</h3>
    					</div>
    					<form action="index.php?url=LieferAdresse_Controller/hinzufügen" method="post" class="form-horizontal" role="form">
  						<div class="form-group">
    							<label for="name" class="col-sm-2 control-label">Vorname</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                        <input type="text" class="form-control" id="name" placeholder="Vorname" name = "name" required="required">
      							</div>
    							</div>
  						</div>
                                            	<div class="form-group">
    							<label for="nname" class="col-sm-2 control-label">Nachname</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                        <input type="text" class="form-control" id="nname" placeholder="Nachname" name = "nname" required="required">
      							</div>
    							</div>
  						</div>
                          
            
                                            	<div class="form-group">
    							<label for="strasse" class="col-sm-2 control-label">Strasse</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                                                        <input type="text" class="form-control" id="strasse" placeholder="Straße" name = "strasse" required="required">
      							</div>
    							</div>
  						</div>
                                              	<div class="form-group">
    							<label for="plz" class="col-sm-2 control-label">Plz :</label>
    							<div class="col-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                                                        <input type="text" class="form-control" id="plz" placeholder="89073" name = "plz" required="required">
      							</div>
    							</div>
  						</div>
						<!--Sprint 4 Start Renato Cabriolu bestätigung anzeigen beim Registrieren-->
					
  						<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      							<button type="submit" name="submit" class="btn btn-primary">Hinzufügen</button>
    							<!--onclick="index.php?url=Registrieren_Controller/Hinzufuegen"
									<input type="submit" value="Registerieren">-->
									</div>
  						</div><!--Sprint 4 Ende Renato Cabriolu bestätigung anzeigen beim Registrieren-->
                                
					</form>
                                    <div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      							<button type="submit" method ="Post" name="submit" class="btn btn-primary">Hinzufügen</button>
    							<!--onclick="index.php?url=Registrieren_Controller/Hinzufuegen"
									<input type="submit" value="Registerieren">-->
									</div>
  						</div>
  				</div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
	</div>
        
        
        
   
        <form action ="index.php?url=Bestellungcontroller" method ="Post">
            <input type ="submit" name ="warenkrb" value ="Zum Warenkorb">
        </form>
      <!--  Renato Cabriolu Sprint 5 Ende-->