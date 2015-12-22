
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
        <link href="../../public/css/StyleBezahlartÜbersicht.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        
        <h1>Wählen Sie eine Zahlungsweise aus</h1>
            <!--Gibt die entgültige Lieferadresse an-->
            <div id="lieferadresse">

            </div>
            <!--Gibt die Produkte an-->
            <div id="einkauf">

            </div>
            
            <!--Listet alle möglichen Bezahlarten auf -->
            <div id="zahlungen">
                
                    
                        
                        <div class="arten">
                            
                          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >

                            <!--Identify your business so that you can collect the payments.-->
                            <input type=”hidden” name=”business” value=”buisnesstest@myshop.com”/>

                            <!-- Specify a Buy Now button. -->
                            <input type=”hidden” name="cmd" value="_xclick"/>
                            
                            <?php
                                require_once '../app/controller/WarenkrobController.php';
                                $getWaren = new WarenkorbController();
                                $warenArray = $getWaren->getArtikel();
                                $loop=0; 
                                foreach ($_SESSION['warenkorb'] as $produkt){ 
                                    
                                    $produktAnzahl = $produkt["anzahl"]; 
                                    $produktID = $produkt["produktNummer"]; ?>
                            
                                    <!--Specify details about the item that buyers will purchase. -->
                                    <input type="hidden" name="item_name<?php echo $loop;?>" value="<?php echo $warenArray[$loop]['Benennung'];?>"/>
                                    <input type="hidden" name="item_number" value="<?php echo $produktID; ?>"/>
                                    <input type="hidden" name="amount" value="<?php echo $warenArray[$loop]['SalesPreis']; ?>"/>
                                    <input type="hidden" name="quantity" value="<?php echo $produktAnzahl; ?>"/>
                                    <input type="hidden" name="currency_code" value="EUR"/>
                                    <?php $loop++;
                               }
                            ?>

                            <!-- Specify the Pages for Successful payment & failed Payment -->

                            <input type="hidden" name="return" value=""/>

                            <input type="hidden" name="cancel_return" value=""/>

                            <!-- Display the payment button. -->
                            <input type="image" name="submit" border="0" src="paypal_button.png" alt="PayPal – The safer, easier way to pay online"/>
                            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"/>

                          </form>
                            
                        </div>
                        <div class="arten">
                            
                            <input type="radio" name="artens" value="sofortueberweisung"><br> Sofortüberweisung
                            <br>
                            
                        </div>
                        <div class="arten">
                            
                            <input type="radio" name="artenk" value="kreditkarte"><br> Kreditkarte
                            <br>
                            
                        </div>
                        <div class="arten">
                            
                            <input type="radio" name="artenn" value="nachname"><br> Nachname
                            <br>
                            
                        </div>
                   

            </div>
        
    
    </body>
</html>

