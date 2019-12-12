<?php
$arr1 = [1, 2, 3, 4];
$arr2 = [2, 12, 9, 5];
$arr3 = [7, 2, 1, 2];
$arr4 = [4, 11, 2, 3];
$T=0;

$arr = [
    $arr1,
    $arr2,
    $arr3,
    $arr4
];
var_dump($arr);
for ($i = 0; $i < count($arr); $i++){
    for ($j = 0; $j < count($arr[$i]);$j++){
        if ($i == $j){
            $T += $arr[$i][$j];

        }
    }
}
echo "tổng của các số ở đường chéo chính: ".$T;
?>