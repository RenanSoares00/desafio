<?php
session_start();
include('config.php');

$conn = dbconnect();

$nome = $_POST['nome'];


$nome = str_replace(' ', '%', $nome);
$sql = "SELECT c.id , c.cpf, c.nome , c.rg FROM clientes c 

 WHERE c.nome LIKE '%$nome%'";


$busca = mysqli_query($conn,$sql);

?>
<table border='0' cellpadding='2' style='width:1000px' cellspacing='2' >
<tr>
  <td>
    Nome
  </td>
  <td>
    CPF
  </td>
  <td>
    RG
  </td>
</tr>
<?php
$i = 0;
while($rs = mysqli_fetch_assoc($busca)){
  $id = $rs['id'];
  echo"
  <tr style='background: #bdbdff;cursor:pointer' onclick='setaCampos($id)'>
  <td>
    {$rs['nome']}
  </td>
  <td>
  {$rs['cpf']}
  </td>
  <td>
  {$rs['rg']}
  </td>
</tr>

";
$i++;
}
?>
</table>