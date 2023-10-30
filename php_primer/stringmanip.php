<?php include 'includes/header.php'; ?>
    <h1>String Manipulation</h1>
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1." ".$phrase2;
        
        $name = "tomasz kowalski";
        echo '<br/>';
        echo "Uppercase first letter: ".ucfirst($name).'<br/>';
        echo "Uppercase first letter of each word: ".ucwords($name).'<br/>';
        echo "Upper case: ".strtoupper($name).'<br/>';
        echo "Lower case: ".strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo "Repeat String: ".str_repeat('a', 10).'<br/>';
        echo "Repeat String - Nested Function: ".strtoupper(str_repeat('a', 10)).'<br/>';
        echo '<hr/>';
        echo "Get a Substring: ".substr($name, 5, 10).'<br/>';
        echo "Get position of string: ".strpos($name, 'w').'<br/>';
        echo "Find Character 'T': ".strchr($name, 'T').'<br/>';
        echo "Find Character 't': ".strchr($name, 't').'<br/>';
        echo "Find Character 's': ".strchr($name, 's').'<br/>';
        echo "Find Character 'k': ".strchr($name, 'k').'<br/>';
        echo "Find Character 'z': ".strchr($name, 'z').'<br/>';
        echo '<hr/>';
        echo "Find Length of String: ".strlen($name).'<br/>';
        echo "Without Trim: "."A"." B C D "."E".'<br/>';
        echo "Trim spaces on both sides: "."A".trim(" B C D ")."E".'<br/>';
        echo "Trim spaces to the left: "."A".ltrim(" B C D ")."E".'<br/>';
        echo "Trim spaces to the right: "."A".rtrim(" B C D ")."E".'<br/>';
        echo '<hr/>';
        echo "Replace string with another: ".str_replace("stand", "sit", $phrase2).'<br/>';
        echo chop('', chop('', chop(    "   A     B C D     "))).'<br/>';
        echo '<hr/>';
    ?>
    
<?php require 'includes/footer.php'; ?>