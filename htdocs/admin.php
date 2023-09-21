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
            </div>
            <div class="nav-mid">
                <?php
                    if (isset($_SESSION['loginAdmin'])) {
                        header("Location: http://localhost/menu.php", true, 301);
                    }
                    else {
                        echo('
                            <form method="post">
                            <h2>Zugangspasswort:</h2>
                            <input name="adminpw" type="password"></input>
                            <button type="submit" formaction="adminLogin.php">Login</button>
                            </form>
                        ');
                    }
                ?>
            </div>
            <br>
            <br>
            <div class="nav-bottom">
                <a class="a" href="index.php"> Kunden-Login</a>
                <br>
                <br>
                <a class="a" href="info.php"> Info für Besucher</a> 
            </div>   
        </div>
    </body>
</html>

