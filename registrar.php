<?php

session_start();

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/validator.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylelogin.css" />
<title>e-CWB - Registrar</title>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>e-CWB<br> Pagina de Registro</h2>
            <p>Faça seu registro!</p>
			<img src="img/logo.png" alt="e-CWB" width=300 height=194>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="register-form">
               <form action="bd/registroBD.php" method="post" data-toggle="validator" role="form">
                                         				<p style="color: #66ff26;">
									<?php 
									if(isset($_SESSION['AvisoRegistro'])){
									echo $_SESSION['AvisoRegistro'];
									unset($_SESSION['AvisoRegistro']);
									}
									?>
									</p>
                  <div class="form-group">

                     <label>Time</label>
                     <input id="time" name="time" type="text" required class="form-control" placeholder="time">
                  </div>
									<p style="color: #ff1515;">
									<?php 
									if(isset($_SESSION['timeduplicado'])){
									echo $_SESSION['timeduplicado'];
									unset($_SESSION['timeduplicado']);
									}
									?>
									</p>
                                    <div class="form-group">
                     <label>Jogador 1 (nick completo - Ex: nick #br1)</label>
                     <input id="jogador1" name="jogador1" type="text" required class="form-control" placeholder="jogador1">
                  </div>
                                    <div class="form-group">
                     <label>Jogador 2 (nick completo - Ex: nick #br1)</label>
                     <input id="jogador2" name="jogador2" type="text" required class="form-control" placeholder="jogador2">
                  </div>
                                    <div class="form-group">
                     <label>Jogador 3 (nick completo - Ex: nick #br1)</label>
                     <input id="jogador3" name="jogador3" type="text" required class="form-control" placeholder="jogador3">
                  </div>
                                    <div class="form-group">
                     <label>Jogador 4 (nick completo - Ex: nick #br1)</label>
                     <input id="jogador4" name="jogador4" type="text" required class="form-control" placeholder="jogador4">
                  </div>
                                    <div class="form-group">
                     <label>Jogador 5 (nick completo - Ex: nick #br1)</label>
                     <input id="jogador5" name="jogador5" type="text" required class="form-control" placeholder="jogador5">
                  </div>
				  <div class="form-group">
                     <label for="inputContato" class="control-label">Contato (whats) somente numeros (ddd+numero)</label>
                     <input id="contato" class="form-control" placeholder="Digite seu Contato" name="contato" type="number" required>
                  </div>
				  <div class="form-group">
                     <label for="inputContatoConfirm" class="control-label">Confirme o Contato (whats)</label>
                     <input id="contatoConfirm" class="form-control" placeholder="Confirme seu Whats" type="number" data-match="#contato" data-error="Atenção! Os contatos não estão iguais ou não é um contato valido!" required>
					 <div class="help-block with-errors" style="color: red;"></div>
                  </div>
				  					<p style="color: #ff1515;">
									<?php 
									if(isset($_SESSION['contatoduplicado'])){
									echo $_SESSION['contatoduplicado'];
									unset($_SESSION['contatoduplicado']);
									}
									?>
									</p>
				  <center>
                  <button type="submit" class="btn btn-primary">Registrar</button><br>
				  <center><a href="index.php">Voltar para o site principal</a></center><br>
				  </center>
               </form>
            </div>
         </div>
      </div>