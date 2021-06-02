<!DOCTYPE html>
<html>

<head>
	<title>Título do documento</title>
	<link rel="stylesheet" href="./estilo.css" />
</head>

<body>
	<section>
		<h1 >Formulário criança/adolescente</h1>
		<h3 >Dados da </h3><br>

		<form action="enviar_email.php" method="POST" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col col-2">
						<div class="teste">
							<label for="nome">Nome Completo: </label>
							<input name="nome" class="input" type="text" required>
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="cpf">CPF:</label>
							<input type="text" name="cpf" id="nome" autocomplete="off" required />
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="rg">RG:</label>
							<input type="text" name="rg" id="nome" autocomplete="off" />
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="nome">Telefone: </label>
							<input type="text" name="telefone" id="nome" autocomplete="off" required />
						</div>
					</div>
				</div>

				<div class="container" id="form1">
					<div class="row">


					</div>
				</div>

				<!--<div id="box" class="box">

				</div>-->
			</div>

			<!--<button id="add" class="add">Adicionar Telefone</button>-->

			<div class="container">



				<div class="row">
					<div class="col col-2">
						<div class="teste">
							<label for="">Estado civil</label>
							<select id="" class="form-control">
								<option selected></option>
								<option value="solteiro">Solteiro(a)</option>
							</select>
						</div>

					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col col-2">
						<div class="teste">
							<label for="nome">Cidade: </label>
							<input type="text" name="cidade" id="nome" autocomplete="off" required />
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="nome">Endereço:</label>
							<input type="text" name="endereco" id="nome" autocomplete="off" required />
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="inputBanco">Bairro:</label>
							<input type="text" name="bairro" id="nome" autocomplete="off" required />
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="inputBanco">Perímetro:</label>
							<input type="text" name="perimetro" id="nome" autocomplete="off" />
						</div>
					</div>

					<div class="col col-2">
						<div class="teste">
							<label for="inputBanco">CEP:</label>
							<input type="text" name="cep" id="nome" autocomplete="off" />
						</div>

					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col col-2">
						<div class="teste">
							<label for="inputBanco">Anexo:</label>
							<input type="file" name="arquivo" />
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="teste">
						<button class="button is-link is-medium">Enviar</button>
					</div>
				</div>
			</div>
		</form>

	</section>

	<script src="./script.js"></script>
</body>

</html>