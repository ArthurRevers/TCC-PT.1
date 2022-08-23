<!DOCTYPE html>


<?php
	session_start();	
	
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Sports CWB</title>
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="\js\jquery.js"></script>
    <script type="text/javascript" src="\js\slide.js"></script>
    
</head>
<body>
<header>
    <div class="menu">
        <center>
            <ul style="padding-left: 0px !important;">
                <li style="margin-left: 0px !important; "><a href="#slide">Inicio</a></li> <i style="color: #fff">|</i>
				<li><a href="#rank">Ranking</a></li> <i style="color: #fff">|</i>
				<li><a href="#inscrever">Inscreva-se</a></li> <i style="color: #fff">|</i>
				<li><a href="#torneio">Torneio</a></li> <i style="color: #fff">|</i>
				<li style="margin-right: 0px !important; "><a href="#contato">Contato</a></li> 
				
            </ul>
        </center>
    </div>
    <div class="slide" id="slide">
        
        <div class="slide-buttons">
            <div class="button" id="button1">
                <img src="img/volta.png" width="50px" height="50px">
            </div>
            <div class="button" id="button2">
                <img src="img/passa.png" width="50px" height="50px">
            </div>
        </div>
        <div class="logo">
		<img src="img/logo.png" width="400px" height="258px">
		</div>
		
        <div class="slide-width">
            <div class="slide-item" style="background-image: url(img/img1.jpg);"></div>
            <div class="slide-item" style="background-image: url(img/img2.jpg);"></div>
            <div class="slide-item" style="background-image: url(img/img3.jpg);"></div>
        </div>
    </div>
</header>
<div class="container">

<section id="rank">
    <center>
	<br>
	<h1 id="titulo" data-anime="top">RANKING</h1>
    </center>
	<div class="conteudos">
	<div class="conteudo1" data-anime="left">
	<table style="width: 100%;">
		<thead>
			<tr>
				<th scope="col">Lugar</th>
				<th scope="col">Time</th>
				<th scope="col">Pontos</th>
			</tr>
		</thead>
		<tbody>
		<tr>
				<td>1°</td>
				<td></td>
				<td>0</td>
		</tr>
				<tr>
				<td>2°</td>
				<td></td>
				<td>0</td>
		</tr>
				<tr>
				<td>3°</td>
				<td></td>
				<td>0</td>
		</tr>
				<tr>
				<td>4°</td>
				<td></td>
				<td>0</td>
		</tr>
				<tr>
				<td>5°</td>
				<td></td>
				<td>0</td>
		</tr>
		</tbody>
		</table>
	</table>
	</div>
	<div style="color: #fff;" class="conteudo2" data-anime="right">
	<h1>Ranking CWB/REGIÃO de Valorant</h1>
	<p>Os times listados jogaram torneios presencial (mais pontos) ou online contra jogadores de Curitiba e região</p>
	</div>
	</div>
</section>

<section id="inscrever">
    <center>
	<br>
	<h1 id="titulo" data-anime="top">Inscreva-se</h1>
    </center>
	<div class="conteudofull" data-anime="left">
	    <b>Data de inscrição:</b> 04/10/2021 10:00 à 25/10/2021 10:00</br></br>
	    <b>Inicio etapa online:</b> 30/10/2021 16:00 à 31/10/2021 22:00</br></br>
	    <b>Etapa presencial:</b> 07/11/2021 14:00</br></br>
	    <b>Local etapa presencial:</b> MK Academy - Shopping Curitiba</br></br>
	    <b>Estrutura:</b> 144hz - 300FPS</br></br>
	    <b>Formato:</b> Winner/Lower (2 derrotas = eliminado)</br></br>
	    <b>Valor:</b> R$ 100,00 POR TIME</br></br>
	    </br>
	    
	    <a href="http://esportscwb.com.br/registrar.php"><img src="img/inscrevase.png" width="30%"></a>
	</div>
</section>

<section id="torneio">
    <center>
	<br>
	<h1 id="titulo" data-anime="top">TORNEIO</h1>
    </center>
	<div class="conteudofull" data-anime="left">
	    <b>Confirmados:</b>
<?php
    				  include("bd/conecta.php");

$selecionaGiras=mysqli_query($conexao, "select * from registro where confirmado=1");



if(isset($selecionaGiras)){
    
    ?>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">x</th>
      <th scope="col">Time</th>
    </tr>
    </thead>
    <tbody>
        <?php while($giras=mysqli_fetch_array($selecionaGiras)){ 
            $i=$i+1;
        ?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $giras['time']; ?></td>
    </tr>
      <?php } ?>
    </tbody>
    </table>
    
    <?php
}else{
    ?>
    
		<h3>Nenhum time confirmado no momento</h3>
		
		<?php } ?>
	    </br>
	    <b>Premiação (atualizado conforme novas inscrições sao confirmadas):</b>
	    1° R$ 60,00 + Pontos ranking</br>
	    2° R$ 30,00 + Pontos ranking</br>
        3°/8° Pontos ranking</br></br>
	    
	    <b>Entre no grupo e inclua seu time:</b>
	    <p style="color: red;"><a href="https://chat.whatsapp.com/Gn7FTItGxiNKoHg90oS2gC">CLIQUE AQUI</a></p>
	    
	    <b>Tabela:</b>
	    Ainda não disponivel
	    
	    
	</div>
</section>

<section id="contato">
    <center>
	<br>
    <h1 id="titulo" data-anime="top">CONTATO</h1>
    </center>
	<div class="conteudos">
	<div class="conteudo1" data-anime="left">
	    <center>
	        <h2>PARCEIRO</h2>
	        <a href="https://mkacademy.art.br/"><img src="img/logo-mk-academy-1.png" width="100%"/></a>
	        </center>
	</div>
	<div class="conteudo2" data-anime="right">
	    <center>
	            <div class="redes">
            <tr>
                <td><a id="instaIcon" href="LINKINSTAAQUI"><img src="/img/insta.png" width="50px" height="50px"/></a></td>
                <td><a id="twitterIcon" href="LINKTWITTERAQUI"><img src="/img/twitter.png" width="50px" height="50px"/></a></td>
            </tr>
        </div>
        <p style="color: #fff">contato@esportscwb.com.br</p>
	</div>
	</div>
</section>

</div>
<footer>
    <center>
    <div class="rodape">
        <p>e-Sports CWB</p>
        
        </div>
        <div class="redes">
            <tr>
                <center>
                <td><a id="instaIcon" href="LINKINSTAAQUI"><img src="/img/insta.png" width="50px" height="50px"/></a></td>
                <td><a id="twitterIcon" href="LINKTWITTERAQUI"><img src="/img/twitter.png" width="50px" height="50px"/></a></td>
                </center>
            </tr>
        </div>
    <div class="copy" >
        
        <p>2021 - Todos direitos reservados</p></br>
        <a href="http://esportscwb.com.br/login.php">Administrador</a>
        
    </div>
    </center>
</footer>
</body>
</html>