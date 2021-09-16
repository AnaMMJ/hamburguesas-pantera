<?php 
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location:product2.html');
} else{
    header('Location:database.php');
}

?>