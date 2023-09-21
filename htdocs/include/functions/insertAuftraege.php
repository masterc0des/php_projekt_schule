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
                        Die maximale Länge vom Auftragsnamen wird durch
                        maxlength auf 2000 gesetzt, da die Tabelle tblAuftraege
                        mit der Spalte Auftragsbeschreibung varchar(8192) angelegt worden ist.
                        -->
                        <h3>Auftragsbeschreibung:</h3>
                        <input type="text" name="auftragsBeschreibung" maxlength="2000">
                        <h3>Kunden-ID:</h3>
                        <input type="text" name="kundenID" maxlength="2000">
                        <br>
                        <br>
                        <button type="submit" formaction="db_insertAuftraege.php">Auftrag anlegen</button>
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

