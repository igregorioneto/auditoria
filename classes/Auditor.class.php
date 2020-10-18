<?php
require_once 'funcAuditor.php';
Class Auditor extends Connection implements funcAuditor
{

	private $id,$nome,$telefone;

	//Métodos Set
	protected function setId($id){
		$this->id = $id;
	}

	protected function setNome($nome){
		$this->nome = $nome;
	}

	protected function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	//Métodos Get
	protected function setId(){
		return $this->id;
	}

	protected function setNome(){
		return $this->nome;
	}

	protected function setTelefone(){
		return $this->telefone;
	}

	//Métodos de acesso
	public function addAuditor()
	{

	}
	public function selectAllAuditor()
	{
		$conn = $this->connect();

		$sql = "select id,nome from tb_auditor";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$resultado = $stmt->fetchAll();
	}
	public function selectAuditor($search)
	{

	}
	public function editAuditor($id, $nome,$telefone)
	{

	}
	public function deleteAuditor($id)
	{

	}
}