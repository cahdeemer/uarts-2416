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


<?php 

$cost = 3;
$n = 100;

do {
    echo '<p>' . $n . ' paintbrushes cost $' . $cost * $n . '</p>';
    $n = $n - 10;

}

while ($n > 0 ); 


?>

<?php 

    for ($n = 0; $n <= 100;  $n++) {
        echo '<p>' . $n . '</p>';
    }

?>

<?php

    $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut");
    $statesLength = count($states);
    
    echo '<select>';
    for($x=0; $x<$statesLength; $x++) {
        echo '<option>' . $states[$x] . '</option>';
    }
    echo '</select>';

?>

<?php

    $capitals = array("Alabama" => "Montgomery", "Alaska" => "Juneau", "Arizona" => "Phoenix", "Arkansas" => "Little Rock");
    
    foreach($capitals as $x => $x_value) {
        echo '<p> The capital of ' . $x . ' is ' . $x_value . '</p>';
    }
    

?>

<?php 

    $books = array(
        
        array("Title" => "Emma", "Author" => "Jane Austen", "Price" => "14.95"),
        array("Title" => "Madame Bovary", "Author" => "Gustave Flaubert", "Price" => "12.95"),
        array("Title" => "The Sun Also Rises", "Author" => "Ernest Hemingway", "Price" => "9.95"),
        array("Title" => "Beloved", "Author" => "Toni Morrison", "Price" => "19.95")
        
        
        );
        
    echo "<table>";
    
    foreach($books as $x => $x_value) {
        echo '<tr>';
        foreach ($x_value as $key => $value) {
            echo '<td>' . $value . '</td>';        
        }
        echo '</tr>';
    }
    
    echo "</table>";
        
?>

<h3>Class 4</h3>

<?php 

    $myName = fixNames("CHRISTINA", "DeEMER");
    echo $myName[0] . " " . $myName[1];
    
    function fixNames($firstName, $lastName) {
    $name = array(ucfirst(strtolower($firstName)), ucfirst(strtolower($lastName)));
    
    return $name;
    
    }

?>



<?php

    function calculateArea($length, $width) {
        echo "<p>A recentagle with a length of " . $length . " and a width of " . $width . " has an area of " . $length * $width . '</p>';
    }
    
    $myRectange = calculateArea(3, 4);
    echo $myRectangle;
?>

<?php 

    $states = array("New Jersey", "New York", "Pennsylvania");
    $statesCount = count($states);
    
    echo '<ul>';
    for ($i = 0;$i<$statesCount; $i++) {
        $eisnowx = str_replace("e", "x", $states);
        echo '<li>' . $eisnowx[$i] . '</li>';
    }
    echo '</ul>'; 


?>

<?php
    $herbs = array('basil', 'dill', 'oregano', 'tarragon', 'thyme');
    
    $comma_separated = implode(', ', $herbs);
    
    echo '<p>Herbs: ' . $comma_separated . '</p>';


?>













