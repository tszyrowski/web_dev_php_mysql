<?php include 'includes/header.php'; ?>

    <?php 
        //Printing to HTML using echo
        /**
         * This is a multi line comment
         */
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php
        //Declare variable
        $name = 'Tomasz';
        $age = 38;
        //echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.'</h1>';
        echo '<h1>My Age Is: '.$age.'</h1>';
        //echo using double quotes and interpolation
        echo "<h1>My Name Is: $name </h1>";
        echo "<h1>My Name Is: ".$name." </h1>";
        echo '<h1>My Name Is: $name </h1>';
    ?>
<?php require 'includes/footer.php'; ?>