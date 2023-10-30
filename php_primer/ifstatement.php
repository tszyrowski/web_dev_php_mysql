<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primere - If statements</title>

    <style>
        /* Style for radio buttons hidden */
        input[type="radio"] {
            display: none;
        }
        
        /* Style for labels that will act as buttons */
        label {
            display: inline-block;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        /* Style for checked radio button */
        input[type="radio"]:checked + label {
            background-color: #ddd;
        }

    </style>


    <script>
        // Function to update the label based on the selected radio button
        function updateLabel(value) {
            let text = '';
            let color = '';

            if(value === 'A') {
                text = 'YOU ARE A SUPERSTAR!';
                color = 'green';
            }
            else if(value === 'B') {
                text = 'YOU DID WELL!';
                color = 'blue';
            }
            else if(value === 'C') {
                text = 'OK';
                color = 'yellow';
            }
            else if(value === 'D' || value === 'E') {
                text = 'SO SO';
                color = 'magenta';
            }
            else {
                text = 'YOU HAVE FAILED...';
                color = 'red';
            }

            document.getElementById('result').innerText = text;
            document.getElementById('result').style.color = color;
        }
    </script>

</head>
<body>
    <?php echo '<h2>If Statement</h2>'; ?>

    <form method="post" action="ifstatement.php">
        <label for="grade">Enter your grade:</label>
        <input type="number" id="grade" name="grade" required>
        <button type="submit">Check</button>
    </form>
    <?php
        $grade = $_POST['grade'];
        // ===, ==, >, <, <=, >=
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
    ?>

    <?php echo '<h2 style="color: darkgreen">Category GRADE</h2>'; ?>

    <form method="post" action="ifstatement.php">
        <input type="radio" id="A" name="category" value="A">
        <label for="A">A</label>

        <input type="radio" id="B" name="category" value="B">
        <label for="B">B</label>

        <input type="radio" id="C" name="category" value="C">
        <label for="C">C</label>

        <input type="radio" id="D" name="category" value="D">
        <label for="D">D</label>

        <input type="radio" id="E" name="category" value="E">
        <label for="E">E</label>

        <input type="radio" id="F" name="category" value="F">
        <label for="F">F</label>

        <button type="submit">Check</button>
    </form>

    <?php
        $category = $_POST['category'];
        // If-Else If-Else
        if(strtoupper($category) == 'A'){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
        }
        elseif(strtoupper($category) == 'B'){
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        }
        elseif(strtoupper($category) == 'C'){
            echo '<h2 style="color: yellow">OK</h2>';
        }
        elseif(strtoupper($category) == 'D' || strtoupper($category) == 'E'){
            echo '<h2 style="color: magenta">SO SO</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
        }
    ?>

    <?php
        echo '<h2 style="color: darkgreen">Category GRADE - DONE with Javascript</h2>';
        echo '<h3>Please not as this is javascript based only in browser session<br>
        if you refresh the page the result will be lost</h3>';
    
    ?>

    <form method="post" action="ifstatement.php">
        <input type="radio" id="js_A" name="category_js" value="A" onclick="updateLabel('A')">
        <label for="js_A">A</label>

        <input type="radio" id="js_B" name="category_js" value="B" onclick="updateLabel('B')">
        <label for="js_B">B</label>

        <input type="radio" id="js_C" name="category_js" value="C" onclick="updateLabel('C')">
        <label for="js_C">C</label>

        <input type="radio" id="js_D" name="category_js" value="D" onclick="updateLabel('D')">
        <label for="js_D">D</label>

        <input type="radio" id="js_E" name="category_js" value="E" onclick="updateLabel('E')">
        <label for="js_E">E</label>

        <input type="radio" id="js_F" name="category_js" value="F" onclick="updateLabel('F')">
        <label for="js_F">F</label>

        <h2 id="result"></h2>
    </form>
    
</body>
</html>