<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-BR">
	<!--<![endif]-->
	<head>

		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- CSS
		================================================== -->
		<?php Publico::css('base');
		Publico::css('skeleton');
		Publico::css('layout');
		?>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--  Jquery -->
		<?php
		Publico::js('vendor/jquery-1.11.1.min');
		Publico::js('vendor/jquery-1.7');
		Publico::js('vendor/jquery-1.3.2.min');
		Publico::js('vendor/modernizr-2.8.0.min');
		Publico::js('circle');
		?>
	</head>
	<body >
		<div class="container">
			<?php $this->view($conteudo)
			?>
		</div>


<footer>
	<div class="container">
		<div class="c16 colunas add_bottom">
			<hr>
			<em>Desenvolvido por Demetrios Felipe</em><br>
			<small>com base em <?php Texto::linkfora("http://getskeleton.com", "Skeleton")?></small>
		</div>


	</div>
</footer>
		<?php
		Publico::js('scripts');
		?>
	</body>
</html>
