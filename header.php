<?php

require_once 'class/Chamadordeheader.php';

//recuperando váriavel da URl
$titulo = $_REQUEST['titulo'];

$page = new Chamadordeheader();
$page->chamaHeader($titulo);

$page->titulo;
$page->icon;


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Author" content="Eduardo Henrique">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema para grenciamento orçamentário pessoal">
        <link rel="stylesheet" href="http://127.0.0.1/financeiro/assets/css/style.css">
        <link rel="shortcut icon" href=<?=$page->icon?>>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Sistema - <?=$page->titulo?></title>
    </head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<ul class="nav navbar-nav">
      <li><a href="#">Gerenciamento Financeiro - <?=$page->titulo?></a></li> 
</ul>
</div>
</nav>


 

