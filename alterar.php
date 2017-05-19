<?php include("include/header.php");?>

<?php include("include/menu.php");?>

	<div class="col-md-10">
		<section>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<form action="#" method="post">
						<fieldset>
							<legend>Alteração de Extintores</legend>
							<?php
								include("include/conexao.php");

								$id = $_GET["id"];

								$qr = mysqli_query($con, "SELECT * FROM requisitos WHERE id = '$id' ");

								while ($dados = mysqli_fetch_array($qr)) {
									$id 					= $dados["id"];
									$patrimonio 		= $dados["patrimonio"];
									$lacre 				= $dados["lacre"];
									$inmetro 			= $dados["inmetro"];
									$tipo 				= $dados["tipo"];
									$lt_kg 				= $dados["lt_kg"];
									$data_recarga 		= $dados["data_recarga"];
									$prox_recarga 		= $dados["prox_recarga"];
									$localizacao 		= $dados["localizacao"];
									$validade_extintor 	= $dados["validade_extintor"];
									$sinalizacao 		= $dados["sinalizacao"];
									$placas 			= $dados["placas"];

									$data_recarga = implode("/",array_reverse(explode("-",$data_recarga)));
									$prox_recarga = implode("/",array_reverse(explode("-",$prox_recarga)));
									$validade_extintor = implode("/",array_reverse(explode("-",$validade_extintor)));
							?>

								<div id="frmPatrimonio" class="col-md-3">
									<div class="form-group">
										<label for="patrimonio">Patrimônio:</label>
										<input type="text" class="form-control" id="patrimonio" value="<?php echo $patrimonio;?>">
									</div>
								</div>
								<div id="frmLacre" class="col-md-3">
									<div class="form-group">
										<label for="lacre">Lacre:</label>
										<input type="text" class="form-control" id="lacre" value="<?php echo $lacre;?>">
									</div>
								</div>
								<div id="frmInmetro" class="col-md-3">
									<div class="form-group">
										<label for="inmetro">Nº. Inmetro:</label>
										<input type="text" class="form-control" id="inmetro" value="<?php echo $inmetro;?>">
									</div>
								</div>
								<div id="frmTipo" class="col-md-3">
									<div class="form-group">
										<label for="tipo">Tipo:</label>
										<input type="text" class="form-control" id="tipo" value="<?php echo $tipo;?>">
									</div>
								</div>
								<div id="frmLt-kg" class="col-md-4">
									<div class="form-group">
										<label for="lt_kg">LT/Kg:</label>
										<input type="text" class="form-control" id="lt_kg" value="<?php echo $lt_kg;?>">
									</div>
								</div>
								<div id="frmDataRecarga" class="col-md-4">
									<div class="form-group">
										<label for="data_recarga">Data Recarga:</label>
										<input type="text" class="form-control" id="data_recarga" value="<?php echo $data_recarga;?>">
									</div>
								</div>
								<div id="frmProxRecarga" class="col-md-4">
									<div class="form-group">
										<label for="prox_recarga">Próxima Recarga:</label>
										<input type="text" class="form-control" id="prox_recarga" value="<?php echo $prox_recarga;?>">
									</div>
								</div>
								<div id="frmLocalizacao" class="col-md-12">
									<div class="form-group">
										<label for="localizacao">Localização:</label>
										<input type="text" class="form-control" id="localizacao" value="<?php echo $localizacao;?>">
									</div>
								</div>
								<div id="frmValExt" class="col-md-4">
									<div class="form-group">
										<label for="validade_extintor">Validade Extintor:</label>
										<input type="text" class="form-control" id="validade_extintor" value="<?php echo $validade_extintor;?>">
									</div>
								</div>
								<div id="frmSinal" class="col-md-4">
									<div class="form-group">
										<label for="sinalizacao">Sinalização:</label>
										<input type="text" class="form-control" id="sinalizacao" value="<?php echo $sinalizacao;?>">
									</div>
								</div>
								<div id="frmPlacas" class="col-md-4">
									<div class="form-group">
										<label for="placas">Placas:</label>
										<input type="text" class="form-control" id="placas" value="<?php echo $placas;?>">
									</div>
								</div>
							<?php
								}
							?>
							<input type="button" value="Alterar" id="alterar" class="btn btn-primary"/>
							<input type="hidden" name="id" value="<?php echo $id;?>" id="id">
						</fieldset>
					</form>
					<div id="status" class="alert alert-success" role="alert"></div>
				</div>
			</div>
		</section>
	</div>
<?php include("include/footer.php");?>