<?php include 'controllers/cadastro_usuario_controller.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style/cadastro_usuario.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="./assets/logo.png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>

	<title>Cadastro Usuário</title>
</head>

<body>
	<?php if ($password !== $passwordConfirmation) : ?>
		<h1 style="text-align: center;"><?php echo $msgError ?></h1>
	<?php endif; ?>
	<div class="container-cadastro-usuario">
		<div class="content-cadastro-usuario">
			<div data-aos="flip-right" class="content-form">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
					<h1>CADASTRE-SE</h1>

					<div class="content-inputs">
						<input type="text" name="primeiro_nome" placeholder="Primeiro Nome" required>
						<input type="text" name="sobrenome" placeholder="Sobrenome" required>
					</div>

					<div class="content-inputs">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="senha" placeholder="Senha" required>
					</div>

					<div class="content-inputs">
						<input type="text" name="telefone" placeholder="Telefone" required>
						<input type="text" name="endereco" placeholder="Endereço" required>
					</div>

					<div>
						<input id="checkbox-input" type="checkbox" name="agreement" id="agreement">
						<label id="agreement-label">Li e aceito os <span data-bs-toggle="modal" data-bs-target="#exampleModal">termos de uso </span></label>
					</div>

					<button id="btn-submit" type="submit">Cadastrar</button>

					<span class="msg-login">Caso não tenha conta, clique em <a href="login.php">Fazer Login</a></span>
				</form>
			</div>

			<div class="image-background"></div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h1>
								MERAMENTE ILUSTRATIVA
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="./js/cadastro_usuario.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/data-aos.js"></script>
</body>
</html>