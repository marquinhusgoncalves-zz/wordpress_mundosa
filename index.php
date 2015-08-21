<?php get_header(); ?>

<div id="carousel-index" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-index" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-index" data-slide-to="1"></li>
		<li data-target="#carousel-index" data-slide-to="2"></li>
		<li data-target="#carousel-index" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<a href="<?php bloginfo('url'); ?>/catalogo-somague-mph/"><img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_somague.jpg" alt="Banner Mundo S A"></a>
		</div>
		<div class="item">
			<a href="<?php bloginfo('url'); ?>/campanha-pao-baby-palacio-do-pao/"><img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_palaciodopao.jpg" alt="Banner Mundo S A"></a>
		</div>
		<div class="item">
			<a href="<?php bloginfo('url'); ?>/guia-de-beneficios-singrafs/"><img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_guiasingrafs.jpg" alt="Banner Mundo S A"></a>
		</div>
		<div class="item">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_e3gerenciamento.jpg" alt="Banner Mundo S A"></a>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-index" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-index" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="container mundo">
	<div>
		<span class="title"><strong>nosso mundo</strong></span>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/iconsurgimos.png" alt="Ícone como surgimos">
				<div class="caption">
					<h3>Como <br>surgimos</h3>
					<p>Começamos em 2003 com a proposta de oferecer algo que até então não existia na área de publicidade e propaganda, uma agência especializada apenas em criação, só criação. E com esse objetivo fomos expandindo nosso portfolio, mas sempre com o foco em criação, design e comunicação. Criando peças e conceitos que até então, eram impraticáveis para pequenas e médias empresas.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/iconcomotrabalhamos.png" alt="Ícone como Trabalhamos">
				<div class="caption">
					<h3>Como <br>trabalhamos</h3>
					<p>Primeiro, queremos entender como funciona a empresa, o negócio, o produto e o serviço. Depois, planejamos de forma eficiente e direta o que deve ser feito, desenhamos ideias e criamos conceitos em total parceria com todos os envolvidos no projeto.
						O bom resultado final da criação e da comunicação, é a união entre as duas partes envolvidas, agência e cliente.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="thumbnail">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/oquefazemos.png" alt="Ícone o que">
				<div class="caption">
					<h3>O que <br>fazemos</h3>
					<p>
					<li>Logotipos</li>
					<li>Identidade Visual</li>
					<li>Campanhas</li>
					<li>Anúncios</li>
					<li>Catálogos</li>
					<li>Material de Ponto de Venda</li>
					<li>WebSites</li>
					<li>Redes Sociais</li>
					<li>Planejamento de Comunicação</li>
					<li>Editorial: Jornais, Revistas, Relatório Anual</li>
					<li>Construção de Conceitos Criativos</li>	
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>