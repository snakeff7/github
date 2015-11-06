<!DOCTYPE html>
<html>
<head>
	<title>Relatório</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
</head>
<style>
	body {
		font-family: Arial;
	}

	td {
		padding: 5px !important;
	}


	@media print {
		@media print {
			body { font-size: 12px; }
		}
	}
</style>
<body>
	<?php 

	require_once('classes/aluno.class.php');

	$objeto = new aluno();
	$dados = $objeto->selecionar();

	?>

	<div class="container">
		<div class="page-header">
			<h1>Relatório de Inscrição <small>Seminário Segurança do Trabalho - Unopar</small></h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>Matricula</th>
							<th>Nome</th>
							<th>Telefone</th>
							<th>Email</th>
							<th>Certificado</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($dados as $dado): ?>
							<?php 

							$id = $dado['inscricao']; 
							$nome = $dado['nome']; 
							$telefone = $dado['telefone']; 
							$email = $dado['email']; 
							$certificado = $dado['certificado']; 

							if($certificado == 1){
								$certificado = "Sim";
							} else {
								$certificado = "Não";
							}

							?>
							<tr>
								<td><?php echo $id; ?></td>
								<td><?php echo $nome; ?></td>
								<td><?php echo $telefone; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $certificado; ?></td>

							</tr>	
						<?php endforeach; ?>					
					</tbody>					
				</table>
			</div>
		</div>
	</div>


</body>
</html>
