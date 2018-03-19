<?php

// Connectie maken met database

$host       = 'localhost';
$user       = '0935165';
$password   = 'othohdim';
$database   = '0935165';


$db = mysqli_connect($host, $user, $password, $database)
or die ('Error: '.mysqli_connect_error());