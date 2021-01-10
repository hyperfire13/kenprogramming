<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Get the multiples of a number and get the sum of it.</h2> 
  <form method="POST" action= "index.php"> 
    Enter Number: 
    <input type="number" name="number" >
    <br>
    <br>
    Enter Limit: 
    <input type="number" name="limit" >
    <br>
    <br>
    <input type="submit" name="submit" value="Submit"> 
  </form> 
</body>
</html>

<?php
if (intval($_POST["number"]) && intval($_POST["limit"])) {
    $number = filter_var($_POST["number"], FILTER_SANITIZE_NUMBER_INT);
    $limit = filter_var($_POST["limit"], FILTER_SANITIZE_NUMBER_INT);
    $listOfMultiples = "";
    $sum = 0;

    for ($i=0; $i <= $limit; $i++) {
        if ($i % $number === 0) {
            $listOfMultiples = $listOfMultiples . $i . ', ';
            $sum += $i;
        }
    }
    echo 'list of multiples of ' . $number . ' : ' . $listOfMultiples;
    echo '<br>';
    echo 'sum of all multiples : ' . $sum;
}
?>