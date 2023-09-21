<?php
    session_start();
?>
<html>
    <head>
        <title>
            DBK-PHP-Projekt
        </title>
        <link href="../../css/dbk_php.css" type="text/css" rel="stylesheet"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="nav">
            <div class="nav-top">
                <?php
                    $username = "dbwebseite";
                    $password = "aXmtfrMYS2DA73jNr2wmg2bc";
                    $connection_string = "85.214.142.162:1521/xepdb1";
                    $session_mode = "OCI_DEFAULT";
                
                    if (isset($_SESSION['loginId'])) {
                        
                        $connection = oci_connect($username, $password, $connection_string);
                        
                        $stmt = "select * from tblKunden where idKunde = ".$_SESSION['loginId']."";
                        $parsed_stmt = oci_parse($connection, $stmt);
                        oci_execute($parsed_stmt);
                            

                        echo("<table>");
                        echo("<tr>");
                        echo("<th>ID</th>");
                        echo("<th>Kundenname</th>");
                        echo("<th>Kundenpasswort</th>");
                        echo("</tr>");
                        while($row = oci_fetch_array($parsed_stmt, OCI_BOTH)) {
                            echo("<tr>");
                            echo("<td>".$row['IDKUNDE']."</td>");
                            echo("<td>".$row['KUNDENNAME']."</td>");
                            echo("<td>".$row['KUNDENPASSWORT']."</td>");
                            echo("<tr>");
                        }
                        echo("</table>");

                        oci_free_statement($parsed_stmt);
                        oci_close($connection);                        
                    }
                    else if (isset($_SESSION['loginAdmin'])) {
                        
                        $connection = oci_connect($username, $password, $connection_string);
                        
                        $stmt = "select * from tblKunden";
                        $parsed_stmt = oci_parse($connection, $stmt);
                        oci_execute($parsed_stmt);
                            

                        echo("<table>");
                        echo("<tr>");
                        echo("<th>ID</th>");
                        echo("<th>Kundenname</th>");
                        echo("<th>Kundenpasswort</th>");
                        echo("</tr>");
                        while($row = oci_fetch_array($parsed_stmt, OCI_BOTH)) {
                            echo("<tr>");
                            echo("<td>".$row['IDKUNDE']."</td>");
                            echo("<td>".$row['KUNDENNAME']."</td>");
                            echo("<td>".$row['KUNDENPASSWORT']."</td>");
                            echo("<tr>");
                        }
                        echo("</table>");

                        oci_free_statement($parsed_stmt);
                        oci_close($connection);                        
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

