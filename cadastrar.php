<?php require_once 'assets/vendor/header.php';

if(isset($_POST['empresa']) && !empty($_POST['empresa'])){
  $empresa    = addslashes($_POST['empresa']);
  $nota       = addslashes($_POST['nota']);
  $valor      = addslashes($_POST['valor']);
  $vencimento = addslashes($_POST['vencimento']);
  $entrada    = addslashes($_POST['entrada']);
  $pedido     = addslashes($_POST['pedido']);

$sql = "INSERT INTO notas Set empresa = '$empresa', nota = '$nota', valor = '$valor', vencimento = '$vencimento', entrada = '$entrada', pedido = '$pedido' ";
$sql = $pdo->query($sql);
echo "<script>location.href='index.php';</script>";
}
?>
<br/>
<div class="container title">
  <div class="container-fluid">
    <h1 class="alert alert-primary">Cadastro de Notas</h1>
    <form method="POST">
      <div class="form-group">
        <label for="empresa">Empresa</label>
        <input class="form-control" type="text" name="empresa" placeholder="Digite o nome da empresa">
      </div>
      <div class="form-group">
        <label for="nota">Nº Nota Fiscal</label>
        <input class="form-control" type="number" name="nota" placeholder="Digite o número da Nota Fiscal">
      </div>
      <div class="form-group">
        <label for="">Valor</label>
        <input class="form-control valor" type="text" name="valor" placeholder="Digite o valor">
      </div>
      <div class="form-group">
        <label for="vencimento">Vencimento</label>
        <input class="form-control" type="date" name="vencimento" placeholder="">
      </div>
      <div class="form-group">
        <label for="entrada">Entrada</label>
        <input class="form-control" type="date" name="entrada" placeholder="">
      </div>
      <div class="form-group">
        <label for="pedido">Pedido</label>
        <input class="form-control" type="number" name="pedido" placeholder="Digite o número do pedido">
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
      </div>
    </form>
  </div>
</div>
<?php require_once 'assets/vendor/footer.php' ?>