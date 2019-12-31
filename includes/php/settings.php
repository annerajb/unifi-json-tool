<?php

$baseurl = "http://localhost/"; // change this to match the rul you will be accessing the app from

// controller info

$controlleruser     = ''; // the user name for access to the UniFi Controller
$controllerpassword = ''; // the password for access to the UniFi Controller
$controllerurl      = ''; // full url to the UniFi Controller, eg. 'https://22.22.11.11:8443'
$controllerversion  = '5.12.35'; // the version of the Controller software, eg. '4.6.6' (must be at least 4.0.0)

// db settings

$hostdb = "db"; // MySQl server
$userdb = "unifi"; // MySQL user
$passdb = "password"; // MySQL password
$namedb = "unifi"; // MySQL database name

// other setings, should not need to be changed

$singlesite = false;
$site_id = '';
$debug = false;

?>
