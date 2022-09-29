<?php
$password = $_GET['psw'];
$login= $_GET['uname'];
if($login == 'sedav' and $password == '1321'){
    header("Location: http://localhost:8000/index.php");
    exit();
} else {
    header("Location: http://localhost:8080");
    exit();
}
?>