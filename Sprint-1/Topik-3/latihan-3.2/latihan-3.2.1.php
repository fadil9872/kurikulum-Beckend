<?php
$n=9;
for ($i=1; $i <=$n ; $i++) { 
    for ($k=1; $k<=$n  ; $k++) { 
        if ($i==$k || $i<$k) {
            echo "+ ";
        }elseif ($i==$k || $i>$k)
            echo "- ";
        }
        echo "<br>";
    }

?>