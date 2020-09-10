<?php
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=9; $j++) { 
        echo "(".$i . ",".$j. ")";
    }
    echo "<br>";
}
?>


<?php
$n=9;
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=9; $j++) { 
        if ($i == 1 || $i == 5 || $i==9 || $i<5 && $j == 1 || $i>5 && $j==9) {
            echo "+ ";
        } else {
            echo "- ";
        }
    }
    // echo "<br>";
    echo "\n";
}
?>
