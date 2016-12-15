<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<h1>Tip Calculator</h1>

<?php
//Define variables
$billsubtotal= $_POST['billsubtotal'];
$tippercentage = $_POST['tippercentage'];
//$hoursErr = $wagesErr = "";


//check if fields only contains numbers
    $pattern =  '/^[0-9A-Za-zÁ-Úá-úàÀÜü]+$/';//numbers & letters
if (preg_match($pattern, $billsubtotal) == 1){
    //continue
} 

//Calculations
//$overtime = max($hours - 40, 0);

//$pay = $overtime * $wages * 1.5;

//$pay = $pay + ($hours - $overtime) * $wages;
$amount = $billsubtotal * ($tippercentage*0.01);


 
//Displaying results
 

echo "<p>";
echo "Your subtotal bill is: $" . number_format($amount) . "<br>";
echo "</p>";

 
?>
</body>
</html>












  