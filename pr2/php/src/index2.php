<?php
function selectSort(array $arr) {
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }

    for ($i = 0; $i < $count; $i++){
        $k = $i;

        for($j = $i + 1; $j < $count; $j++){
            if ($arr[$k] > $arr[$j]){
                $k = $j;
            }

            if ($k != $i){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }

    return $arr;
}

error_reporting(E_ERROR | E_PARSE);
$str = $_GET['mass'];
$mass = null;
$mass = explode(',', $str);
$t = true;
if($t){
print_r(selectSort($mass));
} else{
    echo "please use nubers 0-9";
}
?>