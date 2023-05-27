<?php
$dbconn = pg_connect (" host = localhost
                        port = 5432
                        dbname = Parking
                        user = postgres
                        password = 1908")
                        or die ( "Couldn't connect : ". pg_last_error());

$loggedIn = null;

if (isset($_SESSIOn['user'])){
    $loggedIn = $_SESSION['user'];
}

?>
