<?php

interface funcAuditoria
{
	public function addAuditoria();
	public function selectAllAuditoria();
	public function selectAuditoria($search);
	public function editAuditoria($id, $achado, $manifestacao, $conclusao, $prazo, $estimativa, $auditor);
	public function deleteAuditoria($id);
}