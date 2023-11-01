
<?php
//Hiển thị số chẵn trong dãy số từ: 1 2 3 4 ... 100 

function printEven($number)
{
    for ($i = 0; $i <= $number; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
echo "Hiển thị số chẵn trong dãy số từ: 1 2 3 4 ... 100 \n ";
printEven(100);



?>