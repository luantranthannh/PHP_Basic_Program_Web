<?php 
// Kiểm tra 1 số N có phải là số nguyên tố hay không. In ra màn hình các số nguyên tố < 10
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }  }
    return true;
}
echo "Nhập giá trị của n: ";
$n = (int) fgets(STDIN);
if (isPrime($n)){
     echo "$n là so nguyen to ";
} else {
    echo "$n ko la so nguyen to";
}
echo "\nCác số nguyên tố nhỏ hơn 100 là: ";
for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
 ?>
