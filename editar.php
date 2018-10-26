<?php require_once 'assets/vendor/header.php';

$id = 0;
if(isset($_GET['nota_id']) && !empty($_GET['nota_id'])){
  $id = addslashes($_GET['nota_id']);
}
if(isset($_POST['empresa']) && !empty($_POST['empresa'])){
  $empresa    = addslashes($_POST['empresa']);
  $nota       = addslashes($_POST['nota']);
  $valor      = addslashes($_POST['valor']);
  $vencimento = addslashes($_POST['vencimento']);
  $entrada    = addslashes($_POST['entrada']);
  $pedido     = addslashes($_POST['pedido']);

  $sql = "UPDATE notas SET empresa = '$empresa', nota = '$nota', valor = '$valor', vencimento = '$vencimento', entrada = '$entrada', pedido = '$pedido' WHERE nota_id = '$id'";
  $sql = $pdo->query($sql);
  echo "<script>location.href='index.php';</script>";
}
  $slq = "SELECT * FROM notas WHERE nota_id = '$id'";
  $sql = $pdo->query($slq);
  if($sql->rowCount() > 0){
    $dado = $sql->fetch();
  } else {
    #echo "<script>location.href='index.php';</script>";
  }
?>
<br/>
<div class="container-fluid title">
  <div class="container">
    <h1 class="alert alert-primary">Editar Notas</h1>
  </div>
</div>

<div class="container-fluid">
  <div class="container">
    <form method="POST">
      <div class="form-group">
        <label for="empresa">Empresa</label>
        <input class="form-control" type="text" name="empresa" placeholder="Digite o nome da empresa" value="<?php echo $dado['empresa']; ?>">
      </div>
      <div class="form-group">
        <label for="nota">Nº Nota Fiscal</label>
        <input class="form-control" type="number" name="nota" placeholder="Digite o número da Nota Fiscal" value="<?php echo $dado['nota']; ?>">
      </div>
      <div class="form-group">
        <label for="">Valor</label>
        <input class="form-control valor" type="text" name="valor" placeholder="Digite o valor" value="<?php echo $dado['valor']; ?>">
      </div>
      <div class="form-group">
        <label for="vencimento">Vencimento</label>
        <input class="form-control" type="date" name="vencimento" placeholder="" value="<?php echo $dado['vencimento']; ?>">
      </div>
      <div class="form-group">
        <label for="entrada">Entrada</label>
        <input class="form-control" type="date" name="entrada" placeholder="" value="<?php echo $dado['entrada']; ?>">
      </div>
      <div class="form-group">
        <label for="pedido">Pedido</label>
        <input class="form-control" type="number" name="pedido" placeholder="Digite o número do pedido" value="<?php echo $dado['pedido']; ?>">
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit">Editar</button>
      </div>
    </form>
  </div>
</div>
<?php require_once 'assets/vendor/footer.php' ?>