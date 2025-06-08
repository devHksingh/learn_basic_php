<?php

$basket = [
  "Apple" => 2,
  "Banana" => 4
];

$total =0;
foreach($basket as $item => $quantity){
  echo "$item :$quantity\n";
  $total +=$quantity;
}
echo "total items : $total \n";