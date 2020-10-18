<?php

require_once '../../classes/autoload.php';

$achado = filter_input(INPUT_POST, 'achado', FILTER_SANITIZE_SPECIAL_CHARS);
$manifestacao = filter_input(INPUT_POST, 'manifestacao', FILTER_SANITIZE_SPECIAL_CHARS);
$conclusao = filter_input(INPUT_POST, 'conclusao', FILTER_SANITIZE_SPECIAL_CHARS);
$prazo = filter_input(INPUT_POST, 'prazo', FILTER_SANITIZE_NUMBER_INT);
$estimativa = filter_input(INPUT_POST, 'estimativa', FILTER_SANITIZE_NUMBER_INT);
$auditor = filter_input(INPUT_POST, 'auditor', FILTER_SANITIZE_NUMBER_INT);

$addAuditoria = new Auditoria();
$addAuditoria->dadosDoFormAuditoria($achado, $manifestacao, $conclusao, $prazo, $estimativa, $auditor);
$addAuditoria->addAuditoria();