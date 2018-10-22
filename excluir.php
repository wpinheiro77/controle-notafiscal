<?php require_once 'assets/vendor/conecta.php';
  if(isset($_GET['nota_id']) && !empty($_GET['nota_id'])){
    $id = addslashes($_GET['nota_id']);
    $sql = "DELETE FROM notas WHERE nota_id = '$id'";
    $pdo->query($sql);
  }
  echo "<script>location.href='index.php';</script>";
?>