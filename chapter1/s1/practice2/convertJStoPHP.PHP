<?php 
?>


<?php 
//Single line
#single line
/*
multiple line
*/
$age =10;
$name ="Rady! ";
$isDone = true;
$avg=8.08;


echo "Hello PHP";
error_log("Hello PHP");






$fruits = ["Cam", "Chanh", "Bưởi"]; 
$avgs = [7.5,8.1,7.3];
echo $avgs[2];//8.1

$fruits = array ("Cam", "Chanh", "Bưởi");
echo count($fruits); //3
echo($fruits[1]); //Chanh

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo $matrix[1][2]; //6




$person = array(
    'name' => 'Luan',
    'age' => 19,
    'city' => 'Da Nang'
);

print_r($person['age']); //19

unset($person['city']);

print_r($person);  //Array ( [name] => Luan [age] => 19)


define('SCHOOL_NAME', 'PNC CAMBODIA');
echo SCHOOL_NAME;

$numbers = [1,2,3,4];
// Adds one or more elements to the end of an array.
array_push($numbers, 10);// 1 2 3 4 10

//Removes and returns the last element of an array.
array_pop($numbers ); //    4

//Removes and returns the first element of an array.
array_shift($numbers);  //1

// Adds one or more elements to the beginning of an array.
array_unshift($numbers, 9);  //9 1 2 3 4

//conditionals
$n=10;
//if
if ($n==10){
    echo "Sure";
}
//if-else
if ($n>10){
    echo "Yes";
}
else {
    echo "No";
}


$n=10;

//if-elseif-else
if ($n==10){
    echo "Sure";
}
elseif ($n>10){
    echo "Not really";
}
elseif($n<10) {
    echo "Not exactly";
}
else{
    echo "No answer";
}







?>


<?php
$numbers = [1, 2, 3, 4];
// for loop
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i]; // 1, 2, 3, 4
}

// Loop by index
foreach (array_keys($numbers) as $index) {
    echo $index; // 0, 1, 2, 3
}

// Loop by value
foreach ($numbers as $value) {
    echo $value; // 1, 2, 3, 4
}
?>

<?php
$numbers = [1, 2, 3, 4];
// while loop
$i = 0;
while ($i < count($numbers)) {
    echo $numbers[$i]; // 1, 2, 3, 4
    $i++;
}
?>

<?php
$numbers = [1, 2, 3, 4];
// foreach loop
foreach ($numbers as $num) {
    echo $num; // 1, 2, 3, 4
}


function getName($name){
    return "My name is " . $name;
}
echo getName("Luan");
?>

