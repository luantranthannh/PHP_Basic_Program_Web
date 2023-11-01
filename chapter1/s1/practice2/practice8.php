<?php 
echo "Nhập chieu cao: ";
$n = (int) fgets(STDIN);
for ($i=0; $i<=$n;$i++){
    for ($j=0;$j<$i;$j++){
        echo "* ";
    }
    echo " \n";   
}
for ($k=$n; $k>=1;$k--){
    for ($j=1;$j<=$k;$j++){
        echo "* ";
    }
    echo " \n";
}
?>

