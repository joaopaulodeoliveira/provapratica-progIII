<?php session_start(); 
require_once "conexao.php";
require_once "valida.php";
                    

?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content=" width=device-width user-scalable=no">
  <title>Lista de Contatos</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/listar.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Anton|Fjalla+One|Lobster&display=swap" rel="stylesheet"> -->
<body>


    <div class="center-cadastro">
    
      <div class="span-frase">
        
        <span class="frase">Lista de Contatos</span>

      </div>

        <div style="overflow-x:auto;"> 
        <table>
        <th>Nome</th><th>Apelido</th><th>Telefone</th><th>E-mail</th><th>Excluir</th>
          </thead>
            <tbody>
                <?php
                    $sql = "select * from usuarios";            
                    foreach (getConnection()->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['apelido']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['email']."</td>";
                ?>


                    <td><div class='group'>
                    <a href='<?php echo "excluir.php?id=".$row['id'];?>'><button class='botao' type='button'>Excluir</button></a>
                  </div></td>
                

                  <?php
                  echo "</tr>";
                 }
                ?>
              </tbody>
      </table>
      
      </div>
    
  

        <div class="group">

        <div class="listar">
          <a href="cadastro.php"><button class="button-cadastrar" type="button">Cadastrar novo</button></a>
        
        </div>
       
       
       </div> 
    
    
       

      </div>
        <?php
          if($contato_excluido){
                    echo"<div class='sucesso'><span class='msg-sucesso'>O contato foi excluído com sucesso!</span></div>";
                  }
            ?>
    </body>
</html>