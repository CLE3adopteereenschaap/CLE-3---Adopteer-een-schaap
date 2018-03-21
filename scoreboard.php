<?php
//database connection
require_once 'database.php';

//query to get all the information
$query = "SELECT * FROM ass ORDER BY points DESC";


$result = mysqli_query($db, $query);

//putting the rows in a array
$examp = [];
while($row = mysqli_fetch_assoc($result)){
    $examp[] = $row;
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Scoreboard</title>

</head>
<body>

<!--HEADER-->
<div class="header">
    <div>
        <h1>Adopteer een Schaap</h1>
    </div>
    <div>
        <img>
    </div>
</div>

<!--SCORES-->
<div class="scores">
    <table>
        <tr>
            <th>Naam</th>
            <th>Score</th>
        </tr>

        <?php
        foreach ($examp as $rows){
        ?>
        <tr>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['points']; ?></td>

        </tr>
        <?php
        }
        ?>

    </table>
</div>

<!--EXPLANATION-->
<div class="explain">
    <h1>Uitleg spel</h1>
    <p>Hier komt de uitleg van het spel. Dit is voor mensen die niet weten dat het spel bestaat.</p>
</div>


<script>
    //variable with time
    var time = new Date().getTime();

    //function which refreshes the page every hour
    function refresh() {
        if(new Date().getTime() - time >= 600000)
            window.location.reload(true);
        else
            setTimeout(refresh, 2000);
    }

    setTimeout(refresh, 1000);
</script>
</body>
</html>
