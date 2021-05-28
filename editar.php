<?php 

require_once 'conexao.php';

require_once 'header.php';

?>

<div class="container">
     <?php 

     if (isset($_POST['atualizar'])) {
         # code...

         if (empty($_POST['nome'])    || empty($_POST['sobrenome']) ||
             empty($_POST['endereco']) || empty($_POST['contato'])) {
             # code...

             echo "Por favor preencha todos os campos requeridos";
         }else {
             # code...
             $nome      = $_POST['nome'];
             $sobrenome = $_POST['sobrenome'];
             $endereco  = $_POST['endereco'];
             $contato   = $_POST['contato'];

             $sql = "UPDATE usuarios SET nome = '{$nome}', sobrenome = '{$sobrenome}', endereco  = '{$endereco}', contato = '{$contato}'
                                     WHERE usuario_id = " . $_POST['usuarioid'];

             if ($con->query($sql) === TRUE) {
                 # code...
                 echo "<div class='alert alert-success'>Sucesso na atualização de usuário!.</div>";
             } else {
                 # code...
                 echo "<div class='alert alert-danger'>Error: Ocorreu um erro ao atualizar as informações do usuário</div>";
             }
                                      
         }
     }
 
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$sql = "SELECT * FROM usuarios WHERE usuario_id={$id}";
$result = $con->query($sql);

if ($result->num_rows < 1) {
    # code...
    header('Location: index.php');

    exit;
}
$row = $result->fetch_assoc();
?>

<div class="row">
   <div class="col-md-6 col-md-offset-3">
       <div class="box">
           <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFICAR usuário</h3>
           <form action="" method="POST">
                <input type="hidden" value="<?php echo $row['usuario_id']; ?>" name="usuarioid">

                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" class="form-control"><br>

                <label for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" name="sobrenome" value="<?php echo $row['sobrenome']; ?>" class="form-control"><br>

                <label for="endereco">Endereço</label>
                <textarea rows="4" name="endereco" class="form-control"><?php echo $row['endereco']; ?></textarea><br>
                
                <label for="contato">Contato</label>
                <input type="text" name="contato" id="contato" value="<?php echo $row['contato']; ?>" class="form-control"><br>

                <br>

                <input type="submit" name="atualizar" class="btn btn-success" value="Atualizar">
           </form>
       </div>
   </div>
</div>
</div>

<?php

require_once 'footer.php';