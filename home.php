<?php include("include/header.php");?>

	<div class="col-md-12">
		<section>
			<div class="titulo">
				<h3>Extintores</h3>
			</div>
			<div  class="table-responsive">
				<div class="corpo-resultados-home">
					<table class="table table-bordered">
						<tr>
							<th class="active">Nº Patrimônio</th>
							<th class="active">Nº Lacre</th>
							<th class="active">Nº Inmetro</th>
							<th class="active">Tipo</th>
							<th class="active">Lt / Kg</th>
							<th class="active">Data Recarga</th>
							<th class="active">Próxima Recarga</th>
							<th class="active">Status</th>
							<th class="active">Localização</th>
							<th class="active">Validade</th>
							<th class="active">Sinalização</th>
							<th class="active">Placas</th>
						</tr>
							<tr>
							<?php
								include("include/conexao.php");

								$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "1"; // página atual, caso não exista assume o valor 1
								$limite = 10; // limite de registros por páginas
								$links = 2; //número de links exibidos antes e depois da página atual
								$inicio = ($pagina-1) * $limite; //define o início da consulta, no caso o primeiro parâmetro do LIMIT

								$sqlPaginacao = mysqli_query($con,"SELECT * FROM requisitos"); //retorna o total de registros da tabela
								$paginas = intval((mysqli_num_rows($sqlPaginacao)-1) / $limite); //faz o cálculo do número de páginas

								$sql = mysqli_query($con,"SELECT * FROM requisitos ORDER BY id ASC limit $inicio, $limite");
								$total = mysqli_num_rows($sql);

								if ($total > 0) {
									while ($dados = mysqli_fetch_array($sql)) {
										$id					= $dados["id"];
										$patrimonio		= $dados["patrimonio"];
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

										$date = $prox_recarga;
										$timestamp1 = strtotime($date);
										$timestamp2 = strtotime('-1 month', $timestamp1);

										date('d/m/Y', $timestamp1);
										// Resultado: 11/10/1988 18:30:00
										$conta_dias = date("Y-m-d", $timestamp2);
										// Resultado: 12/10/1988 18:30:00

										$hoje = date("Y-m-d");

										$conta_dias2 = date("Y-m-t",$timestamp2);

										$data_recarga = implode("/",array_reverse(explode("-",$data_recarga)));
										$prox_recarga = implode("/",array_reverse(explode("-",$prox_recarga)));
										$validade_extintor = implode("/",array_reverse(explode("-",$validade_extintor)));
							?>
										<tr>
											<td><?php echo $patrimonio; ?></td>
											<td><?php echo $lacre; ?></td>
											<td><?php echo $inmetro; ?></td>
											<td><?php echo $tipo; ?></td>
											<td><?php echo $lt_kg; ?></td>
											<td><?php echo $data_recarga; ?></td>
											<td><?php echo $prox_recarga; ?></td>
											<td>
												<?php
													switch ($conta_dias) {
														case $hoje < $conta_dias:
															echo "<img src='imgs/green.png' alt='OK' title='OK'>";
														break;

														case $hoje >= $conta_dias && $hoje <=$conta_dias2:
															echo "<img src='imgs/yellow.png' alt='VENCE ESTE MÊS' title='VENCE ESTE MÊS'>";
														break; 

														case $hoje > $conta_dias:
															echo "<img src='imgs/red.png' alt='VENCIDO' title='VENCIDO'>";
														break;
														

													}
												?>
											</td>
											<td><?php echo $localizacao; ?></td>
											<td><?php echo $validade_extintor; ?></td>
											<td><?php echo $sinalizacao; ?></td>
											<td><?php echo $placas; ?></td>
										</tr>
							<?php
									}
								} else {
									echo "<tr>
											<td>Nenhum registro encontrado.</td>
											<td>--------</td>
										</tr>";
								}
							?>
						</tr>
					</table>
				</div>
			</div>
			<div class="paginacao">
				<?php
					echo '<div class="primeira">';
						if(($pagina) > 1) {
						    echo '<a href="?pagina=1"><img src="imgs/first.png" alt=""></a> ';
						    $anterior = $pagina - 1;
						    echo '&nbsp;<a href="?pagina='.$anterior.'"><img src="imgs/previous.png" alt=""></a> ';
						}
					echo '</div>';
				?>
				<div class="num-paginas">
					<?php
						if($pagina == 1) {
					?>
							Página <?php echo $pagina;?> de <?php echo $paginas+1;?>
					<?php
						}else {
					?>
							Página <?php echo $pagina;?> de <?php echo $paginas+1;?>
					<?php
						}
					?>
				</div>
				<?php
					echo '<div class="proxima">';
						if (($pagina-1) < $paginas) {
							    $proxima = $pagina + 1;
							    echo '<a href="?pagina='.$proxima.'"><img src="imgs/next.png" alt=""></a>';
							    $ultima = $paginas + 1;
							    echo '&nbsp;<a href="?pagina='.$ultima.'"><img src="imgs/last.png" alt=""></a>';
							}
					echo '</div>';
				?>
			</div>
			<span style="float: right; font-weight: bold; margin: 5px 10px 5px 0;"><a href="index.php">Voltar</a></span>
		</section>
	</div>
<?php include("include/footer.php");?>