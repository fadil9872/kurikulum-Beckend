<?php
echo "Siahkan Iputkan Data = ";
$input=trim(fgets(STDIN));


function SelectionValue($arr){
    $explode = explode('0',$arr);
    foreach ($explode as $key => $value) {
        $split[]=str_split($explode[$key],1);
    }
    foreach ($split as $key => $value) {
        sort($split[$key]);
    }
    print_r($split);

}
SelectionValue($input);
?>