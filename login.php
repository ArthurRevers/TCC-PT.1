<?php

session_start();

if(isset($_SESSION['usuario'])){
	header("Location:admin.php");
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/validator.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylelogin.css" />
<title>e-CWB - Login</title>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>e-CWB<br> Pagina de login</h2>
            <p>ADMIN</p>
			<img src="img/logo.png" alt="e-CWB" width=300 height=194>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="bd/loginBD.php" method="post">
                  <div class="form-group">
                     <label>Usuario</label>
                     <input type="text" name="usuario" required class="form-control" placeholder="Usuario">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" name="senha" required class="form-control" placeholder="Senha">
                  </div>
				  <center>
									<p style="color: #ff1515;">
									<?php 
									if(isset($_SESSION['loginErro'])){
									echo $_SESSION['loginErro'];
									unset($_SESSION['loginErro']);
									}
									if(isset($_SESSION['AvisoLogin'])){
									echo $_SESSION['AvisoLogin'];
									unset($_SESSION['AvisoLogin']);
									}
									?>
									</p>
				  </center>
				  <center><a href="index.php">Voltar para o site principal</a></center><br>
				  
                  <center><button type="submit" class="btn btn-black">Entrar</button></center>
               </form>

            </div>
         </div>
      </div>