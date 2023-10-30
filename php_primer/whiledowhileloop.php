<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <title>PHP Primer - While Loops</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        while($grade < 5) {
            echo '<p>I AM LESS THAN 5</p>';
            $grade++;
        }
        echo '<h2>EXIT LOOP!</h2>';
    ?> 
    <h1>Do-While Loop</h1>
    <?php
        $grade = 0;
        do {
            echo '<p>I AM DO WHILE LOOP!</p>';
            $grade++;
        } while($grade < 5);
        echo '<h2>EXIT LOOP!</h2>';
    ?>   
</body>
</html>