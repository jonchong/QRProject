
   <?php  
require_once "password.class.php"; 
$gen=$passGen->generate();

echo "Default setting : " . $gen . "<br>"; 
echo $gen;
$passGen->configure(array( 
            "uppercase" => true, 
            "special" => true, 
        )); 
echo "Just uppercase and special characters : " . $passGen->generate() . "<br>"; 

$passGen->configure(array( 
            "uppercase" => true, 
        )); 
echo "Just uppercase : " . $passGen->generate() . "<br>"; 

$passGen->configure(array( 
            "lowercase" => true, 
        )); 
echo "Just lowercase : " . $passGen->generate() . "<br>"; 

$passGen->configure(array( 
            "number" => true, 
        )); 
echo "Just number : " . $passGen->generate() . "<br>"; 

$passGen->configure(array( 
            "special" => true, 
        )); 
echo "Just special characters : " . $passGen->generate() . "<br>"; 

$passGen->configure(array( 
            "extra" => true, 
        )); 
echo "Just extra characters : " . $passGen->generate() . "<br>"; 

$passGen->flush(); 
$passGen->configure(array(), 10); 
echo "Length 10 characters with the lastest setting : " . $passGen->generate();