<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Games.com/config.php';

$cadastro = $_GET['cadastroClientes'];

require $conf['path'].'/Controllers/c_cliente.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"
    href="<?php echo $conf['url'] ?>/css/bootstrap.min.css">
  <link rel="stylesheet"
    href="<?php echo $conf['url'] ?>/css/styles.css">

  <title>Games.com</title>
</head>

<body>
  <!-- menu do site -->
  <?php include $conf['path'].'/includes/menu.php';?>
  <!--conteudo da pagina -->
  <div class="principal-cadastro">
    <div class="nilblock">
    </div>
      <h2 class="caixa-cadastro">
      <span>CADASTRE-SE</span>
      </h2>
      <p class="paragrafo-cadastro">Crie uma conta rápido e fácil com a gente</p>
      <p class="divisor-cadastro linhadiv">
        <span>Preencha o formulário abaixo</span>
      </p>
  </div>
</div>

<div class="container caixa-formulario efeito">
<div class="row align-items-center">
<article class="mt-5 col-6">

<form class="cadastroForm">

  <div class="form-group inputGroup">
    <label>Nome</label>
    <input type="text" class="form-control box-search" id="nome" aria-describedby="" placeholder="Digite seu nome">
  </div>

  <div class="form-group inputGroup">
    <label>E-mail</label>
    <input type="email" class="form-control box-search" id="email" placeholder="Digite sua senha">
  </div>

  <div class="form-group inputGroup">
    <label>CPF</label>
    <input type="number" class="form-control box-search" id="cpf" aria-describedby="" placeholder="Digite seu CPF">
  </div>

  <div class="form-group inputGroup">
    <label>Celular</label>
    <input type="number" class="form-control box-search" id="telefone" placeholder="Digite seu número">
  </div>

  <div class="form-group inputGroup">
    <label>Senha</label>
    <input type="password" class="form-control box-search" id="senha" placeholder="Digite sua senha">
  </div>

  <button type="submit" class="btn btn-success botao-cadastro box-search" id="cadastroClientes">Cadastrar</button>

</form>
  
</article>
</div>
</div>


  <!-- footer site -->
  <?php include $conf['path'].'/includes/footer.php';?>
</body>

</html>