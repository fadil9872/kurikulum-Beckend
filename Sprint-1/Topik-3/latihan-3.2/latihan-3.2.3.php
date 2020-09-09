<?php
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=9; $j++) { 
        echo "(".$i . ",".$j. ")";
    }
    echo "<br>";
}
?>


<?php
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=9; $j++) { 
        if ($i == $j || $i + $j==10 || $i + $j > 10 && 
        $i > $j|| $i + $j < 10 && $i < $j) {
            echo "+ ";
        } else {
            echo "- &nbsp&nbsp";
        }
    }
    echo "<br>";
}
?>