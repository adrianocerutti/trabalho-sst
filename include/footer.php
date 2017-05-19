	<footer>
		<p><a href="" target="_blank">Desenvolvido por Adriano Bernardo Cerutti.</a></p>
	</footer>
	<script src="js/jquery-1.11.3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/ajaxpost.js"></script>
	<script>
		$(document).ready(function(){
			$('.head').click(function(e){
				e.preventDefault();
				$(this).closest('li').find('.content').slideToggle();
			});
		});
	</script>
	<script>
		$(document).ready(function() {

			/* expande todo o menu */
			
			$("#expandir").click(function() {
				$(".content").show();
			});

			/* recolhe todo o menu*/

			$("#recolher").click(function() {
				$(".content").hide();
			});

			/* seleciona todos os campos do tipo checkbox */

			$("#selecionar-todos").click(function() {
				$(".corpo-resultados input[type='checkbox']").attr('checked', 'checked');
			});
		});
	</script>
</body>
</html>