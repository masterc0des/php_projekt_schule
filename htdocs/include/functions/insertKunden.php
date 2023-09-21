<?php
    session_start();
?>
<html>
    <head>
        <title>
            DBK-PHP-Projekt
        </title>
        <link href="../../css/menu.css" type="text/css" rel="stylesheet"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="nav">
            <div class="nav-top">
            <?php
                if (isset($_SESSION["loginAdmin"])) {
                    echo('
                        <form method="post">
                        <!-- 
                        Die maximale Länge vom Namen wird durch
                        maxlength auf 50 gesetzt, da die Tabelle tblKunden
                        mit der Spalte kundenNamen varchar(50) angelegt worden ist.
                        -->
                        <h3>Kundenname:</h3>
                        <input type="text" name="kundenName" maxlength="50">
                        <h3>Passwort:</h3>
                        <input type="passwort" name="passwort" maxlength="50">
                        <button type="submit" formaction="db_insertKunde.php">Kunde anlegen</button>
                    </form>
                    ');
                }
                else {
                    echo('<h3>Kein Zugriff! Logge dich <a href="http://localhost/index.php">Hier</a> ein</h3>');
                }
            ?>
               
            </div>
            <br>
            <div class="nav-bottom">
                <a class="a" href="/dbk_php.php">Zurück zum Menü</a> 
            </div>  
        </div>
    </body>
</html>

