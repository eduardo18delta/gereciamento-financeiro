<?php

require_once 'Conexao.php';

class Login{

	public $username;
	public $password;
	public $login;
	public $contador;

	function loginUsuario()
	{

	//Verifica se o usuário realmente existe no banco de dados;
	$conexao = Conexao::conectarBanco();
        $this->login = $conexao->prepare("SELECT u_username, u_password FROM t_users WHERE u_username = :username AND u_password = :password");
        $this->login->bindValue(":username", $this->username, PDO::PARAM_STR);
        $this->login->bindValue(":password", $this->password, PDO::PARAM_STR);
        $this->login->execute();

        $this->contarUsuario();
	}

	//Caso a quantidade de usuários seja maior que 0 o sistema redireciona para o menu;
	function contarUsuario(){

		 $this->contador = $this->login->fetchAll(PDO::FETCH_ASSOC);
		 	if (count($this->contador) <= 0){
    			include 'erros/error.php';
    		exit;
		}

		header("Location: ../menu.php");

		$this->loggaUsuario();

	}
		
	function loggaUsuario(){

	$user = $this->contador[0];

		session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['user_name'] = $user['name'];
	
	}

	function verificaLogado(){
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }

    return true;

	}

	function deslogarUsuario(){

	// inicia a sessão
		session_start();

	// muda o valor de logged_in para false
		$_SESSION['logged_in'] = false;

	// finaliza a sessão
		session_destroy();

	// retorna para a index.php
		header('Location: ../index.php');
}


	function checkLogin(){

	$conexao = Conexao::conectarBanco();
		if (!isLoggedIn()){
    	header('Location: index.php');
	}

}

}


?>