<?php
    session_start();
?>
<html>
    <head>
        <title>
            DBK-PHP-Projekt
        </title>
        <link href="css/dbk_php.css" type="text/css" rel="stylesheet"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="nav">
            <div class="nav-top">
                <?php
                    $user = "";
                    if (isset($_SESSION['kundenName'])) {
                        $user = 'Kunden';
                    }
                    else if (isset($_SESSION['loginAdmin'])) {
                        $user = "Admin";
                    }

                    echo('<h1 class="h1">PL/SQL-PHP-Projekt ('.$user.'-Sicht)'.'</h1>')
                ?>
            </div>
            <div class="nav-mid">
                <?php
                    if (isset($_SESSION['loginAdmin'])) {
                        echo('
                        <form>
                            <ul class="ul">
                                <li><button class="button" type="submit" formaction="/include/functions/insertKunden.php"> Kunden anlegen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/insertAuftraege.php"> Aufträge anlegen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/anzeigeKunden.php"> Kunden anzeigen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/anzeigeAuftraege.php"> Aufträge anzeigen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/anzeigeKundenAuftraege.php"> Kunden mit Aufträge anzeigen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/logout.php"> Logout </button></li>
                            </ul>
                        </form>
                        ');
                    }
                    else if (isset($_SESSION['loginId'])) {
                        echo('
                        <form>
                            <ul class="ul">
                                <li><button class="button" type="submit" formaction="/include/functions/anzeigeKunden.php"> Kunden anzeigen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/anzeigeAuftraege.php"> Aufträge anzeigen </button></li>
                                <li><button class="button" type="submit" formaction="/include/functions/logout.php"> Logout </button></li>
                            </ul>
                        </form>
                        ');
                    }
                    else {
                        echo('<h3>Kein Zugriff! Logge dich <a href="http://localhost/index.php">Hier</a> ein</h3>');
                    }
                ?>
            <div class="nav-end">
                <a class="a" href="/"> Startseite</a>
                <br>
                <br>
                <a class="a" href="info.php"> Info für Besucher</a>  
            </div>
        </div>
    </body>
</html>

