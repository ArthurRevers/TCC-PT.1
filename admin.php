
<?php

session_start();

if(isset($_SESSION['usuario'])){
}else{
    	header("Location:index.php");
}

          $nivel=$_SESSION['nivel'];
          if($nivel==1){
              header("Location:index.php");
          }

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/validator.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylelogin.css" />
<title>e-CWB - Confirmar</title>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>e-CWB<br> Pagina de</h2>
            <p>confirmação!</p>
			<img src="img/logo.png" alt="eCWB" width=300 height=194>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="register-form">
              
				   <?php
    				  include("bd/conecta.php");

$selecionaGiras=mysqli_query($conexao, "select * from registro");

if(isset($selecionaGiras)){
    
    ?>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Time</th>
      <th scope="col">Jogador 1</th>
      <th scope="col">Contato</th>
      <th scope="col">Confirmar</th>
    </tr>
    </thead>
    <tbody>
        <?php while($giras=mysqli_fetch_array($selecionaGiras)){ ?>
    <tr>
      <th scope="row"><?php echo $giras['id'];?></th>
      <td><?php echo $giras['time']; ?></td>
      <td><?php echo $giras['jogador1']; ?></td>
      <td><?php echo $giras['contato']; ?></td>
      
      <td>
          <?php if($giras['confirmado']==0){ ?>
          <form action="bd/confirmarRegistro.php" method="post">
              <input type="hidden" name="idregistro" value="<?php echo $giras['id']; ?>"/>
              <input type="hidden" name="confirmado" value="<?php echo $giras['confirmado']; ?>"/>
              <button style="background-color: green !important;" type="submit" class="btn btn-primary">Confirmar</button>
              </form>
          <?php }else{ ?>
          
                    <form action="bd/confirmarRegistro.php" method="post">
              <input type="hidden" name="idregistro" value="<?php echo $giras['id']; ?>"/>
              <input type="hidden" name="confirmado" value="<?php echo $giras['confirmado']; ?>"/>
              <button style="background-color: red !important;" type="submit" class="btn btn-primary">Cancelar</button>
              </form>
          
          <?php  } ?>
      </td>
    </tr>
      <?php } ?>
    </tbody>
    </table>
    
    <?php
}else{
    ?>
    
		<h3>Nenhum registro no momento</h3>
		
		<?php } ?>
				  
               
            </div></br>
            <center><a href="bd/sair.php">SAIR</a></center></br>
            <center><a href="index.php">Voltar para o site principal</a></center></br>
         </div>
      </div>