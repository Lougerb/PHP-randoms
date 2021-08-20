<!-- Importing separate PHP page -->
<?php
include 'includes/person.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Training Ground</title>
</head>
<body>
    <?php

    // Echo====================

    // Outputting a string
    echo "ECHO!<br>";
    echo "Hello World!";
    echo"<br>";
    // Outputting an interger
    echo 10;
    echo"<br>";
    // Outputting a float
    echo 10.1;
    echo"<br>";
    // Outputting a boolean
    echo true; 
    // Will output 1
    echo false; 
    // Will output nothing
    echo"<br>";

    // Variables===============
echo "VARIABLES============<br>";
    // Variable that can be change
    $myName="Louein";
    $myAge=24;
    $myHeight=5.6;
    $havePet=true;

    echo "CONCATENATE============<br>";
    // To combine string and variable
    // Always put "," or "." BETWEEN String and Variable
    echo "I am $myName";
    echo"<br>";
    echo "$myAge is my Age";
    echo"<br>";
    // Variable that cannot be change
    // Constants variable is recommended to be Capitalized
    
    CONST PI=3.14;
    CONST ISSUNBIG=true;

    // getting the type of variables
    
    echo "GETTING THE TYPE============<br>";
    echo gettype($myName)."<br>";
    echo gettype($myAge)."<br>";
    echo gettype($myHeight)."<br>";
    echo gettype($havePet)."<br>";

    // Check if value is string, int, bool or double and etc

    echo "CHECK IF VALUE IS STRING/INT/BOOL/DOUBLE/NUMERIC============<br>";
    echo "is_string(\$myName) = ".is_string($myName); //true
    echo"<br>";
    echo "is_int(\$myAge) = ".is_int($myAge); //true
    echo"<br>";
    echo "is_bool(\$havePet) = ".is_bool($havePet); //true
    echo"<br>";
    echo "is_double(\$myHeight) = ".is_double($myHeight); //true
    echo"<br>";
    echo "is_numeric(\"3.4\") = ".is_numeric("3.4"); //true
    echo"<br>";
    echo "is_numeric(\"3.5mb\") = ".is_numeric("3.5mb"); //false
    echo"<br>";

    // Check if variable is declared
    // us isset();
    
    echo "CHECK IF VARIABLE IS DECLARED============<br>";
    echo "isset(\$myName) = ".isset($myName); //true
    echo"<br>";
    echo "isset(\$myDog) = ".isset($myDog); // false
    echo"<br>";

    // Conversion
    echo "CONVERSION============<br>";
    $strNumber = "12.24";
    var_dump($strNumber);
    echo"<br>";
    $toNumber = (float)$strNumber;
    var_dump($toNumber);
    echo"<br>";

    // Number functions
    echo "NUMBER FUNCTIONS============<br>";
    echo "abs(-15) = ".abs(-15)."<br>";
    echo "pow(5,4) = ".pow(5,4)."<br>";
    echo "sqrt(16) = ".sqrt(16)."<br>";
    echo "max(2,9,3) = ".max(2,9,3)."<br>";
    echo "min(2,1,6) = ".min(2,1,6)."<br>";
    echo "round(2.4) = ".round(2.4)."<br>";
    echo "round(2.6) = ".round(2.6)."<br>";
    echo "floor(2.6) = ".floor(2.6)."<br>";
    echo "ceil(2.4) = ".ceil(2.4)."<br>";

    // Number Formats
    $beegNumber = 123456789.12345;
    echo number_format($beegNumber,2,".",",");
    echo "<br>";

    // Strings
    echo "STRINGS============<br>";
    echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
    echo "2 - " . trim($string) . '<br>' . PHP_EOL;
    echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
    echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
    echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
    echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
    echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
    echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
    echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
    echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
    echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
    echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
    echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
    echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
    echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
    echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;
    // Properties and Methods
    // please Open includes/person.inc.php to proceed



  // Operators

// using  =& operator means it copy the changes of the variable
// For example:

$var1 = "foo";
$var2=& $var1;
echo $var2;
// prints "foo"
$var1="bar";
echo $var2;
// also prints "bar"

    ?>
</body>
</html>