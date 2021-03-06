<?php include("include/header.php");?>

<?php include("include/menu.php");?>

	<div class="col-md-10">
		<section>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<form action="#" method="post">
						<fieldset>
							<legend>Cadastro de Extintores</legend>
							<div id="frmPatrimonio" class="col-md-3">
								<div class="form-group">
									<label for="patrimonio">Patrimônio:</label>
									<input type="text" class="form-control" id="patrimonio">
								</div>
							</div>
							<div id="frmLacre" class="col-md-3">
								<div class="form-group">
									<label for="lacre">Lacre:</label>
									<input type="text" class="form-control" id="lacre">
								</div>
							</div>
							<div id="frmInmetro" class="col-md-3">
								<div class="form-group">
									<label for="inmetro">Nº. Inmetro:</label>
									<input type="text" class="form-control" id="inmetro">
								</div>
							</div>
							<div id="frmTipo" class="col-md-3">
								<div class="form-group">
									<label for="tipo">Tipo:</label>
									<input type="text" class="form-control" id="tipo">
								</div>
							</div>
							<div id="frmLt-kg" class="col-md-4">
								<div class="form-group">
									<label for="lt_kg">LT/Kg:</label>
									<input type="text" class="form-control" id="lt_kg">
								</div>
							</div>
							<div id="frmDataRecarga" class="col-md-4">
								<div class="form-group">
									<label for="data_recarga">Data Recarga:</label>
									<input type="text" class="form-control" id="data_recarga">
								</div>
							</div>
							<div id="frmProxRecarga" class="col-md-4">
								<div class="form-group">
									<label for="prox_recarga">Próxima Recarga:</label>
									<input type="text" class="form-control" id="prox_recarga">
								</div>
							</div>
							<div id="frmLocalizacao" class="col-md-12">
								<div class="form-group">
									<label for="localizacao">Localização:</label>
									<input type="text" class="form-control" id="localizacao">
								</div>
							</div>
							<div id="frmValExt" class="col-md-4">
								<div class="form-group">
									<label for="validade_extintor">Validade Extintor:</label>
									<input type="text" class="form-control" id="validade_extintor">
								</div>
							</div>
							<div id="frmSinal" class="col-md-4">
								<div class="form-group">
									<label for="sinalizacao">Sinalização:</label>
									<input type="text" class="form-control" id="sinalizacao">
								</div>
							</div>
							<div id="frmPlacas" class="col-md-4">
								<div class="form-group">
									<label for="placas">Placas:</label>
									<input type="text" class="form-control" id="placas">
								</div>
							</div>
							<input type="button" value="Enviar" id="enviar" class="btn btn-primary"/>
						</fieldset>
					</form>
					<div id="status" class="alert alert-success" role="alert"></div>
				</div>
			</div>
		</section>
	</div>
<?php include("include/footer.php");?>