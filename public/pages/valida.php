<?php

session_start();

if (isset($_GET['campo_vazio'])) {
    $campo_vazio = $_GET['campo_vazio'];
}else{
    $campo_vazio =0;
}

if(isset($_GET['telefone_invalido'])){

$telefone_invalido = $_GET['telefone_invalido'];

}else{
    $telefone_invalido = 0;
}

if(isset($_GET['telefone_invalido'])){

$telefone_invalido = $_GET['telefone_invalido'];

}else{
    $telefone_invalido = 0;
}

if(isset($_GET['telefone_invalido'])){

$telefone_invalido = $_GET['telefone_invalido'];

}else{
    $telefone_invalido = 0;
}

if(isset($_GET['email_invalido'])){

$email_invalido = $_GET['email_invalido'];

}else{
    $email_invalido = 0;
}


if (isset($_GET['contato_adicionado'])){
	
	$contato_adicionado = $_GET['contato_adicionado'];

}else{
    $contato_adicionado = 0;
}

if (isset($_GET['contato_excluido'])){
	
	$contato_excluido = $_GET['contato_excluido'];

}else{
    $contato_excluido = 0;
}


?>
