<?php 
echo "Nhập chieu cao: ";
$n = (int) fgets(STDIN);
for ($i=0; $i<=$n;$i++){
    for ($j=0;$j<$i;$j++){
        echo "* ";
    }
    echo " \n";
}


?>