<?php
require_once 'database.php';

$newPnts = $_GET['newPnts'];
echo $newPnts;
//query to get all the information
$query = "SELECT * FROM ass ORDER BY points DESC";
$cahngeQuery = "UPDATE ass SET 'points' =".$newPnts."WHERE id == '0'";

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

</head>
<body>
<button type="button" onclick="pntDecrease(twenty)" class="twenty">20 punten</button>
<button type="button" onclick="pntDecrease(ten)" class="ten">10 punten</button>
<button type="button" onclick="pntDecrease(five)" class="five">5 punten</button>


<script>
    <?php echo 'var ar = '.$json; ?>
</script>

<script src="javascript/script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
