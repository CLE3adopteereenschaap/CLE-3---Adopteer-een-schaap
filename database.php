<?php

// Connectie maken met database

$host       = 'localhost';
$user       = 'root';
$password   = '';
$database   = 'cle3';


$db = mysqli_connect($host, $user, $password, $database)
or die ('Error: '.mysqli_connect_error());