<?php 
include 'header.php';
include 'carrinho.class.php';

$cod= $_GET['codigo'];
adicionar();

header('location:carrinho.php');


include 'footer.php';
?>