<?php get_header(); ?>

<?php include("top.php"); ?>

<div class="portifolio">

<div class="controls">
  <label>Filtros:</label>
  
  <button class="filter" data-filter="all">Todos</button>
  <button class="filter" data-filter=".category-1">E3 Gerenciamento</button>
  <button class="filter" data-filter=".category-2">Diageo</button>
  <button class="filter" data-filter=".category-3">Lobo Assessoria</button>
  <button class="filter" data-filter=".category-4">Palácio do Pão</button>
  <button class="filter" data-filter=".category-5">Singraf</button>
  <button class="filter" data-filter=".category-6">Somague</button>
  <button class="filter" data-filter=".category-7">Stephannie Print</button>
  
</div>
<div id="Container" class="container">
  <div class="mix category-1" data-myorder="1"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotipoe3.png" alt="..."></div>
  <div class="mix category-2" data-myorder="2"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotipodiageo.png" alt="..."></div>
  <div class="mix category-3" data-myorder="3"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotipolobo.png" alt="..."></div>
  <div class="mix category-4" data-myorder="4"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotipopalaciodopao.png" alt="..."></div>
  <div class="mix category-5" data-myorder="5"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotiposingraf.png" alt="..."></div>
  <div class="mix category-6" data-myorder="6"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotiposomaguemhp.png" alt="..."></div>
  <div class="mix category-7" data-myorder="7"><img src="<?php bloginfo('stylesheet_directory');?>/img/brands/logotipostephannieprint.png" alt="..."></div>

  
  <div class="gap"></div>
  <div class="gap"></div>
</div>

</div>
<?php get_footer(); ?>