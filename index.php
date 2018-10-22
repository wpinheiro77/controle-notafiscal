<?php  require_once 'assets/vendor/header.php'; ?>
<div class="container">
<h1 class="pilotos">Controle de Notas Fiscais</h1>
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th>Empresa</th>
      <th>Nº Nota</th>
      <th>Valor</th>
      <th>Vencimento</th>
      <th>Entrada</th>
      <th>Pedido</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>

<?php
  $sql = "SELECT * FROM notas";
  $sql = $pdo->query($sql);
  if ($sql->rowCount() > 0) {

    foreach ($sql->fetchAll() as $usuarios) {
      echo '<td>'.$usuarios['empresa'].'</td>';
      echo '<td>'.$usuarios['nota'].'</td>';
      echo '<td>'.$usuarios['valor'].'</td>';
      echo '<td>'.$usuarios['vencimento'].'</td>';
      echo '<td>'.$usuarios['entrada'].'</td>';
      echo '<td>'.$usuarios['pedido'].'</td>';
      echo '<td><a href="editar.php?nota_id='.$usuarios['nota_id'].'">Editar</a> - <a href="excluir.php?nota_id='.$usuarios['nota_id'].'">Excluir</a> </td>';
      echo '</tr>';
    }
  } else {
    echo '<div class="alert alert-danger dados-erro" role="alert">';
    echo 'Não há dados gravados...';
    echo '</div>';
  }
?>
  </tbody>
</table>
<hr/>
<a href="cadastro.php">
  <button class="btn btn-primary">
    Cadastrar de Notas
  </button>
</a>
</div>
<?php require_once 'assets/vendor/footer.php' ?>