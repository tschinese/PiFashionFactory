<!-- Sprint 5, Gruppe 4 Onlineshop, Datum: 03.01.2015
Verfasser: Marcel Riedl, Matrikelnummer: 3113845
Userstory: 430 Als Programmierer möchte ich verschiedenen Bereiche neu designen.
Task: 430-1 (#10604) Backend-Bereich designen
Zeitaufwand: 0,25 Minuten
Beschreibung: Button "Shop" hinzugefügt, um als Admin nach Anmeldung in den Shop zurück zu kommen
-->

<!--Sprint: 2
 * @author: Renat Cabriolu
 * Datum: 25.10.2015
 * User Story (Nr.: 150)  Backend Bereich (Design) 
 * Zeit insgesamt: 5h
 * Bemerkung : es gab probleme mit Bootstrape und der zerlegung in die verschiedneen View Abteilungen 

*/

<!-- Sprint 2 Renato Cabriolu Start 

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
<title>Backend</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/Backend_Neu.css">

<!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
<!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                        <span class="sr-only">Navigation ein-/ausblenden</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?url=backend">Dashboard</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Einstellungen</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Hilfe</a></li>
                        <!-- Sprint 2 Renato Cabriolu Ende -->
                        <!-- Sprint 5 Marcel Riedl Start -->
                        <li><a href="index.php?url=home">Shop</a></li>
                        <!-- Sprint 5 Marcel Riedl Ende -->
                        <!-- Sprint 2 Renato Cabriolu Start -->
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Suchen...">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- Sprint 2 Renato Cabriolu Ende -->