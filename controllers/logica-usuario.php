<?php
session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
     header("Location: ../pages/login.php?falhaDeSeguranca=true");
     die();
  }
}

function verificaLogado() {
  if(usuarioEstaLogado()) {
     header("Location: ../pages/usuarios.php");
     die();
  }
}



function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
    $_SESSION["usuario_logado"] = $email;
}

function logout() {
    session_destroy();
}
