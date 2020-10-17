<?php
require_once 'funcAuditoria.php';
class Auditoria extends Connection implements funcAuditoria
{
	private $id, $achado, $manifestacao, $conclusao, $prazo, $estimativa, $auditor;

	//Métodos Set
	protected function setId($id)
	{
		$this->id = $id;
	}
	protected function setAchado($achado)
	{
		$this->achado = $achado;
	}
	protected function setManifestacao($manifestacao)
	{
		$this->manifestacao = $manifestacao;
	}
	protected function setConclusao($conclusao)
	{
		$this->conclusao = $conclusao;
	}
	protected function setPrazo($prazo)
	{
		$this->prazo = $prazo;
	}
	protected function setEstimativa($estimativa)
	{
		$this->estimativa = $estimativa;
	}
	protected function setAuditor($auditor)
	{
		$this->auditor = $auditor;
	}

	//Métodos Get
	protected function getId()
	{
		return $this->id;
	}
	protected function getAchado()
	{
		return $this->achado;
	}
	protected function getManifestacao()
	{
		return $this->manifestacao;
	}
	protected function getConclusao()
	{
		return $this->conclusao;
	}
	protected function getPrazo()
	{
		return $this->prazo;
	}
	protected function getEstimativa()
	{
		return $this->estimativa;
	}
	protected function getAuditor()
	{
		return $this->auditor;
	}

	//Métodos de interação

	public function dadosDoFormAuditoria($achado, $manifestacao, $conclusao, $prazo, $estimativa, $auditor)
	{
		$this->setAchado($achado);
		$this->setManifestacao($manifestacao);
		$this->setConclusao($conclusao);
		$this->setPrazo($prazo);
		$this->setEstimativa($estimativa);
		$this->setAuditor($auditor);
	}

	public function addAuditoria()
	{
		$conn = $this->connect();

		$_achado = $this->getAchado();
		$_manifestacao = $this->getManifestacao();
		$_conclusao = $this->getConclusao();
		$_prazo = $this->getPrazo();
		$_estimativa = $this->getEstimativa();
		$_auditor = $this->getAuditor();

		$sql = "insert into tb_auditoria values(default,:achado,:manifestacao,:conclusao,:prazo,:estimativa,:auditor)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':achado',$_achado);
		$stmt->bindParam(':manifestacao'$_manifestacao);
		$stmt->bindParam('conclusao',$_conclusao);
		$stmt->bindParam(':prazo',$_prazo);
		$stmt->bindParam(':estimativa',$_estimativa);
		$stmt->bindParam(':auditor',$_auditor);

		$stmt->execute();
	}
	public function selectAuditoria($search)
	{

	}
	public function editAuditoria($id, $achado, $manifestacao, $conclusao, $prazo, $estimativa, $auditor)
	{

	}
	public function deleteAuditoria($id)
	{

	}
}

