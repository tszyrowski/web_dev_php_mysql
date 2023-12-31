<?php 
    $title = "Date and Time Manipulation";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>
    <?php
        echo '<h2>Today\'s Date</h2>';
        $datenow = getdate();
        echo "Today's Date: <br/>"; 
        echo $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year'].'<br/>';
        echo '<hr/>';
        echo '<h2>Today\'s Date</h2>';
        echo "Today's Date: ".$datenow['mday'].'<br/>';
        echo "Today's Month: ".$datenow['mon'].'<br/>';
        echo "Today's Year: ".$datenow['year'].'<br/>';
        echo '<hr/>';
        echo '<h2>Today\'s Date</h2>';
        echo "Today's Date: ".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';
        echo '<hr/>';
        echo '<h2>Today\'s Date</h2>';
        echo "Today's Date: ".$datenow['mday'].'-'.$datenow['mon'].'-'.$datenow['year'].'<br/>';
        echo '<hr/>';
        echo '<h2>Timestamp</h2>';
        echo time().'<br/>';
        echo '<hr/>';
        print date("m/d/y G.i:s<br>", time()).'<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());
        echo '<hr/>';
        echo '<h2>Make Date</h2>';
        $datestring = "2020-01-01 12:00:00";
        $timestamp = strtotime($datestring);
        print date("m/d/y G.i:s<br>", $timestamp).'<br/>';
        echo '<hr/>';
        echo '<h2>Make Date</h2>';
        $datestring = "next Monday";
        $timestamp = strtotime($datestring);
        print date("m/d/y G.i:s<br>", $timestamp).'<br/>';
        echo '<hr/>';
    ?>
    
<?php require 'includes/footer.php'; ?>