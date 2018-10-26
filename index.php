<?php require_once 'assets/vendor/header.php';

if(isset($_GET['ordem']) && !empty($_GET['ordem'])){ #verifica se ordem foi enviado
  $ordem = addslashes($_GET['ordem']); #pega o que foi enviado no select
  $sql = "SELECT * FROM notas ORDER BY ".$ordem; #faz a busca baseado no que foi selecionado no select e jogado na $ordem
} else {
  $ordem = ""; #deixa aqui para que seja mostrado o item selecionado no select e ele não fique vazio
  $sql = "SELECT * FROM notas"; #faz a listagem sem critérios por default ao carregar a página
}
?>
<br/>
<div class="container title">
  <h1 class="alert alert-primary">Controle de Notas Fiscais</h1>
  <div class="form-group">
    <form method="get">
      <label for="ordem">Ordenar...</label>
      <select name="ordem" class="form-control" onchange="this.form.submit()">
        <option value=""></option>
        <option value="empresa" <?php echo($ordem=="empresa")?'selected="selected"':''; ?> >Empresa</option>
        <option value="nota" <?php echo($ordem=="nota")?'selected="selected"':''; ?> >Nota</option>
        <option value="entrada" <?php echo($ordem=="entrada")?'selected="selected"':''; ?> >Entrada</option>
        <option value="vencimento" <?php echo($ordem=="vencimento")?'selected="selected"':''; ?> >Vencimento</option>
        <option value="pedido" <?php echo($ordem=="pedido")?'selected="selected"':''; ?> >Pedido</option>
      </select>
    </form>
    </div>
</div>

<div class="container">
  <table class="table">
    <tr>
      <thead class="thead-dark">
        <th>Empresa</th>
        <th>Nota</th>
        <th>Valor</th>
        <th>Entrada</th>
        <th>Vencimento</th>
        <th>Pedido</th>
        <th>Ações</th>
      </thead>
    </tr>

    <?php
      $sql = $pdo->query($sql);
      if($sql->rowCount() >0){
        foreach($sql->fetchAll() as $notas):
    ?>
    <tr>
      <tbody>
        <td><?php echo $notas['empresa']; ?></td>
        <td><?php echo $notas['nota']; ?></td>
        <td><?php echo $notas['valor']; ?></td>
        <td><?php echo $notas['entrada']; ?></td>
        <td><?php echo $notas['vencimento']; ?></td>
        <td><?php echo $notas['pedido']; ?></td>
        <?php
          echo '<td><a href="editar.php?nota_id='.$notas['nota_id'].'">Editar</a> - <a href="excluir.php?nota_id='.$notas['nota_id'].'">Excluir</a> </td>';
        ?>
      </tbody>
    </tr>
        <?php endforeach; } ?>
  </table>
  <a class="btn btn-primary" href="cadastrar.php" role="button">Cadastrar</a>
</div>

<?php require_once 'assets/vendor/footer.php' ?>