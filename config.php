<?php
/* $servidor = "localhost"; // localhost
 $dbname = "desafio"; //  banco
 $dbusuario = "root"; // usuário  banco
 $dbsenha = ""; // senha  banco
 $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 if (!$conn) {
      die("Falha na Conexão: " . mysqli_connect_error());
}
*/
function dbconnect()
{
 $servidor = "localhost"; // localhost
 $dbname = "desafio"; //  banco
 $dbusuario = "root"; // usuário  banco
 $dbsenha = ""; // senha  banco
    global $conn;
    $connect = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
    if(!$connect){
      die("Falha de Conexão ao Banco de Dados");
    }

    return $connect;
}


?>