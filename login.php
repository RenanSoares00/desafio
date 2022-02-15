<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Kabum</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

  <style>

body{
	background-image: linear-gradient(to top, #5F9EA0, #ADD8E6, #708090, #5F9EA0 );
}


.container-item{
	margin-bottom: 10px;
} 

.container-item>label{
	width: 100%;
	box-shadow: 1px 1px 10px #ccc;
	display: block;
}

.container-item>button{
	background-image: linear-gradient(to right, #4682B4,#1C1C1C);
	width: 100%;
	border-radius: 30px;
	padding: 15px;
	color: #F8F8FF;
	border:0px;
	outline: 0;
}
    .container-item>input{
    border-radius: 5px;
    outline: 0;
    width: 100%;
    height: 25px;
    padding: 5px;
    }
    .btn button:hover{
      background-image:linear-gradient(to right, #1C1C1C,#4682B4);
      cursor:pointer;
    }


    .container-top{
	    text-align: center;
    }

    .container{
      box-shadow: 1px 1px 10px #ccc;
      background-color: 	#F5F5F5;
      padding: 30px;
      border-radius: 5px;
    }

    .form{

      width: 400px;
      margin: auto;
      padding-top: 40px;
    }
    header{
      justify-content: space-between;
    }
    header {
        width: 100%;
        background-color: #1c1e26;
        display: flex;
        align-items: center;
    }


    header .titulo{
        color: white;
        font-size: 20px;
    }
    .notification.is-danger{
      background-color:#ff3860;
      color:#fff;
      padding: 10px;
    }
  </style>
</head>
<body>
<header>

    <div class="titulo">DESAFIO - KABUM</div>
</header>
  <div class="main" >

     
    <div class="content">      
  
          <div id="login">
 
        <form class="form" action="acesso.php" method="POST">
    <div class="container">
    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
    ?>
      <div class="container-top">
        <h2>Login</h2>
      </div>

      <div class="container-item">
          <label><b>Nome</b></label>
          <input type="text" name="usuario" placeholder="Digite seu login" maxlength="40" required>
      </div>

      <div class="container-item">
        <label><b>Senha</b></label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
      </div><br>

      <div class="container-item btn">
        <button type="submit">ACESSAR</button>
      </div>  
  
      <p class="link">
            Ainda não tem conta?
            <a href="cadastro.php">Cadastre-se</a>
          </p>

        </form>
      </div>
    </div>
  </div>  
</body>
</html>


      