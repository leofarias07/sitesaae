<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
      
  </head>
  <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <section class="bem-vindos">
    <header class="cabecalho fixed-top" role="banner">
    <div class="container">
      <a href="index.php" class="logo">
        <img src="imagens/logobranca.png" alt="logotipo">
      </a>

      <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloco-buscar" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search" aria-hidden="true"></i>
</button>
      <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menuprincipal" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-bars" aria-hidden="true"></i>
</button>

      <form action="#" id="bloco-buscar" class="collapse">
        <div class="container-bloco-buscar">
          <input type="text" placeholder="Buscar...">
          <input type="submit" value="Buscar">
        </div>
      </form>

      <nav id="menuprincipal" class="collapse">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="sobre.php">Quem Somos</a></li>
          <li><a href="servicos.php">Serviços</a></li>
          <li><a href="contato.php">Contato</a></li>
          
        </ul>
      </nav>
      </div>
    </header>
  </section>