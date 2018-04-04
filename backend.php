<?php
require_once 'database.php';

    print_r($_GET['name']);
    $newPnts = $_GET['name'];
    echo $newPnts;

//    header("Content-type:application/json");



//query to get all the information
$query = "SELECT * FROM ass ORDER BY points DESC";
//$changeQuery = "UPDATE ass SET 'points' =".$newPnts."WHERE id == '0'";

$result = mysqli_query($db, $query);

//putting the rows in a array
$examp = [];
while($row = mysqli_fetch_assoc($result)){
    $examp[] = $row;
}

$json = json_encode($examp);
echo $json;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reqwest/2.0.5/reqwest.min.js"></script>

</head>
<body>

<div id="twenty">   20 punten</div>
<div id="ten">      10 punten</div>
<div id="five">     5 punten</div>

<script>
    <?php echo 'var ar = '.$json; ?>
</script>

<script src="javascript/script.js"></script>

</body>
</html>
