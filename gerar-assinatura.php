<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		<title>Gerar Assinatura de Email</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col align-self-start">
    	    	</div>
	   			<div class="col align-self-center">
					<form action ="assinatura.php" target="frame">
						<div class="col-sm-12">
							<label for="nome">Nome : </label>
							<input class ="form-control" type=text" name="nome" value="" placeholder="Nome">
						</div>
						<div class="col-sm-12">
							<label for="funcao">Função</label>
							<input class ="form-control" type=text" name="funcao" value="" placeholder="Função">
						</div>
						<div class="col-sm-12">
							<label for="setor">Setor :</label>
							<input class ="form-control"  type="text" name="setor" value="" placeholder="Setor">	
						</div>
						<div class="col-sm-12">
							<label for="telefone">Telefone: </label>
							<input class ="form-control"  type="text" name="telefone" value="" placeholder="(19) 3772-5700">	
						</div>
						<div class="col-sm-12">
							<label for="email">E -mail: </label>
							<input class ="form-control"  type="email" name="email" value="" placeholder="suporte.ti@hmmg.sp.gov.br">	
						</div>	
						<div class="col-sm-12">
							<input   type="submit" name="enviar" value="Enviar">
							<input   type="submit" name="codigo" value="Exibir Código">	
						</div>
					</form>
				</div>
				<div class="col align-self-end">
    			</div>
			</div>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe  class="embed-responsive-item" name="frame" src="assinatura.php" width="" height=""></iframe>	
			</div>
		</div>
	</body>
</html>

 