<?php
	require_once 'classes/frutas.php';
	require_once 'classes/conexao.php';
	require_once 'classes/crud_frutas.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento e Cadastro de Frutas</title>
</head>
<body>
	 <?php
	 	$fruta = conexao::getInstance();

	 	// Cadastro de Frutas

	 	if (isset($_POST['btCadFruta'])){
	 		$nome = $_POST['nome'];
	 		$preco = $_POST['preco'];
	 		$quantidade = $_POST['quantidade'];
	 		$id_tipo_fruta = $_POST['id_tipo_fruta'];

	 		$fruta->setNome($nome);
	 		$fruta->setPreco($preco);
	 		$fruta->setQuantidade($quantidade);
	 		$fruta->setId_tipo_fruta($id_tipo_fruta);


	 		$fruta->inserirFruta();
	 	}
	 ?>

	 <div style=" margin: 150px 0; text-align: center">
			<form method="POST">
				<p> <label> Nome </label> <input type="text" name="nome" placeholder="Digite o nome da fruta"> </p>
				<p> <label> Preço </label> <input type="text" name="preco" placeholder="Digite o valor da fruta"> </p>
				<p> <label> Quantidade </label> <input type="text" name="quantidade" placeholder="Digite a quantidade"> </p>
				<p> <label> Tipo da Fruta </label> <select name="id_tipo_fruta">
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select> </p>
				<input type="submit" name="btCadFruta" value="Cadastrar Fruta">

				
			</form>	 	
	 </div>
</body>
</html>