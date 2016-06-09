<?php 
$firstName = 'Christina';
$lastName = 'Deemer';

echo '<h1>' . $firstName . ' ' . $lastName . '</h1>'; 

$n = 5;
$j = 6;

echo '<p>' . $n + $j . '</p>';

if ($n < $j) {
    echo $n . ' is a smaller number than ' . $j; 
} elseif ($n > $j) {
    echo $n . ' is a larger number than '  . $j;
} elseif ($n == $j) {
    echo $n . ' is equal to ' . j;
} else {
    echo 'maybe ' . $n . ' and ' . $j . 'are not numbers';
}

?>

<?php $n = 7; ?>

<p><?php echo $n + $j; ?></p>

<p>
    <?php
    
    if ($n < $j) {
    echo $n . ' is a smaller number than ' . $j; 
    } elseif ($n > $j) {
    echo $n . ' is a larger number than '  . $j;
    } elseif ($n == $j) {
    echo $n . ' is equal to ' . j;
    } else {
    echo 'maybe ' . $n . ' and ' . $j . 'are not numbers';
    };

    ?>
    
    
</p>

<?php

$cost = 3;
$n = 0; // quantity

while($n <= 100) {
    echo  '<p>' . $n . ' paintbrushes cost $' . $cost * $n . '</p>';
    $n = $n + 10;
}





?>




