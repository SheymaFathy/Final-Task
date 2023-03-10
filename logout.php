<?php 
require_once("connect.php");

if(isset($_SESSION['auth_id'])) {
    unset($_SESSION['auth_id']);
}

header('Location: index.php');
?>