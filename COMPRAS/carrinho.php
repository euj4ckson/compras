 <?php
    include 'Carrinho.class.php';

    include 'header.php';
    ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Carrinho</title>
 </head>
 <body>
  <style> .divcar,#divcar{
    color: white!important;
    text-align: center !important;
    margin-left:180px;    
  }
  body{
    overflow-x: hidden;
    background-image: url(img/fundocortado.jpg);
    background-repeat: no-repeat !important;
    background-size: cover !important;
    
}

  #limpeza{
      text-align: center;
      background-color: rebeccapurple;
      margin-top: 400px; 
      color:black;
      background-color:gainsboro;
    }
    

.text-box {
    margin-left:1350px;
}

.btn:link,
.btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 15px 40px;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: absolute;
  float: right;

}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
    background-color: #fff;
    color: #777;
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn-white::after {
    background-color: #fff;
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

.btn-animated {
    animation: moveInBottom 5s ease-out;
    animation-fill-mode: backwards;
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
#msgcar{
  margin-left:680px; 
  margin-bottom:-680px; 
  color:white;

}
.card{
  top:20px;
  opacity : 1.0;
  background-image: url(img/fundopd.png) ;
  background-color:black;
}
.card-body{
  color:white;
  opacity : 1.0;

}
#bodymod{
    color:black;
}
#final{
  margin-left:1030px;  
  background-color:azure;
  font-size:15px;
  position: absolute;

}
.total{
  color: white;
  margin-top:-430px;
  margin-bottom:-15px;
  margin-left:800px;

  display: inline-block;




  
}
  
    </style>
  
   <!-- BARRA DE NAVEGAÇÃO -->
   <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <img src="img/fundonavbar.jpg" alt="" width=40px height=40px >

    <span class="navbar-brand" href="#">Music Store</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="!loja.php">Loja de itens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="carrinho.php">Carrinho</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="final" href="carrinho.php"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Finalizar Compra</a>
        </li>

         
      </ul>
    </div>
  </div>
</nav>
 
 

<?php
  
    $carrinho = array(); 
    ?>
         

        <div  class="text-box">
    <a href="#  " id="limpeza"   data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-white btn-animate">Limpar itens</a>
    
     
  </div>

    <!-- MODAL LIMPAR CARRINHO -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">REALMENTE DESEJA LIMPAR SEU CARRINHO?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Executar essa ação fará com que todos seus itens sejam apagados desta sessão mesmo que tenha adicionado mais de um item do mesmo tipo.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <a href="limpar.php"><button type="button" class="btn btn-primary">Confirmar</button></a>
      </div>
    </div>
  </div>
</div>
<script></script>
<?php
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = array();
    echo "<span id='msgcar'>CARRINHO VAZIO!</span>";
}

    foreach($_SESSION['carrinho'] as $cod => $itemCarrinho){
        echo('<div id="produto"<div class="card">
        <img src='.$itemCarrinho->img.' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$itemCarrinho->itens.'</h5>
                    <!-- Modal -->
                    <div class="modal fade" id="exaampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar para Excluir</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" id="bodymod">
                            Deseja mesmo excluir este item?
                        </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="deletar.php?codigo='.$cod.'"><button type="button" class="btn btn-primary">Confirmar</button></a>
                            <div class="modal-footer">
                        </div>
      
                          </div>
                        </div>
                      </div>
                    </div>
                    <h5 class="card-title">'.$itemCarrinho->valor.'</h5>
                    
                   
                    <a href="editar.php?codigo='.$cod.'"  id="btnmais">+</a>
                    <span id= "qtde">'.$itemCarrinho->qtde.'</span>
                    <a href="sub.php?codigo='.$cod.'"  id="btnmenos">-</a>
                    <!-- Button trigger modal -->
                
                <a href="deletar.php?codigo='.$cod.'"   data-bs-toggle="modal" data-bs-target="#exaampleModal"> <img src="img/icone.png" alt=""> </img></a>


             
                              </div>
                              </div>
                </div>'
              );

             
    }
     
    echo '<pre>';
print_r($_SESSION['carrinho']);
$total= 0;
  
foreach ($_SESSION['carrinho'] as $key => $value) {

    $total+=$value->valor;
     
  }


 

  $_SESSION['total']=$total;

  
 
?>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">TOTAL A PAGAR</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
     <h2>Total :<?php echo 'R$'. $_SESSION['total'] .',00'?> </h2>

  </div>
</div>

   

<?php
       
    include 'footer.php';
?>