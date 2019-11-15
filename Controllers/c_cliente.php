<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Games.com/config.php';
$conn = require $conf['path'] . '/Models/conexao.php';

// var_dump($conn);
if($cadastro == "" || $cadastro == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('OS CAMPOS DEVEM SER PREENCHIDOS');window.location.href='
  cadastroClientes.php';</script>";

}else{
  if($cadastroarray == $cadastro){
    echo"<script language='javascript' type='text/javascript'>
    alert('ESSES DADOS JÁ EXISTEM');window.location.href='
    cadastroClientes.php';</script>";
    die();

  }else{
    $query = "INSERT INTO usuario (nome_usuario, telefone, cpf, email, senha) VALUES ('$nome','$telefone', '$cpf', '$email', '$senha')";
    $insert = mysql_query($query,$connect);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>;
      alert('USUÁRIO CADASTRADO COM SUCESSO!');window.location.href='
      cadastroClientes.php'</script>";

    }else{
      echo"<script language='javascript' type='text/javascript'>;
      alert('NÃO FOI POSSÍVEL CADASTRAR ESSE USUÁRIO!');window.location.href='
      cadastroClientes.php'</script>";
    }

  }
}

