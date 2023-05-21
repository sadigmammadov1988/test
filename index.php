<?php
$paramOne = $_ENV['PARAMETER_ONE'];
$paramTwo = $_ENV['PARAMETER_TWO'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>OpenShift PHP App</title>
</head>
<body>
    <h1>Input Parameters:</h1>
    <p>Parameter One: <?php echo $paramOne; ?></p>
    <p>Parameter Two: <?php echo $paramTwo; ?></p>
</body>
</html>
