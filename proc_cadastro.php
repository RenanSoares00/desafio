<?php 
include_once"config.php";
?>


<html>
<body>
<?php 
$nome = $_POST["nome_cli"];
$cpf = $_POST["cpf"];
$telefone = $_POST["tel"];
$rg = $_POST["rg"];
$data = $_POST["data"];

$data = implode("-",array_reverse(explode("/",$data)));

$id = $_POST['id_cli_sel'];

$num = $_POST['tot_end'];

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

if($num == ''){
    $num = '-1';
}
$conn = dbconnect();
$acao = $_POST['acao'];
$sucesso = 0;
switch($acao){
//INSERIR
    case "1":
        $sql = "INSERT INTO clientes(nome,data,cpf,rg,telefone)VALUES('$nome','$data','$cpf','$rg','$telefone')";
       // die("<pre>$sql");
        mysqli_query($conn, $sql) or $sucesso = 1;
        
        $pega_id = "SELECT max(id) AS id_cliente from clientes";
        $buscar = mysqli_query($conn, $pega_id) or $sucesso = 1;

        $dados=mysqli_fetch_array($buscar);

        $id_cliente = $dados['id_cliente'] ; 

        for($i = 0 ; $i < $num; $i++){
            
            $insert = "INSERT INTO clientes_endereco(id_cliente,rua,bairro,numero,cidade,estado)VALUES(
                        $id_cliente,'$rua[$i]','$bairro[$i]','$numero[$i]','$cidade[$i]','$estado[$i]');";
            mysqli_query($conn, $insert);
        }

        if ($sucesso == 0) {
            echo "<script>alert('Cliente Cadastrado com Sucesso !'); window.location = 'area_cliente.php';</script>";
            
            }else{
             echo "Ocorreu um erro ao realizar o Cadastro " . $sql . "<br>" . mysqli_error($conn);
            }
    break;

    case "2":

        $delete = "DELETE FROM clientes_endereco WHERE id_cliente = $id";

        mysqli_query($conn,$delete);

        for($i = 0 ; $i < $num; $i++){
            $insert = "INSERT INTO clientes_endereco(id_cliente,rua,bairro,numero,cidade,estado)VALUES(
                        $id,'$rua[$i]','$bairro[$i]','$numero[$i]','$cidade[$i]','$estado[$i]');";
                      //  die("$insert");
            mysqli_query($conn, $insert);
        }

        $sql = "UPDATE clientes set nome = '$nome',
                                    cpf = '$cpf',
                                    rg = '$rg',
                                    data = '$data',
                                    telefone = '$telefone'
                                    where id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Cliente Alterado com Sucesso !'); window.location = 'area_cliente.php';</script>";
            
        }else{
            echo "Ocorreu um erro ao realizar a Alteração " . $sql . "<br>" . mysqli_error($conn);
        }
    break;


    case "3":
        $delete = "DELETE FROM clientes_endereco WHERE id_cliente = $id";
        mysqli_query($conn,$delete);

        $sql = "DELETE FROM clientes WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Cliente Excluido com Sucesso !'); window.location = 'area_cliente.php';</script>";
            
        }else{
            echo "Ocorreu um erro ao realizar a Exclusão " . $sql . "<br>" . mysqli_error($conn);
        }
    break;
}

mysqli_close($conn);
?>
</body>
</html>