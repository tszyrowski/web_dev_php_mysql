<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statement</title>
</head>
<body>
    <h1>Switch Statement</h1>
    <form action="switchstatement.php" method="post">
        <label for="grade">Enter Your Grade: </label>
        <input type="text" name="grade" id="grade">
        <input type="submit" value="Submit">
    </form>
    <?php
        $grade = $_POST['grade'];

        switch(strtoupper($grade)) {
            case 'A':
                echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
                break;
        }
    ?>
</body>
</html>