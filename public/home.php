<?php require_once '../config/header.inc.html'; 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

 ?>

<div class="row container">
	<h5 class="light">Auditorias...</h5><hr>
	<table class="striped blue lighten-2">

		<thead>
			<tr>
				<th>Auditor</th>
				<th>Achado</th>
				<th>Manifestação</th>
				<th>Conclusão</th>
				<th>Prazo</th>
				<th>Estimativa</th>				
			</tr>
		</thead>
		<tbody>
			<?php require_once '../databases/auditoria/selectAllAuditoria.php'; ?>
		</tbody>
		
	</table>
</div>


<?php require_once '../config/footer.inc.html';  ?>