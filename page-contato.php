<?php get_header(); ?>

<?php include("top.php"); ?>
<div class="contato">
  <div class="container">
    <form>
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" id="nome">
          <label for="nome">Nome</label>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email">
          <label for="email">e-mail</label>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" id="etel">
          <label for="tel">Cel | Tel</label>
        </div>
        <div class="form-group"> 
          <input type="text" class="form-control" id="assunto">
          <label for="assunto">Assunto</label>
        </div>
      </div>
      <div class="col-md-6">
        <div>
          <textarea class="form-control" rows="3"></textarea>
          <label for="mensagem">Mensagem</label>
        </div>
        <div class="botao_form">
          <button type="submit" class="btn btn-default">Enviar <i class="fa fa-paper-plane-o"></i></button>

        </div>
      </div>
    </form>
  </div>
</div>
<div id="map-canvas"></div>

<?php get_footer(); ?>