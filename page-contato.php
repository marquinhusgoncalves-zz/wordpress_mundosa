<?php get_header(); ?>

<div class="contato">
  <div class="container">
    <div class="row">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="nome" placeholder="Nome">
          <label for="nome">Nome</label>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="e-mail">
          <label for="email">e-mail</label>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" id="etel" placeholder="Cel | Tel">
          <label for="tel">Cel | Tel</label>
        </div>
        <div class="form-group"> 
          <input type="text" class="form-control" id="assunto" placeholder="Assunto">
          <label for="assunto">Assunto</label>
        </div>
      </div><!--div row<-->

      <div <div class="row">
        <textarea class="form-control" rows="3"></textarea>
        <label for="mensagem">Mensagem</label>
        
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </form>
  </div>
</div>
<div id="map-canvas"></div>

<?php get_footer(); ?>