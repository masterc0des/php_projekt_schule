<?php
    session_start();
?>
<html>
    <head>
        <title>
            Startseite
        </title>
        <link href="css/menu.css" type="text/css" rel="stylesheet"></link>
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
                        $user = $_SESSION['kundenName'];
                    }
                    else if (isset($_SESSION['loginAdmin'])) {
                        $user = "Admin";
                    }

                    echo ('<h1 class="h1">Hallo ' . $user . ',</h1>')
                ?>
            </div>
            <div class="nav-mid">
                <?php
                    if (isset($_SESSION['loginId']) || isset($_SESSION['loginAdmin'])) {
                        echo('
                        <form>
                            <ul class="ul">
                                <li class="li">
                                    <button class="button" type="submit" formaction="dbk_php.php"> DBK-Projekt </button>
                                </li>
                            </ul>
                        </form>
                        ');
                    }
                    else {
                        echo('<h3>Kein Zugriff! Logge dich <a href="http://localhost/index.php">Hier</a> ein</h3>');
                    }
                ?>
                
                <!--
                <form>
                    <ul class="ul">
                        <li class="li">
                            <button class="button" type="submit" formaction="dbk_php.php"> DBK-Projekt </button>
                        </li>
                        <br>
                        <li class="li">
                            <button class="button" type="submit" formaction="haltestellen.php"> Haltestellen </button>
                        </li>
                    </ul>
                </form>
                -->
            </div>
            <br>
            <br>
            <div class="nav-bottom">
                <a class="a" href="info.php"> Info für Besucher</a> 
            </div>   
        </div>
    </body>
</html>

