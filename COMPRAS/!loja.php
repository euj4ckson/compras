<!-- HEADER BOOTSTRAP + INCLUDES + SESSION CONFIG -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Store</title>
</head>
<body>
  
</body>
</html>
<?php include 'header.php';
?>
<style>
   body{ background-position-x: -130px;
    background-position-y:53px;
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
 

    
</style>
<?php
  //  session_start();
  //  unset($_SESSION['carrinho']);
  


  // foreach ($i as $produto => $value) {
  //   # code...
  // }
  $carrinho = array();

  if(!isset($_SESSION)){ 
    session_start(); 
  } 

  if(!isset($_SESSION['compras'])){
    $_SESSION['compras'] = array();
  }
?>
<!-- BARRA DE NAVEGAÇÃO -->
<nav class="navbar navbar-expand-lg bg-light" id="navbarr">
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

         
      </ul>
    </div>
  </div>
</nav>
<!-- FORMULÁRIO COM PRODUTOS -->
<main>
  <form action="carrinho.php" method="post" class="produtos">
    <!-- MANDALORIAN -->
    <div class="card">
      <img src="img/sax.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sax Alto Dourado</h5>

        <p class="card-text">para tocar carelles suave</p>
        <p class="card-text">R$ 2000.00</p>

        <a  href="criar.php?codigo=Sax Alto Dourado&img=img/sax.png&valor=2000.00"  type="submit" class="btn btn-primary" name="produto" >Adicionar ao Carrinho</a>
      </div>
    </div>
    <!-- YODA -->
    <div class="card">
      <img src="img/palheta.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Palheta vandoren Java Verde</h5>
        <p class="card-text">Se essa não é a melhor você ta louco</p>
        <p class="card-text">R$ 38.00</p>
        <a class="btn btn-primary"  href="criar.php?codigo=Palheta vandoren Java Verde&img=img/palheta.png&qtde=1&valor=38.00"  type="submit"  name="produto">Adicionar ao Carrinho </a>

      </div>
    </div>

    <div class="card">
      <img src="img/palhetaz.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Palheta vandoren Java Azul</h5>
        <p class="card-text">Essa é mais duvidosa sei lá em</p>
        <p class="card-text">R$ 30.00</p>
        <a class="btn btn-primary"  href="criar.php?codigo=Palheta vandoren Java Azul&img=img/palhetaz.png&qtde=1&valor=30.00"  type="submit"  name="produto">Adicionar ao Carrinho </a>

      </div>
    </div>
    <div class="card">
      <img src="img/boquilha.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Boquilha Everton Paris</h5>
        <p class="card-text">Uso e recomendo tá</p>
        <p class="card-text">R$600.00</p>

        <a class="btn btn-primary"  href="criar.php?codigo=Boquilha Everton Paris&img=img/boquilha.png&qtde=1&valor=600.00"  type="submit"  name="produto">Adicionar ao Carrinho </a>

      </div>
    </div>
    <div class="card">
      <img src="img/saxm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Saxofone Halk Preto</h5>
        <p class="card-text">Isso é uma Maquina?</p>
        <p class="card-text">R$2600.00</p>

        <a class="btn btn-primary"  href="criar.php?codigo=Saxofone Halk Preto&img=img/saxm.png&qtde=1&valor=2600.00"  type="submit"  name="produto">Adicionar ao Carrinho </a>

      </div>
    </div>

    <div class="card">
      <img src="img/microfone.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Microfone Para Sax</h5>
        <p class="card-text">Pega até mosquito passando</p>
        <p class="card-text">R$400.00</p>

        <a class="btn btn-primary"  href="criar.php?codigo=Microfone Para Sax&img=img/microfone.png&qtde=1&valor=400.00"  type="submit"  name="produto">Adicionar ao Carrinho </a>

      </div>
    </div>
  </form>
  <audio src="img/jazz.mp3" autoplay="autoplay"  > asdasdasdasd</audio>

</main>
<!-- RODAPÉ BOOTSTRAP -->
<?php
    include 'footer.php';
?>