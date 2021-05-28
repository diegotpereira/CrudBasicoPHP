<?php

require_once 'conexao.php';
require_once 'header.php';

?>

<div class="container"> 

<?php

if (isset($_POST['addNovo'])) {
    # code...

    if (empty($_POST['nome']) || empty($_POST['sobrenome']) 
        || empty($_POST['endereco']) || empty($_POST['contato'])) {
        # code...

        echo "Por favor preencha todos os campos requeridos";
    } else {
        # code...
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $endereco = $_POST['endereco'];
        $contato = $_POST['contato'];

        if (empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['endereco']) || empty($_POST['contato'])) {
            # code...
            echo "Por favor preencha todos os campos requeridos";
        }

        $sql = "INSERT INTO usuarios (nome, sobrenome, endereco, contato) 
                              VALUES ('$nome', '$sobrenome', '$endereco', '$contato')";

        if ($con->query($sql) === TRUE) {
            # code...
            echo "<div class='alert alert-sucess'>Sucesso, novo usuário adicionado!.</div>";
        } else {
            # code...
            echo "<div class='alert alert-danger'>Error: Ocorreu um erro ao adicionar novo usuário.</div>";
        }
        
    }
    
}
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
      <div class="box">
      <h3><i class="glyphicon-plus"></i>&nbsp;Novo Usuário</h3>

      <form action="" method="POST">
         <label for="nome">Nome</label>
         <input type="text" id="nome" name="nome" class="form-control"><br>

         <label for="sobrenome">Sobrenome</label>
         <input type="text" id="sobrenome" name="sobrenome" class="form-control"><br>

         <label for="endereco">Endereço</label>
         <input type="text" id="endereco" name="endereco" class="form-control"><br>

         <label for="contato">Contato</label>
         <input type="text" id="contato" name="contato" class="form-control"><br>

         <br>

         <input type="submit" name="addNovo" class="btn btn-sucess" value="Salvar">
      </form>
      </div>
  </div>
</div>
</div>
<?php
require_once 'footer.php';