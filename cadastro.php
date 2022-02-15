<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Kabum</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">


  <style>
       *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family: 'PT Sans' , sans-serif;

       }
body{
	background-image: linear-gradient(to top, #5F9EA0, #ADD8E6, #708090, #5F9EA0 );

}

a{
	text-decoration: none;
}

a.links{
	display: none;
}
.content{
	width: 500px;
	min-height: 560px;
	margin: 0px auto;
	position: relative;
}


h2{
	font-size: 48px;
	color: #066a75 /*#FF6347*//*#B0E0E6*//*#800000*/;
	padding: 2px 0 10 px 0;
	font-family: Arial, sans-serif;
	font-weight: bold;
	text-align: center;
	padding-bottom: 30px;
}
p{
  margin-bottom:15px;
}
 
.content p:first-child{
  margin: 0px;
}
 
label{
  color: #405c60*/;
  position: relative;
}
/* placeholder */
::-webkit-input-placeholder  {
  color: #bebcbc; 
  font-style: italic;
}
.imglogin{
	border-radius: 50px;
	width: 100px;
	box-shadow: 1px 2px 10px;

}
.card-top{
	text-align: center;
}
.form{

	width: 400px;
	margin: auto;
	padding-top: 40px;
}
.card{
	box-shadow: 1px 1px 10px #ccc;
	background-color: 	#F5F5F5;
	padding: 30px;
	border-radius: 5px;
}
.title{
	color: #4682B4;
}
.card-group{
	margin-bottom: 10px;
} 
.card-group>label{
	width: 100%;
	box-shadow: 1px 1px 10px #ccc;
	display: block;
}

.card-group>button{
	background-image: linear-gradient(to right, #4682B4,#1C1C1C);
	width: 100%;
	border-radius: 30px;
	padding: 15px;
	color: #F8F8FF;
	border:0px;
	outline: 0;
}
.card-group>input{
	border-radius: 5px;
	outline: 0;
	width: 100%;
	height: 25px;
	padding: 5px;
}
.limpar{
    background-image: linear-gradient(to right, #4682B4,#1C1C1C);
	width: 100%;
	border-radius: 15px;
	padding: 5px;
	color: #F8F8FF;
	border:0px;
	outline: 0;
    cursor:pointer
}

.btn button:hover{
        cursor:pointer;
		background-image:linear-gradient(to right, #1C1C1C,#4682B4);
}
 

input[type="submit"]:hover{
  background: #4ab3c6;
}


 
.link a {
  font-weight: bold;
  background: #f7f8f1;
  padding: 6px;
  color: rgb(29, 162, 193);
  margin-left: 10px;

 
  -webkit-border-radius: 4px;
  border-radius: 4px;  
 
  -webkit-transition: all 0.4s linear;
  transition: all 0.4s  linear;
}
 
.link a:hover {
  color: #39bfd7;
  background: #f7f7f7;
}
.link{
  position: absolute;

}

header{
               justify-content: space-between;
               padding: 0px 120px 0px 120px;
           }
header {
           width: 100%;
           background-color: #1c1e26;
           display: flex;
           align-items: center;
       }

       header .logo img{
           width: 100%;
           max-width: 300px;
       }

       header .titulo{
           color: white;
           font-size: 20px;
       }


 

  </style>
</head>
<body>
<header>
        <div class="logo">
            <img src="logo.png" alt="Arduino's">
        </div>
        <div class="titulo">MINHA CASA - AUTOMAÇÃO RESIDENCIAL</div>
    </header>
  <div class="container" >

     
    <div class="content">      
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="proc_usuario.php"> 
          
           <form class="form" action="" method="post">
    <div class="card" action="">
      <div class="card-top">
        <img class="imglogin" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhFHI-suEtDQX5He3yq6w3-qasDYsejqxgRA&usqp=CAU" alt="">
        <h2>Cadastro</h2>
      </div>
      <div class="card-group">
          <label><b>Login</b></label>
          <input type="text" name="login" id="login" placeholder="Digite seu login" maxlength="40" required>
      </div>
      <div class="card-group">
          <label><b>Nome</b></label>
          <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" maxlength="40" required>
      </div>

      <div class="card-group">
          <label><b>CPF</b></label>
          <input type="tel" name="cpf" id="cpf" placeholder="Digite o seu CPF" maxlength="11" required>
      </div>

      <div class="card-group">
        <label><b>E-mail</b></label>
        <input type="Email" name="email" id="email" placeholder="Digite seu e-mail" required>
      </div>

      <div class="card-group">
        <label><b>Telefone</b></label>
        <input type="tel" name="telefone" id="telefone" placeholder="Digite seu Telefone com o DDD" maxlength="11" required>
      </div>

      <div class="card-group">
        <label><b>Senha</b></label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
      </div><br>
      <div class="card-group"><b>
        <input type="reset" class="limpar" name="limpar" value="Limpar todas as informações"></b>
      </div>

      <div class="card-group btn">
        <button type="submit">CADASTRAR</button>
      </div>  
  
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>

        </form>
      </div>
    </div>
  </div>  
</body>
</html>


    