<?php

require_once 'classes/crud_frutas.php';
require_once 'classes/conexao.php';



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
		$sql = "INSERT INTO frutas (nome, preco, quantidade, tipo_fruta_id) VALUES (:nome, :preco, :quantidade, :tipo_fruta_id)";
		$st = Conexao::prepare($sql);
		$st->bindParam(':nome', $this->nome);
		$st->bindParam(':preco', $this->preco);
		$st->bindParam(':quantidade', $this->quantidade);
		$st->bindParam(':tipo_fruta_id', $this->tipo_fruta_id);
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