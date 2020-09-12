<?php
// for ($i=1; $i <=9 ; $i++) { 
    // for ($j=1; $j <=9 ; $j++) { 
        // echo "$i,$j ";
    // }echo "\n";
// }
// echo "\n\n";
// 
// for ($i=1; $i <=9 ; $i++) { 
    // for ($j=1; $j <=9 ; $j++) { 
        // if ($j==2 || $j==4 || $j==6 || $j==8) {
            // echo "-";
        // }else {
            // echo "+";
        // }
    // }echo "\n";
// 
// }
// 
// 
// echo "\n\n";
// 
// for ($i=1; $i <=9 ; $i++) { 
    // for ($j=1; $j <=9 ; $j++) { 
        // if ($i==2 || $i==4 || $i==6 || $i==8) {
            // echo "+";
        // }else {
            // echo "-";
        // }
    // }echo "\n";
// }
// 
echo "Input Berapa Kali? ";
$input=trim(fgets(STDIN));
for ($i=1; $i <=$input ; $i++) { 
    echo "Input Ke-$i = ";
    $input_data[]=trim(fgets(STDIN));
}

function SelectionValue($i){
}
sort($input_data);
print_r ($input_data);
    
// // }
// // sort($bill)
// // print_r($bill)





?>