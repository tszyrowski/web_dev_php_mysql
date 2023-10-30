<?php include 'includes/header.php'; ?>
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
<?php require 'includes/footer.php'; ?>