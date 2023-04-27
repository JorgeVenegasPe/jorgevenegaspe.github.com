<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="http://localhost/trabajofl/resources/css/contact.css">
    <link rel="stylesheet"  href="http://localhost/trabajofl/resources/css/enviar.css">
    <title>Document</title>
</head>
<body>
    <article class="container4">
        <h2 class="title">Contactanos</h2>
         <form action="http://localhost/trabajofl/resources/issets/enviar.php" method="post" class="form">
			<div class="checkout-information">
				<div class="input-group">
					<label for="Nombre">Nombre</label>
					<input type="text" id="Nombre" name="Nombre"  placeholder="Aqui tu Nombre" required/>
				</div>
				<div class="input-group">
					<label for="Nùmero">Nùmero</label>
					<input type="text" id="Numero" name="Numero" placeholder="Aqui tu Nùmero" />
				</div>
				<div class="input-group">
					<label for="Correo">Correo</label>
					<input type="email" id="Correo" name="Correo" placeholder="Aqui tu Correo" required/>
				</div>
				<div class="input-group">
					<label for="Mensaje">Mensaje</label>
					<textarea type="text" id="Mensaje" name="Mensaje" placeholder="Mensaje" required></textarea>
				</div>
			</div>
			<button class="button button--checkout">Contactar</button>
		</form>
    </article>
        
</body>
</html>