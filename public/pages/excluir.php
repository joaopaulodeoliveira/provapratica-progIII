<?php
session_start();
require 'conexao.php';

  $id = $_GET['id'];

  $contato_excluido = '';
try{

  $sql = "DELETE FROM usuarios WHERE id = :id";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':id', $id);
  if ($stmt->execute())
  {
      $contato_excluido = 'contato_excluido=1';
     header('Location: listar.php?'.$contato_excluido);
    exit;

  }else{
      header('Location: listar.php?'.$contato_excluido);
  }
  

   }catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    }

?>