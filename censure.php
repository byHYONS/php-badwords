<?php

$censure = $_GET["bedwords"];

echo $censure . ' ' . strlen($censure);

echo str_replace('nzo', '***', $censure);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La parola è <?php echo $censure ?> la lunghezza è <?php echo strlen($censure) ?> </p>
    <p>La parola è <?php echo str_replace('nzo', '***', $censure) ?> la lunghezza è <?php echo strlen($censure) ?> </p>
    
</body>
</html>