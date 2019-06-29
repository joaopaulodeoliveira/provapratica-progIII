<?php
  session_start();
  
  require_once 'conexao.php';

  $nome = $_POST['nome'];

  $apelido = $_POST['apelido'];
  
  $telefone = $_POST['telefone'];

  $email = $_POST['email'];

   if(empty($nome) || empty($apelido) || empty($telefone) || empty($email)){

    $campo_vazio.= 'campo_vazio=1';

    header('Location:  cadastro.php?'.$campo_vazio);
    die();

  }else{
    //regex email
    $regex = "/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/";
    
    $telefone_email ='';
    
    if(!preg_match($regex, $email)){
    $telefone_email.= "email_invalido=1&";
    }
    
    //regex telefone
    $regex = "/^\([0-9]{2}\) ?[0-9]{9}$/";

     if(!preg_match($regex, $telefone)){
    $telefone_email.= "telefone_invalido=1&";
    }

    if ($telefone_email != '') {
      header('Location: cadastro.php?'.$telefone_email);
      die();
    }


    if(!isset($nome[5])){
      $telefone_email.= "email_invalido=1&";
    }

    if(!isset($nome[4])){
      $telefone_email.= "email_invalido=1&";
    }

    else{

      $contato_adicionado = '';
try{
  $sql = "INSERT INTO usuarios(nome, apelido, telefone, email) VALUES (:nome,:apelido,:telefone,:email)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':apelido', $apelido);
  $stmt->bindParam(':telefone', $telefone);
  $stmt->bindParam(':email', $email);
  if ($stmt->execute())
  {
      $contato_adicionado = 'contato_adicionado=1';
     header('Location: cadastro.php?'.$contato_adicionado);
    exit;

  }else{
      header('Location: cadastro.php?'.$contato_adicionado);
  }
  

   }catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    }

  }
}
?>
