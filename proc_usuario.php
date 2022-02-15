<?php include_once"config.php";
?>


<html>
<body>
<?php 
$login = $_POST["login"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$login = $_POST["login"];

$conn = dbconnect();

$sql = "INSERT INTO usuario (login,nome,senha,telefone,cpf,email) VALUES ('$login','$nome','$senha' , '$telefone', '$cpf' , '$email')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Usuário Cadastrado com Sucesso !'); window.location = 'login.php';</script>";

}else{
 echo "Ocorreu um erro ao realizar o Cadastro " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>