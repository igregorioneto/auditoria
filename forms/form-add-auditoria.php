<form action="../databases/auditoria/addAuditoria.php" method="post" class="col s12">
	<div class="row">
		<div class="input-filter col s6">
			<input type="text" name="achado" class="validate" autofocus>
			<label for="achado">Achado</label>
		</div>		
		<div class="input-filter col s6">
			<input type="text" name="manifestacao" class="validate" autofocus>
			<label for="manifestacao">Manifestação</label>
		</div>		
	</div>
	<div class="row">
		<div class="input-filter col s6">
			<input type="number" name="estimativa" class="validate" autofocus>
			<label for="estimativa">Estimativa</label>
		</div>
		<div class="input-filter col s6">
			<input type="number" name="prazo" class="validate" autofocus>
			<label for="prazo">Prazo</label>
		</div>
	</div>
	<div class="row">
		<div class="input-filter col s12">
			<textarea class="materialize-textarea" name="conclusao"></textarea>
			<label for="conclusao">Conclusão</label>
		</div>
	</div>
	<div class="row">
		<div class="input-filter col s12">
			<input type="number" name="auditor" class="validate" autofocus min="1">
			<label for="auditor">Matrícula do Auditor</label>
		</div>
	</div>
	<div class="row">
		<div class="input-filter col s12">
			<input type="submit" value="cadastrar" class="btn">
		</div>
	</div>
	
</form>