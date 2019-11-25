<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Games.com/config.php';
$conn = require $conf['path'] . '/Models/conexao.php';


include $conf['path'] . '/Models/m_cliente.php';

/* Cadastrar o usuario no banco */
if (isset($_POST['cadastrar'])) {
  $data = [];
  foreach ($_POST as $key => $value) {
      if ($key != "cadastrar") {
          if ($key == "senha") {
              $data[$key] = password_hash($value, PASSWORD_DEFAULT);
          } else {
              $data[$key] = utf8_decode($value);
          }
      }
  }

  if (cadastrarUsuario($data, $conn)) {
    header("location:$conf[url]/Views/Clientes/retorno.php");
} else {
    echo "Erro para Cadastrar o Usuario ";
}
}

  // print_r($data);
  // cadastrarUsuario($data, $conn);


/* Verificar se o usuario existe no banco para poder acessar o sistema */
if (isset($_POST['acessar'])) {
    $usuario = validarUsuario($_POST['email'], $_POST['senha'], $conn);
    // var_dump($usuario);
    if ($usuario) {
        session_start();
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];
        header("location:$conf[url]/Views/Clientes/index.php");
    } else {
        header("location:$conf[url]/Views/Clientes/loginCliente.php");
    }
}



$conn->close();