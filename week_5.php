<head>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>


<h1>week 5 exercises</h1>

<nav id="nav">
    <ul>
        <li><a href="#exercise1">exercise 1</a></li></li>
        <li><a href="#exercise2">exercise 2</a></li></li>
        <li><a href="#exercise3">exercise 3</a></li></li>
        <li><a href="#exercise4">exercise 4</a></li></li>
        <li><a href="#exercise5">exercise 5</a></li></li>
        <li><a href="#exercise6">exercise 6</a></li></li>
    </ul>
</nav>


<h2 id="exercise1">exercise 1</h2>

<?php 
    $myVar = "My Book Store";
?>

<h3><?php echo $myVar; ?></h3>

<h2 id="exercise2">exercise 2</h2>

<?php
    $myFile = file('http://motherfuckingwebsite.com/');

   foreach ($myFile as $line) {
    echo htmlspecialchars($line) . "<br />\n";
}
    
?>



<h2 id="exercise3">exercise 3</h2>
<p class="top"><a href="#nav">top</a></p>

<?php 
    $countedLines = count($myFile);
?>

<p>The above webpage has <?php echo $countedLines; ?> lines.</p>


<h2 id="exercise4">exercise 4</h2>
<p class="top"><a href="#nav">top</a></p>

<?php 
    $color = array('white', 'green', 'red', 'blue', 'black');
?>

<blockquote>
    The memory of that scene for me is like a frame of film forever frozen at that moment: the <?php echo $color[2]; ?> carpet, the <?php echo $color[1]; ?> lawn, the <?php echo $color[0]; ?> house, the leaden sky. The new president and his first lady.
    <footer>-Richard M. Nixon</footer>
</blockquote>


<h2 id="exercise5">exercise 5</h2>
<p class="top"><a href="#nav">top</a></p>


<?php 
    $myArray = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $mySum = array_sum($myArray);
    $myCount = count($myArray);
    
?>

<p>The numbers in the array: <?php echo implode(", ", $myArray); ?>.</p>

<p>The sum of the numbers in the array: <?php echo $mySum; ?></p>
<p>There are <?php echo $myCount; ?> numbers in the array.</p>

<?php 
    echo '<p> The average of the numbers in the array is ' . $mySum / $myCount . '.<p>';
?>


<h2 id="exercise6">exercise 6</h2>
<p class="top"><a href="#nav">top</a></p>

<?php 
    function LowerMyCase($str) {
        $str = strtolower($str);
        return $str;
    }

    echo '<p>' . LowerMyCase('LOLOLOL') . '</p>';

?>




