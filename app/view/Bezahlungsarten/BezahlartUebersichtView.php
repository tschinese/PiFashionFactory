<!-- 
//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 06.12.2015 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Zahlungsmethoden haben
//Task: (310-2) Paypal integrieren
//Aufwand: 8 Stunden
//Beschreibung: Diese View ermöglicht eine Bezahlung per Paypal
-->


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
        <link href="../public/css/StyleBezahlart.css" type="text/css" rel="stylesheet">
        <link href="../public/css/StyleKonten.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        
        <!-- Vorname und Nachname des Users -->
        <?php if (isset($_SESSION['logged']) && $_SESSION['logged']['flag'] == true) {
                    require_once("../app/controller/LoginController.php");
                    $user = new LoginController();
                    $userFull = $user->gebeUser(); 
        } ?>
        
        <h1>Wählen Sie eine Zahlungsweise aus</h1>
            <!--Gibt die entgültige Lieferadresse an-->
            <div id="lieferadresse">

            </div>
            <!--Gibt die Produkte an-->
            <div id="einkauf">

            </div>
            
            <!--Listet alle möglichen Bezahlarten auf -->
            
                
                    
                        
                        
                           <div id='paypal'>
						   <!-- Link zu paypal checkout-->
                           <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 

                            <!--übergabe der Emailadresse vom Shop an paypal-->
                            <input type="hidden" name="business" value="wif-shop@yahoo.com"/>

                             <!--Aufruf des PaypalWarenkorbs -->
                            <input type="hidden" name="cmd" value="_cart"/>
                            <input type="hidden" name="upload" value="1"/>
                            <?php
								//Instanziierung von WarenkorbController, sodass alle relevanten Daten für die Bestellung bereit stehen
                                require_once '../app/controller/WarenkorbController.php';
								
                                $getWaren = new WarenkorbController();
								
                                $warenArray = $getWaren->getArtikelBez();
                                $loop=0; 
								//Schleife durchläuft alle Waren des Warenkorbs
                                foreach ($_SESSION['warenkorb'] as $produkt){ 
                                    //Anzahl und ID des Produkts aus dem Warenkorb
                                    $produktAnzahl = $produkt["anzahl"];
									
                                    $produktID = $produkt["produktNummer"]; ?>
									
                            
                                    <!--Zuweisung der Werte aus der Datenbank für jedes Produkt an paypal warenkorb-->
                                    <input type="hidden" name="item_name_<?php echo $loop+1 ?>" value="<?php echo $warenArray[$loop]['Benennung'];?>"/>
                                    <input type="hidden" name="item_number" value="<?php echo $produktID; ?>"/>
                                    <input type="hidden" name="amount_<?php echo $loop+1 ?>" value="<?php echo $warenArray[$loop]['SalePreis'];?>"/>
                                    <input type="hidden" name="quantity_<?php echo $loop+1 ?>" value="<?php echo $produktAnzahl; ?>"/>
                                    <input type="hidden" name="currency_code" value="EUR"/>
                                    <?php $loop++;
                               } ?>

                            <!-- Hier wird auf Kerstins Bestellungabschließen verlinkt, sobald ihr File fertig ist-->

                            <input type="hidden" name="return" value="http://wfprj-wf5.informatik.hs-ulm.de/36/SprintReview/PiFashionFactory/public/index.php?url=BestellungAbschliesenCon"/>

                            <input type="hidden" name="cancel_return" value=""/>

                            <!-- Paypal Button  -->
                            <div id="payBtn">
                            <input type="image" name="submit" border="0" width="200" height="100" src="http://2slick.com/web/wp-content/themes/smartit/admin/extensions/timthumb.php?src=http%3A%2F%2F2slick.com%2Fweb%2Fwp-content%2Fuploads%2F2012%2F12%2Fpaypal_845x563.jpg&w=845" alt="PayPal – The safer, easier way to pay online"/>
                            </div>

                          </form>
                         </div>
            
            
                         <?php 
                         
                            require_once '../app/controller/KontoController.php';
                            $kn = new KontoController();
                            $kontos = $kn->wahl();
                            
                
                            if($kontos != null){ ?> 
                            <div id="rahmen">
                                <form action="index.php?url=BestellungAbschliesenCon" method="post">
                                    <h2>Vorhandene Kontos</h2>
                                    <fieldset>
                                      
                                      <?php 
                                        if($kontos[0][0]!= null){
                                            $ctr = 0;
                                            $length = sizeof($kontos[0]);
                                            //Ausgabe der Bankkontos
                                            while($ctr < $length){ ?> 

                                        <div id="kform"><div id="radioB"> <input type="radio" id="bk" name="Zahlmethode" value="<?php echo $kontos[0][$ctr]['kNummer'];?>"></div>
                                            <div id="labelK">
                                            <label for="bk"> Name:<?php echo $userFull['vorname']?>,<?php echo $userFull['nachname'];?></label><br>
                                            <label for="bk"> Kontotyp: <?php  echo $kontos[0][$ctr]['kontoTyp'];?></label><br>
                                            <label for="bk"> Kontonummer:<?php  echo $kontos[0][$ctr]['kNummer'];?></label><br>
                                            <label for="bk"> Bankleitzahl:<?php  echo $kontos[0][$ctr]['blz'];?></label><br>
                                            </div>
                                        </div>
                                        <?php $ctr++; }
                                        
                                         } 
                                         if($kontos[1][0]!= null){
                                            $ctr = 0;
                                            $length = sizeof($kontos[1]);
                                            //Ausgabe der Bankkontos
                                            while($ctr < $length){ ?> 
                                        
                                        <div id="kform1"><div id="radioB1">  <input type="radio" id="kr" name="Zahlmethode" value="<?php  echo $kontos[1][$ctr]['zifferKredit'];?>"></div>
                                                 <div id="labelK1">
                                                  <label for="kr"> Name:<?php echo $userFull['vorname']?>,<?php echo $userFull['nachname'];?></label><br>
                                                  <label for="kr"> Kontotyp:<?php  echo $kontos[1][$ctr]['kontoTyp']; ?></label><br>
                                                  <label for="kr"> Kartennummer: <?php  echo $kontos[1][$ctr]['zifferKredit'];?></label><br>
                                                  <label for="kr"> Kontotyp:<?php  echo $kontos[1][$ctr]['expireDate']; ?></label><br>
                                                 </div>
                                        </div>  
                                                  <?php $ctr++;
                                            } 
                                         } ?>
                                        <br><br><br>
                                      <input type="submit" name="auswahl" value="Abschicken">
                                      <br><br>
                                    </fieldset>
                                </form>
                                </div>
                            <?php }else{?>
                            <h3> oder registrieren Sie ein neues Konto! </h3>  
                             <a href="index.php?=KontoController/callView">Neues Konto anlegen</a>
            
                            <?php } ?>	
                            
                             		

            
        
    
    </body>
</html>

