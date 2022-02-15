<?php
session_start();

include_once'config.php';

$conn = dbconnect();

$valor = $_POST['valor'];

$id_cliente = $_POST['id_cliente'];

$rua = '';
$bairro = '';
$cidade = '';
$numero = '';
$estado = '';

if($id_cliente != ''){
  $sql = "SELECT * FROM clientes_endereco WHERE id_cliente = $id_cliente";
  $buscar = mysqli_query($conn,$sql);
  $valor = mysqli_num_rows($buscar);
?>
  <table border='0' cellpadding='2' style='width:1000px' cellspacing='2' >

 <?php 
 $i = 0;
  while($rs = mysqli_fetch_assoc($buscar)){
  
    $rua = $rs['rua'];
    $bairro = $rs['bairro'];
    $cidade = $rs['cidade'];
    $numero = $rs['numero'];
    $estado = $rs['estado'];

  echo"
    <tr>
    <td>
      <label for='rua'><strong>Rua</strong></label>
      <input name='rua[]' value='$rua' id='rua_$i' required  style='padding:5px' class='input' type='text' placeholder='Rua'>
    </td>
    <td>
    <label for='bairro'><strong>Bairro</strong></label>
    <input name='bairro[]' id='bairro_$i' value='$bairro' required style='padding:5px' class='input' type='text' placeholder='Bairro'>
    </td>
    <td>
    <label for='numero'><strong>Número</strong></label>
    <input name='numero[]' id='numero_$i' required value='$numero'  style='padding:5px' class='input' type='text' placeholder='Número'>
    </td>
    <td>
    <label for='cidade'><strong>Cidade</strong></label>
    <input name='cidade[]' id='cidade_$i' required value='$cidade' style='padding:5px' class='input' type='text' placeholder='Cidade'>
    </td>
    <td>
    <label for='estado'><strong>Estado</strong></label>
    <input name='estado[]' id='estado_$i' value='$estado' required  style='padding:5px' class='input' type='text' placeholder='Estado'>
    </td>

  </tr>
  ";
  }
  ?>
  <input type="hidden" id="tot_end" name="tot_end" value="<?= $i?>">
  </table>


<?php
}else{
?>
<table border='0' cellpadding='2' style='width:1000px' cellspacing='2' >

<?php

for($i = 0 ; $i < $valor ; $i++ ){

echo"
  <tr>
  <td>
    <label for='rua'><strong>Rua</strong></label>
    <input name='rua[]' id='rua_$i' required  style='padding:5px' class='input' type='text' placeholder='Rua'>
  </td>
  <td>
  <label for='bairro'><strong>Bairro</strong></label>
  <input name='bairro[]' id='bairro_$i' required style='padding:5px' class='input' type='text' placeholder='Bairro'>
  </td>
  <td>
  <label for='numero'><strong>Número</strong></label>
  <input name='numero[]' id='numero_$i' required  style='padding:5px' class='input' type='text' placeholder='Número'>
  </td>
  <td>
  <label for='cidade'><strong>Cidade</strong></label>
  <input name='cidade[]' id='cidade_$i' required style='padding:5px' class='input' type='text' placeholder='Cidade'>
  </td>
  <td>
  <label for='estado'><strong>Estado</strong></label>
  <input name='estado[]' id='estado_$i' required  style='padding:5px' class='input' type='text' placeholder='Estado'>
  </td>

</tr>
";
}
?>
<input type="hidden" id="tot_end" name="tot_end" value="<?= $i?>">
</table>
<?php
}