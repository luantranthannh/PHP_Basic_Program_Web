<?php
// A for loop to display a text without 'echo'
for ($i = 0; $i < 3; $i++) {
?>
    hello world
<?php
}
?>

<?php
// Other syntax to do the same
for ($i = 0; $i < 3; $i++) :
?>
    hello world
<?php
endfor
?>

<?php
// Instructions: Do the same to display 5 times your name

// A for loop to display your name without 'echo'
for ($i = 0; $i < 5; $i++) {
?>
  Tran Thanh Luan
<?php
}
?>
    
<?php
// Other syntax to do the same
for ($i = 0; $i < 5; $i++) :
?>
  Tran Thanh Luan
<?php
endfor;
?>

?>