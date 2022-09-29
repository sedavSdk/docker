<?php
error_reporting(E_ERROR | E_PARSE);
$arg = null;
$arg = $_GET['n'];
if($arg > 0 and $arg < 600){
echo '<svg width="10000" height="10000"> <circle cx="'.($arg).'" cy="'.($arg).'" r="'.($arg).'" fill="black"/>';
} else{
    echo "wrong n";
}
if($arg == 1){
    echo '<svg width="10000" height="10000"> <circle cx="100" cy="100" r="50" fill="black"/>';
    } elseif($arg == 2){
        echo '<svg width="10000" height="10000"> <rect x="110" y="100" height="50" width="100" fill="red"/>';
    } elseif($arg == 3){
        echo '<svg width="10000" height="10000"> <ellipse cx="100" cy="100" rx="50" ry = "100" fill="green"/>';
    } elseif($arg == 4){
        echo '<svg width="10000" height="10000"> <polygon points="250, 150 280, 209 346, 219 298,265 309, 330 250, 300 192, 330 203, 265 155, 219 221, 209"  fill="blue"/>';
    }
?>