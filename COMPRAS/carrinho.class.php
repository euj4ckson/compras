<?php 
session_start();

    class Carrinho{
        var $itens ;
        var $img;
        var $qtde;
        var $valor;
    }

function criar(){


$compra = new Carrinho;
$compra ->itens = $_REQUEST['codigo'];
$compra -> qtde = "1";
$compra -> img =  $_REQUEST['img'];
$compra -> valor =  $_REQUEST['valor'];
    
if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array();
}

$_SESSION['carrinho'][]=$compra;

 


}
function limpar(){



unset($_SESSION['carrinho']);

}

function deletar(){

    $cod= $_GET['codigo'];

    unset($_SESSION['carrinho'][$cod]);

}

function adicionar(){

    $cod= $_GET['codigo'];
    
    $_SESSION['carrinho'][$cod]->qtde+=1;



}
function sub(){

    $cod= $_GET['codigo'];
    
    $_SESSION['carrinho'][$cod]->qtde-=1;
    $cmd= $_SESSION['carrinho'][$cod]->qtde;
    echo $cmd;

    if ($_SESSION['carrinho'][$cod]->qtde<=0) {
        echo "erro";
        $_SESSION['carrinho'][$cod]->qtde=1;
    }



}

?>


