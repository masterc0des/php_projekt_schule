<?php
    if (isset($_POST['adminpw'])) {

        if ($_POST['adminpw'] == 'herrgrob') {
            session_start();
            
            $_SESSION['loginAdmin'] = true;

            header("Location: http://localhost/menu.php", true, 301);
        }
        else {
            echo("Falsches passwort!");
        }
    }
?>