<?php
require_once 'database.php';

//query to get all the information
$query = "SELECT * FROM ass ORDER BY points DESC";


$result = mysqli_query($db, $query);

//putting the rows in a array
$examp = [];
while($row = mysqli_fetch_assoc($result)){
    $examp[] = $row;
}

echo json_encode($examp);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button type="button">20 punten</button>
<button type="button">10 punten</button>
<button type="button">5 punten</button>
<script src="javascript/script.js"></script>
</body>
</html>
