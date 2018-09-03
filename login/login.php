<?php

// inclui a Classe de Login
require '../class/Login.php';

//Iniciando a class Login();
$login = New Login();

// resgata variáveis do formulário
$login->username = $_POST['username'];
$login->password = $_POST['password'];

//Função de Login
$login->loginUsuario();







