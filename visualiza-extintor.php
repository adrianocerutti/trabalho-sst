<?php include("include/header.php");?>

<?php include("include/menu.php");?>
	<form action="php/excluir.php" method="post">
		<div class="col-md-10">
			<section>
				<div class="titulo">
					<h3>Extintores</h3>
				</div>
				<div id="breadcrumb">
					Visualizar
				</div>
				<div class="faixa-opcoes">
					<div class="botoes">
						<ul>
							<li id="novos"><a href="cadastro-extintor.php">Novo</a></li>
							<li id="selecionar-todos"><a href="#">Selecionar Todos</a></li>
							<li id="excluir"><input type="submit" name="excluir" value="Excluir"></li>
						</ul>
					</div>
					<div class="faixa-pesquisa">
						<form action="">
							<input type="search" name="" value="" placeholder="Digite aqui sua busca">
							<select name="" id="">
								<option value="patrimonio">Nº Patrimônio</option>
								<input type="submit" name="procurar" value="Procurar">
							</select>
						</form>
					</div>
				</div>
				<div class="titulos-resultados">
					<table>
						<tr>
							<td>Excluir</td>
							<td>Nº Patrimônio</td>
							<td>Data Recarga</td>
						</tr>
					</table>
				</div>
				<div class="corpo-resultados">
					<table>
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
									$id		= $dados["id"];
									$patrimonio	= $dados["patrimonio"];
									$data_recarga	= $dados["data_recarga"];

									$data_recarga = implode("/",array_reverse(explode("-",$data_recarga)));

									echo "
										<tr>
											<td>
												<input type='checkbox' name='excluir[]' value='$id'>
											</td>
											<td><a href='alterar.php?id=$id'>$patrimonio</a></td>
											<td>$data_recarga</td>
										</tr>
										";
								}
							} else {
								echo "<tr>
										<td>Nenhum registro encontrado.</td>
										<td>--------</td>
									</tr>";
							}
						?>
					</table>
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
			</section>
		</div>
	</form>
<?php include("include/footer.php");?>