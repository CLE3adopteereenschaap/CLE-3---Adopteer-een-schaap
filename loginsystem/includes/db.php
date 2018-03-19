<?php

$host = 'localhost';
$username = 'root';
$password = "";
$db = "schaap";

$connect = mysqli_connect($host, $username, $password, $db) or die('error' . mysqli_connect_error());
