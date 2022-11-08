<?php include 'controllers/cadastro_usuario_controller.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Usuário</title>
	<link rel="stylesheet" type="text/css" href="./style/cadastro_usuario.css">
	<script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php if ($password !== $passwordConfirmation) : ?>
		<h1 style="text-align: center;"><?php echo $msgError ?></h1>
	<?php endif; ?>
	<div id="main-container">
		<h1>Cadastre-se</h1>
		<form id="forma-de-registro" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<div class="half-box spacing">
				<label for="primeiro_nome">Nome</label>
				<input type="text" name="primeiro_nome" id="primeiro_nome" placeholder="Digite o seu nome" autocomplete="off" required>
			</div>
			<div class="half-box">
				<label for="sobrenome">Sobrenome</label>
				<input type="text" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome" autocomplete="off" required>
			</div>
			<div class="full-box">
				<label for="endereco">Endereço</label>
				<input type="text" name="endereco" id="endereco" placeholder="Digite o seu endereço" autocomplete="off" required>
			</div>
			<div class="half-box spacing">
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone" id="telefone" placeholder="Digite o seu telefone" autocomplete="off" required>
			</div>
			<div class="half-box">
				<label for="email">E-mail</label>
				<input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off" required>
			</div>

			<div class="half-box spacing">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" placeholder="Digite a sua senha" autocomplete="off" required>
			</div>
			<div class="half-box">
				<label for="passconfirmation">Confirme a senha</label>
				<input type="password" name="passconfirmation" id="passconfirmation" placeholder="Confirme a sua senha" autocomplete="off" required>
			</div>
			<div class="full-box">
				<input type="checkbox" name="agreement" id="agreement">
				<label id="agreement-label">Li e aceito os <span id="btn-open-modal">termos de uso </span></label>
			</div>
			<div class="content-button-form">
				<button type="submit" id="btn-submit">Cadastrar Usuário</button>
			</div>
			<span>Se já tem uma conta cadastrada, clique em <a href="login.php">Fazer login</a></span>
		</form>
	</div>
	<footer>
		<p class="copyright">&copy; Copyright Confeitaria - 2019</p>
	</footer>

	<div class="modal-terms">
		<div class="modal-content">
			<div class="modal">
				<i class="fas fa-times"></i>
				<h1>ISSO É UM TRABALHO ACADEMICO ABESTADO! NÃO POSSUI TERMOS.</h1>
			</div>
		</div>
	</div>

	<script src="./js/cadastro_usuario.js"></script>
</body>

</html>