<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<h1>Tip Calculator</h1>

<?php
//Define variables
$billsubtotal= $_POST['billsubtotal'];
$tippercentage = $_POST['tippercentage'];
$tippercentage = $_POST['custom'];
$tipnperson = $_POST['nperson'];
$totnperson = $_POST['nperson'];



//check if fields only contains numbers
    $pattern =  '/^[0-9A-Za-zÁ-Úá-úàÀÜü]+$/';//numbers & letters
if (preg_match($pattern, $billsubtotal) == 1){
    //continue
} 

//Calculations
$tipamount = $billsubtotal * ($tippercentage*0.01);

$billamount = $tipamount + $billsubtotal;

$customamount = $billsubtotal * ($tippercentage*0.01);
 
$tipnperson = $tipamount / $tipnperson;

$totnperson = $billamount / $totnperson;

//Displaying results
 

echo "<p>";
echo "Tip amount is: $" . ($tipamount) . "<br>";
echo "</p>";


echo "<p>";
echo "Total bill amount is: $" . ($billamount) . "<br>";
echo "</p>";

echo "<p>";
echo "Tip per person: $" . ($tipnperson) . "<br>";
echo "</p>";

echo "<p>";
echo "Total per person: $" . ($totnperson) . "<br>";
echo "</p>";
 
?>
</body>
</html>












  