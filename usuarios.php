<?php

require_once 'conexao.php';
require_once 'header.php';

echo "<div class='container'>";

if (isset($_POST['delete'])) {
    # code...
    $sql = "DELETE FROM usuarios WHERE usuario_id" .$_POST['usuarioid'];

    if ($con->query($sql) === TRUE) {
        # code...

        echo "<div class='alert alert-success'>Usuário excluído com sucesso</div>";
    }
}

$sql = "SELECT * FROM usuarios";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    # code...
?> 
<h2>Lista de Usuários</h2>    
<table class="table table-bordered table-striped">
      <tr>
         <td>Nome</td>
         <td>Sobrenome</td>
         <td>Endereço</td>
         <td>Contato</td>
         <td width="70px">Deletar</td>
         <td width="70px">Editar</td>
      </tr>

      <?php 

      while ($row = $result->fetch_assoc()) {
          # code...
          echo "<form action='' method='POST'>";
          echo "<input type='hidden' value='".$row['usuario_id']."' name='usuarioid' />";
          echo "<tr>";
          echo "<td>".$row['nome']."</td>";
          echo "<td>".$row['sobrenome']."</td>";
          echo "<td>".$row['endereco']."</td>";
          echo "<td>".$row['contato']."</td>";
          echo "<td><input type='submit' name='delete' value='Deletar' class='btn btn-danger' /></td>";
          echo "<td><a href='editar.php?id=".$row['usuario_id']."' class='btn btn-info'>Editar</a></td>";
          echo "</tr>";
          echo "</form>";
      }
?>      
</table>

<?php 
}else {
    # code...
    echo "<br><br>Nenhum Registro Encontrad";
}
?>
</div>

<?php 

require_once 'footer.php';