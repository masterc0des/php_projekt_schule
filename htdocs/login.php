<?php
    /*
    $passwort = 'herrgrob';

    if (isset($_POST['password'])) {

        if ($_POST['password'] == $passwort) {

            session_start();
            $_SESSION['login'] = true;
            
            header("Location: http://localhost/menu.php", true, 301);
        }        
    }
    */

    $username = "dbwebseite";
    $password = "aXmtfrMYS2DA73jNr2wmg2bc";
    $connection_string = "85.214.142.162:1521/xepdb1";
    $session_mode = "OCI_DEFAULT";

    $connection = oci_connect($username, $password, $connection_string);

    if (isset($_POST['kundenId']) && isset($_POST['passwort'])) {

        $stmt = "select * from tblKunden where idKunde = '$_POST[kundenId]'";
        
        $parsed_stmt = oci_parse($connection, $stmt);

        oci_execute($parsed_stmt);

        $row = oci_fetch_array($parsed_stmt, OCI_BOTH);
        
        if ($_POST['passwort'] == $row['KUNDENPASSWORT']) {
            session_start();
            $_SESSION['loginId'] = $row['IDKUNDE'];
            $_SESSION['kundenName'] = $row['KUNDENNAME'];

            oci_free_statement($parsed_stmt);

            $stmt = "insert into tblAnmeldungen values (".$_POST['kundenId'].", NULL)";
            $parsed_stmt = oci_parse($connection, $stmt);
            oci_execute($parsed_stmt);
            oci_free_statement($parsed_stmt);
            
            header("Location: http://localhost/menu.php", true, 301);
        }
        else {
            echo("Falsches passwort!");
        }
        
        oci_close($connection);
    }
?>

