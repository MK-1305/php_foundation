<?php
// 税込金額を返す
function intax($value) {
    return floor($value * 1.1);
}

$price = 3000;
$price_tax = intax($price);
echo $price_tax;
?>