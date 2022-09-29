<?php
$str = $_GET['command'];
if($str == "id" or $str == "whoami" or $str == "ls" or $str == "ps"){
exec($str, $out, $status);
print_r($out);
} else {
echo "access denied";
}
?>