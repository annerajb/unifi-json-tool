<?php
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
if (!$dbhandle) {
    exit("There was an error with your connection: ".mysqli_connect_errno());
}
$dbhandle->set_charset('utf8mb4');
?>
