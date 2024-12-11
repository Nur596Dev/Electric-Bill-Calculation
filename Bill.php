<?php 
echo "Enter the units:";
$units =(int)readline();
if ($units <= 100){
    $bill = $units * 5; //$5 per unit for the 1st 100 units
}
elseif ($units <= 200){
    $bill = 100 * 5 + ($units - 100) * 10;//$10 per unit for the 1st 101-200 units
} else{
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;//$15 per unit for the 1st 201-250 units
}
echo "Total bill: $bill\n";






?>