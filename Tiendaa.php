<!doctype html>
<html>

<head>
	<!-- Metadados -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
	<link href="css/formulario.css" rel="stylesheet">

	<!-- Título da página (aparece na aba) -->
	<title>Cadastro</title>
</head>

<body>


	<div class="content">
		<div class="container">
			<img class="bg-img" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/bg.jpg"
				alt="">
			<div class="menu">
				<a href="#connexion" class="btn-connexion">
					<h2>FORMULARIO DE VENTAS</h2>
				</a>

			</div>
			<div class="connexion">
				<div class="contact-form">
					<label for="valor">Botellas:</label>
					<input type="number" name="Valor" id="valor" value="0" min="0">
					<label for="valor">Cliente:</label>
					<input type="text" name="Nombre" id="valor">
					<select name="Tamaño" id="Tamaño">
						<option value="Grande">Grande</option>
						<option value="Pequeña">Pequeña</option>
					</select>
					<select name="Ingreso" id="Tamaño">
						<option value="Salida">Salida</option>
						<option value="Entrada">Entrada</option>
					</select>
					<label for="valor">Transporte:</label>
					<input type="number" name="Transporte" id="valor" value="0">
					<label for="valor">Paga:</label>
					<input type="number" name="Paga" id="valor" value="0">

					<div class="check">
						<label>
							<input id="check" type="checkbox" class="checkbox">
							<svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
								<path class="path-back"
									d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
								<path class="path-moving"
									d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
							</svg>
						</label>
						<h3>Keep me signed in</h3>
					</div>

					<input class="submit" value="SIGN IN" type="submit">
				</div>

				<hr>
				<a href="https://www.grandvincent-marion.fr/" target="_blank">
					<h4>Forgot password?</h4>
				</a>
			</div>

			<div class="enregistrer active-section">
				<div class="contact-form">
					<label>USERNAME</label>
					<input placeholder="" type="text">

					<label>E-MAIL</label>
					<input placeholder="" type="text">

					<label>PASSWORD</label>
					<input placeholder="" type="text">

					<label>CONFIRM PASSWORD</label>
					<input placeholder="" type="text">

					<div class="check">
						<label>
							<input id="check" type="checkbox" class="checkbox">
							<svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
								<path class="path-back"
									d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
								<path class="path-moving"
									d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6" />
							</svg>
						</label>
						<h3>I agree</h3>
					</div>

					<input class="submit" value="SIGN UP" type="submit">

				</div>
			</div>

		</div>

	</div>


</body>

</html>