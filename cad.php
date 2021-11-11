<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Cadastrar</title>
</head>
<body>


    <h1>Cadastro:</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="proc-cad.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Nome:"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Email:"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
</body>
</html>