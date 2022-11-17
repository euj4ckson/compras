<?php 
include 'carrinho.class.php';


limpar();
header('location:carrinho.php');    

unset($_SESSION['total']);
?>
