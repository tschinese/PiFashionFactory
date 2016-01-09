<!--//Sprint 4, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 08.12.2015
//UserStory: 340 Als Programmierer möchte ich Filterfunktionen hinzufügen und diese und die Suche dynamisch gestalten 
//Task: 340-1 dynamische Filterfunktionen hinzufügen
//Gesamtaufwand: 25 Stunden
//Aufwand File: 1 Stunden
//Beschreibung: Form erstellt und mehrfach überarbeitet-->

<!--Sprint 4, Gruppe 4 Onlineshop Datum: 05.12.2015
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
Task: 370-2 (#10577) Änderungen im Kategorien implementieren
Aufwand: 1 Stunde
Beschreibung: Die Ausgabe der Daten wird überarbeitet.-->

<!-- //Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 04.12.2015 Version 1.1
//UserStory:Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
//Task: angemeldeten Benutzer anzeigen sowie logout button implementieren
//Aufwand: 4 Stunden
//Beschreibung: Zeigt im programmierten Headerfile von Renato Cabriolu, welcher Benutzer eingeloggt ist und falls eingeloggt einen logout button
-->

<!--Sprint 4, Gruppe 4 Onlineshop
Verfasser: Renato Cabriolu, Matrikelnummer:
UserStory:
Task:
Zeitaufwand:
Beschreibung:
-->

<!--Sprint 3, Gruppe 4 Onlineshop
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
UserStory: 270 Als Kunde möchte ich ein in den wichtigesten Funktionen fertiges Ergebnis sehen
Task: 270-1 (#10329) Zusammenführen
Zeitaufwand: 0,5 Stunde
Beschreibung: Es werden die Links zu den Kategorien eingefügt. -->

<!--Sprint 3, Gruppe 4 Onlineshop
Verfasser: Renato Cabriolu, Matrikelnummer:
UserStory:
Task:
Zeitaufwand:
Beschreibung:
-->

<!--Sprint: 2
 * @author: Renat Cabriolu
 * Datum: 10.11.2015
 * User Story (Nr.: 140-7) Eigenen Code an MVC anpassen 
 * Zeit insgesamt: 3h
 * bemerkung : es gab einige probleme mit Bootstrape
-->


<!--Sprint: 1
 * @author: Renat Cabriolu
 * Datum: 25.10.2015
 * User Story (Nr.: 10) Einheitliches Design
 * Zeit insgesamt: 8h

-->

<!-- Sprint 1 Renato Cabriolu Start -->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Sprint 1 Start Renato Cabriolu-->
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
        <title>Fashion-Factory</title>
        <link href="../public/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/sty.css">
        <link rel="stylesheet" href="../public/css/chat.css">

        <script src="../public/js/jquery-1.6.1.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/bootstrap.min_1.js"></script>
        <script src="../public/js/init.js"></script>
        <script src="../public/js/chat-js.js"></script>
        <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
        <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.php?url=home" title="Zur startseite">
                            <img src="../public/Grafiken/Logo.png" width="121" height="51" alt="Logo">
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Navigation ein-/ausblenden</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <!-- Sprint 1 Renato Cabriolu Ende -->
                                <!-- Sprint 3 Marcel Riedl Start -->
                                <a href="index.php?url=Kategoriecontroller/2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herren <span class="caret"></span></a>
                                <!-- Sprint 2 Marcel Riedl Ende -->
                                <!-- Sprint 1 Renato Cabriolu Start -->
                                <ul class="dropdown-menu">
                                    <!-- Sprint 1 Renato Cabriolu Start -->
                                    <!-- Sprint 4 Marcel Riedl Start -->
                                    <?php
                                    $sql0 = 'select * from kategorie where Oberkategorie_OberkatID = 2';
                                    $cone = new Connect_Mysql();
                                    $con = $cone->verbinden();
                                    $stmt;
                                    $stmt = $con->prepare($sql0);
                                    $stmt->execute();
                                    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<li><a href="index.php?url=ProduktlisteController/' . $data['katID'] . '"> ' . $data['kategorie'] . ' </a></li>';
                                    }
                                    $con = null;
                                    $cone->schließen();
                                    $sql = null;
                                    ?>
                                    <!-- Sprint 4 Marcel Riedl Ende -->
                                    <!-- Sprint 1 Renato Cabriolu Start -->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <!-- Sprint 1 Renato Cabriolu Start -->
                                <!-- Sprint 3 Marcel Riedl Start -->
                                <a href="index.php?url=Kategoriecontroller/1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Damen <span class="caret"></span></a>
                                <!-- Sprint 3 Marcel Riedl Ende -->
                                <!-- Sprint 1 Renato Cabriolu Start -->
                                <ul class="dropdown-menu">
                                    <!-- Sprint 1 Renato Cabriolu Ende -->
                                    <!-- Sprint 4 Marcel Riedl Start -->
                                    <?php
                                    $sql = 'select * from kategorie where Oberkategorie_OberkatID = 1';
                                    $cone = new Connect_Mysql();
                                    $con = $cone->verbinden();
                                    $stmt;
                                    $stmt = $con->prepare($sql);
                                    $stmt->execute();
                                    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<li><a href="index.php?url=ProduktlisteController/' . $data['katID'] . '"> ' . $data['kategorie'] . ' </a></li>';
                                    }
                                    $con = null;
                                    $cone->schließen();
                                    $sql = null;
                                    ?>
                                    <!-- Sprint 4 Marcel Riedl Ende -->
                                    <!-- Sprint 1 Renato Cabriolu Start -->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <!-- Sprint 1 Renato Cabriolu Ende -->
                                <!-- Sprint 3 Marcel Riedl Start -->
                                <a href="index.php?url=Kategoriecontroller/3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kinder <span class="caret"></span></a>
                                <!-- Sprint 3 Marcel Riedl Ende -->
                                <!-- Sprint 1 Renato Cabriolu Start -->
                                <ul class="dropdown-menu">
                                    <!-- Sprint 1 Renato Cabriolu Ende -->
                                    <!-- Sprint 4 Marcel Riedl Start -->
                                    <?php
                                    $sql = 'select * from kategorie where Oberkategorie_OberkatID = 3';
                                    $cone = new Connect_Mysql();
                                    $con = $cone->verbinden();
                                    $stmt;
                                    $stmt = $con->prepare($sql);
                                    $stmt->execute();
                                    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<li><a href="index.php?url=ProduktlisteController/' . $data['katID'] . '"> ' . $data['kategorie'] . ' </a></li>';
                                    }
                                    $con = null;
                                    $cone->schließen();
                                    $sql = null;
                                    ?>
                                    <!-- Sprint 4 Marcel Riedl Ende -->
                                    <!-- Sprint 1 Renato Cabriolu Start -->
                                </ul>
                            </li>
                            <!-- Sprint 1 Renato Cabriolu Ende -->
                            <!-- Sprint 4 Marcel Riedl Start -->
                            <?php
                            $sql = 'select * from kategorie where Oberkategorie_OberkatID = 4';
                            $cone = new Connect_Mysql();
                            $con = $cone->verbinden();
                            $stmt;
                            $stmt = $con->prepare($sql);
                            $stmt->execute();
                            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo '<li><a href="index.php?url=ProduktlisteController/' . $data['katID'] . '"> ' . $data['kategorie'] . ' </a></li>';
                            }
                            $con = null;
                            $cone->schließen();
                            $sql = null;
                            ?>
                            <!-- Sprint 4 Marcel Riedl Ende -->
                            <!-- Sprint 1 Renato Cabriolu Start -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Sprint 1 Renato Cabriolu Start -->
                            <!-- Sprint 3 Christian Frindt Start -->
                            <li><a href="index.php?url=WarenkorbController/getArtikel">Warenkorb</a></li>
                            <!-- Sprint 3 Christian Frindt Ende -->
                            <!-- Sprint 3 Renato Cabriolu Start -->
                            <li><a href="index.php?url=Registrieren_Controller">Registrieren</a></li>
                            <!-- Sprint 3 Renato Cabriolu Ende -->
                            <!--Sprint 4 Christian Frindt: Angemeldeten User anzeigen Start-->
                            <?php
                            if (isset($_SESSION['logged']) && $_SESSION['logged']['flag'] == true) {
                                require_once("../app/controller/LoginController.php");
                                $user = new LoginController();
                                $userFull = $user->gebeUser();
                                ?>
                                <li><a href="index.php?url=Profielcontroller"><?php echo $userFull['vorname'] ?>,<?php echo $userFull['nachname'] ?></a></li> 
                                <li><a href="index.php?url=LoginController/logout">Logout</a></li>
                            <?php } else { ?>

                                <li><a href="index.php?url=LoginController/rufView">Login</a></li>
<?php } ?>
                            <!-- Ende Sprint 4 : Christian Frindt-->
                            <!-- Sprint 3 Verweis auf Suche_Controller von @Kevljanin,Denis Start-->
                            <form class="navbar-form navbar-right" action="index.php?url=SucheController" method="post">
                                <input type="text" class="form-control" name="Suche" placeholder="Suchen...">
                                <input type="submit" name ="suche" value="Suchen">
                            </form>
                            <!-- Sprint 3 Denis Kevljanin Ende -->
                            <!-- Sprint 1 Renato Cabriolu Start -->

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </header>
        <!-- Sprint 1 Renato Cabriolu Ende -->