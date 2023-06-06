<?php
$hours = 1;
$rate = 15;
$weekly_pay = null;

if($hours <= 0) {
  $weekly_pay = 0;
}
else if ($hours <= 40){
  $weekly_pay = $hours * $rate;
}
echo "You made \${$weekly_pay} this week";
?>