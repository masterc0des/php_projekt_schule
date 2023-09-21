<?php
    session_start();
?>
<?php
    $username = "dbwebseite";
    $password = "aXmtfrMYS2DA73jNr2wmg2bc";
    $connection_string = "85.214.142.162:1521/xepdb1";
    $session_mode = "OCI_DEFAULT";

    if (isset($_SESSION["loginAdmin"])) {
        
        $connection = oci_connect($username, $password, $connection_string);

        if (isset($_POST['auftragsBeschreibung']) && isset($_POST['kundenID'])) {
            
            $stmt = "call proAuftraege('$_POST[auftragsBeschreibung]', '$_POST[kundenID]')";
        
            $parsed_stmt = oci_parse($connection, $stmt);

            oci_execute($parsed_stmt);
        }

        oci_free_statement($parsed_stmt);
        oci_close($connection);

        header("Location: http://localhost/include/functions/anzeigeAuftraege.php", true, 301);
    }
    else {
        echo('<h3>Kein Zugriff! Logge dich <a href="http://localhost/index.php">Hier</a> ein</h3>');
    }
?>

