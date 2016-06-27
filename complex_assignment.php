<?php

    $relatives = file('complex_assignment.txt');
   
    
   
    foreach ($relatives as $relative) {
        $family = explode(",", $relative);
        $familyfield = implode(', ', $family);
        $upperfamily = strtoupper($familyfield);
        echo $upperfamily . '</br>';
    }
    
   
    
    

    
    
   
    
    
    
?>