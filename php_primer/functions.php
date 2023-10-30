<?php include 'includes/header.php'; ?>
    <h1>Functions</h1>
    <?php
        /* Defining a Function */
        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br/>";
        }
        /* Calling a Function */
        writeMessage();
        echo "<hr/>";
        writeMessage();
        /* Functions with parameters */
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        /* Pass by Reference - use ampersand in parameter */
        function changeNum(&$num){
            $num = $num + 10;
            // $num += 10;
        }
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            $num2 = $num2 + 1;
            $num1 = $num1 + 1;
            echo "the num1 inside function is: $num1 <br/>";
            echo "the num2 inside function is: $num2 <br/>";
            return $prod;
        }
        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);

        addFunction('10', "50");
        changeNum($num);
        echo $num . '<br/>';
        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';
        echo '<hr/>';
        echo '<hr/>';
        $num1 = 10;
        echo "The num1 outside the function is $num1 <br/>";
        $return_value = returnProduct($num1, $num);
        echo $return_value . '<br/>';
        echo "** The num1 outside the function is $num1 <br/>";
        echo "The num2 outside the function is $num <br/>";

    ?>
    
<?php require 'includes/footer.php'; ?>