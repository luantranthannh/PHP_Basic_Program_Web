<?php
for ($row = 1; $row <= 8; $row++) {
    for ($col = 1; $col <= 8; $col++) {
        
        $total = $row + $col;
        if ($total % 2 == 0) {
            //+ chẵn <>
            echo "<> ";
        } else {
            echo "== ";
        }
    }  
    echo "\n";
}
?>