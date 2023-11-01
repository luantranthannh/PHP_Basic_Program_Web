<?php 
//3: Tính giai thừa của 1 số N. In ra màn hình giai thừa của các số từ 1 đến 15.
function calculateFactorial($n)
{
    $result_factorial = 1;
    if ($n == 0 || $n == 1) {
        return $result_factorial;
    } else {
        for ($i = 2; $i <= $n; $i++) {
            $result_factorial*=$i;
        }
        return $result_factorial;
    }
}

echo "Nhập giá trị của n: ";
$n = (int) fgets(STDIN);
echo "Giai thừa của $n là: " . calculateFactorial($n);

?>