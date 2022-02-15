<?php
session_start();
include('config.php');

$conn = dbconnect();

$id_cliente = $_POST['id_cliente'];


$sql = "SELECT c.id , c.cpf, c.nome , c.rg,c.telefone,DATE_FORMAT(c.data,'%d/%m/%Y') AS data FROM clientes c 
 WHERE c.id = $id_cliente";


$busca =  mysqli_query($conn,$sql);


 while($rs = mysqli_fetch_assoc($busca)){

  $id = $rs['id'];
  $cpf = $rs['cpf'];
  $nome = $rs['nome'];
  $rg = $rs['rg'];
  $telefone = $rs['telefone'];
  $data = $rs['data'];

 }
echo json_encode(array('id' => $id,'cpf'=> $cpf, 'nome' => $nome, 'rg' => $rg, 'telefone'=>$telefone, 'data_nasc' => $data));