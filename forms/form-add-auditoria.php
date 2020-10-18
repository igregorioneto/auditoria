<form action="../databases/auditoria/addAuditoria.php" method="post" class="col s12">
	<div class="row">
		<div class="input-filter col s6">
			<input type="text" name="achado" class="validate" autofocus>
			<label for="achado">Achado</label>
		</div>		
		<div class="input-filter col s6">
			<input type="text" name="achado" class="validate" autofocus>
			<label for="achado">Manifestação</label>
		</div>		
	</div>
	<div class="row">
		<div class="input-filter col s6">
			<input type="text" name="achado" class="validate" autofocus>
			<label for="achado">Estimativa</label>
		</div>
		<div class="input-filter col s6">
			<input type="text" name="prazo" class="validate" autofocus>
			<label for="achado">Prazo</label>
		</div>
	</div>
	<div class="row">
		<div class="input-filter col s12">
			<textarea class="materialize-textarea"></textarea>
			<label for="achado">Conclusão</label>
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
			<button class="btn waves-effect waves-light" type="submit">Cadastrar
				<i class="material-icons right">send</i>
			</button>
			<a href="home.php" class="btn red">cancelar</a>
		</div>
	</div>
	
</form>