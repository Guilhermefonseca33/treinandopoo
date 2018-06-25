<?php

require_once 'classes/crud_frutas.php';


class Frutas extends crudFrutas {

	public function pesquisaID($id) {
		$sql = "SELECT * FROM frutas WHERE id = :id";
		$st = Conexao::prepare($sql);
		$st->bindParam(':id', $id, PDO::PARAM_INT);
		$st->execute();
		return $st->fetch();
	} // final função pesquisar por id
	public function pesquisarTudo(){
		$sql = "SELECT * FROM frutas";
		$st = Conexao::Prepare($sql);
		$st->execute();
		return $st->fetchAll();
	}
	public function inserirFruta(){
		$sql = "INSERT INTO frutas (nome, preco, quantidade, id_tipo_fruta) VALUES (:nome, :preco, :quantidade, :id_tipo_fruta)";
		$st = Conexao::prepare($sql);
		$st=bindParam(':nome', $this->nome);
		$st=bindParam(':preco', $this->preco);
		$st=bindParam(':quantidade', $this->quantidade);
		$st=bindParam(':id_tipo_fruta', $this->id_tipo_fruta);
	}

	public function attFruta($id){
		$sql = "UPDATE frutas SET nome = :nome, preco = :preco, quantidade = :quantidade, id_tipo_fruta = :id_tipo_fruta WHERE id = :id";
		$st = Conexao::prepare($sql);
		$st->bindParam(':id', $id, PDO::PARAM_INT);
		$st->bindParam(':nome', $this->nome);
		$st->bindParam(':preco', $this->preco);
		$st->bindParam(':quantidade', $this->quantidade);
		$st->bindParam(':id_tipo_fruta', $this->id_tipo_fruta);
		return $st->execute();
	}

	public function deletarFruta($id){
		$sql = "DELETE FROM frutas WHERE id = :id";
		$st = Conexao::prepare();
		$st->bindParam(':id', $id, PDO::PARAM_INT);
		return $st->execute();
	}
}

?>