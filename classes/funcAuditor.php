<?php

interface funcAuditor
{
	public function addAuditor();
	public function selectAllAuditor();
	public function selectAuditor($search);
	public function editAuditor($id, $nome,$telefone);
	public function deleteAuditor($id);
}