<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - FOR LOOP</title>
</head>
<body>
    <h3 style="color: red">Presents the looping and session counter<br>
    It evaluates session on each time and both columns change accordingly</h3>
    <div style="display: flex;">
        <div style="flex: 1;">
            <h1>FOR LOOP</h1>
            <?php
                // For loop
                for($count = 0; $count < 10; $count++) {
                    echo "<p>Counter: $count</p>";
                }
            ?>
        </div>
        <div style="flex: 1;">
            <h2>Loop Counter Form</h2>
            <form method="post" action="">
                <label for="loops1">Enter number of loops:</label>
                <input type="number" id="loops1" name="loops1" required>
                <button type="submit" name="submit1">Submit</button>
            </form>
            <?php
                if(isset($_POST['submit1'])) {
                    $loops = $_POST['loops1'];
                    echo "<h2>Loop Counter</h2>";
                    for($count = 0; $count < $loops; $count++) {
                        echo "<p>Counter: $count</p>";
                    }
                }
            ?>
        </div>

        <!-- Session counter -->
        <div style="flex: 2;">
            <h2>Loop Counter Form</h2>
            <form method="post" action="">
                <label for="loops2">Enter number of loops:</label>
                <input type="number" id="loops2" name="loops2" required>
                <button type="submit" name="submit2">Submit</button>
            </form>
            <?php
                // Start the session
                session_start();

                // Initialize the session variables if they don't already exist
                if(!isset($_SESSION['request_count'])) {
                    $_SESSION['request_count'] = 0;
                }

                if(!isset($_SESSION['right_hand_count'])) {
                    $_SESSION['right_hand_count'] = 0;
                }

                // Increment the session variables
                if(isset($_POST['submit1']) || isset($_POST['submit2'])) {
                    $_SESSION['request_count']++;
                }

                if(isset($_POST['submit2'])) {
                    $_SESSION['right_hand_count']++;
                }

                // Display the session variables
                echo "<h3>This form has been submitted " . $_SESSION['request_count'] . " times in total.</h3>";
                echo "<h3>This right-hand form has been submitted " . $_SESSION['right_hand_count'] . " times.</h3>";

                if(isset($_POST['submit2'])) {
                    $loops = $_POST['loops2'];
                    echo "<h2>Loop Counter</h2>";
                    for($count = 0; $count < $loops; $count++) {
                        echo "<p>Counter: $count</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
