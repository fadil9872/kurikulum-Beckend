<?php
$n=9;
for ($i=1; $i <=$n ; $i++) { 
    for ($k=1; $k<=$n  ; $k++) { 
        if ($i+$k >=10) {
            echo "&nbsp+ ";
        }else
            echo "&nbsp- ";
        }
        echo "<br>";
    }

?>