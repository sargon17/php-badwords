<?php

$string = " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum hic dolor et suscipit? Repellendus, unde autem iure distinctio inventore repudiandae est quo expedita rerum fuga debitis, quam illum nihil dolorum! ";
$badWords = $_GET['badWords'];
$finalString = str_replace($badWords, '***', $string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h2> <?php echo $finalString ?> </h2>
    <h3> The paragraph is <?php echo (strlen($finalString)) ?> characters long </h3>

</body>

</html>