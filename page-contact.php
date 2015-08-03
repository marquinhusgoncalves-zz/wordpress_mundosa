<?php

if($_POST[sent]){
 $error = "";
 if(!trim($_POST[your_cpf])){
   $ph_name = "Por favor, coloque seu CPF";
 }
 if(!trim($_POST[your_name])){
   $ph_name = "Por favor, coloque seu nome";
 }
 if(!filter_var(trim($_POST[your_email]),FILTER_VALIDATE_EMAIL)){
   $ph_email = "Coloque um e-mail válido";
 }
 if(!trim($_POST[your_cidade])){
   $ph_message = "Falta sua cidade";
 }
 if(!trim($_POST[your_date])){
   $ph_message = "Falta sua data de nascimento";
 }
 if(!trim($_POST[your_number])){
   $ph_message = "Falta sua CNH";
 }
 if(!trim($_POST[your_cat])){
   $ph_message = "Falta sua categoria";
 }
 if(!trim($_POST[your_firstcnh])){
   $ph_message = "Falta a data";
 }
 if(!trim($_POST[your_tel])){
   $ph_message = "Falta seu telefone";
 }
 if(!trim($_POST[your_cel])){
   $ph_message = "Falta seu celular";
 }
 if(!trim($_POST[your_message])){
   $ph_message = "Falta sua mensagem";
 }
 if(!$error){
   $email = wp_mail(get_option("admin_email"),trim($_POST[your_name])." enviou uma mensagem do site ".get_option("blogname"),stripslashes(trim($_POST[your_message])).trim($_POST[your_cpf]).trim($_POST[your_name]).trim($_POST[your_email]).trim($_POST[your_cidade]).trim($_POST[your_date]).trim($_POST[your_number]).trim($_POST[your_cat]).trim($_POST[your_firstcnh]).trim($_POST[your_tel]).trim($_POST[your_cel]),"From: ".trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email]));
 }
}
get_header(); ?>

<div class="contato">
  <div class="container">

    <?php if($email){ ?>
    <div class = "alert alert-success" role = "alert" data-dismiss = "alert">
      <a href = "#" class = "alert-link">Muito obrigado! Seu e-mail foi enviado com sucesso.</a>
    </div>
    <?php } else { if($error) { ?>
    <div class = "alert alert-warning" role = "alert" data-dismiss = "alert">
      <a href = "#" class = "alert-link">Precisa preencher por completo.</a>
    </div>
    <?php echo $error; ?>

    <?php } else { the_content(); } ?>

    <?php if( $post_response ) : ?>
      <div class = "alert alert-<?php echo $post_response->status ?>">
        <?php echo $post_response->message ?>
      </div>
    <?php endif ?>

    <form action="<?php the_permalink(); ?>" method="post">
      <input type="hidden" name="sent" id="sent" value="1" />
      <div class="col-sm-6">
        <div class="form-group">
          <div class="radio-inline">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Física
            </label>
          </div>
          <div class="radio-inline">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Jurídica
            </label>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $_POST[your_cpf];?>" placeholder="">
          <label for="nome">CPF</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="your_name" id="your_name" value="<?php echo $_POST[your_name];?>" placeholder="">
          <label for="nome">Nome</label>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="your_email" id="your_email" value="<?php echo $_POST[your_email];?>" placeholder="">
          <label for="email">e-mail</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $_POST[your_cidade];?>" placeholder="">
          <label for="cidade">Cidade</label>
        </div>
        <div class="form-group">
          <select class="form-control">
            <option>SP</option>
            <option>MG</option>
            <option>RJ</option>
            <option>PR</option>
            <option>BA</option>
          </select>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" name = "datanasc" id = "datanasc" value="<?php echo $_POST[your_date];?>" placeholder="">
          <label for="datanasc">Data de Nascimento</label>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <div class="radio-inline">
            <label>
              <input type="radio" name="optionsRadios1" id="optionsRadios1" value="masculino" checked>
              Masculino
            </label>
          </div>
          <div class="radio-inline">
            <label>
              <input type="radio" name="optionsRadios1" id="optionsRadios2" value="feminino">
              Feminino
            </label>
          </div>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" name = "numbercnh" id = "numbercnh" value="<?php echo $_POST[number];?>" placeholder="">
          <label for="numbercnh">Número CNH</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name = "cat" id = "cat" value="<?php echo $_POST[cat];?>" placeholder="">
          <label for="cat">Categoria</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name = "firstcnh" id = "firstcnh" value="<?php echo $_POST[firstcnh];?>" placeholder="">
          <label for="firstcnh">1º Habilitação</label>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name = "your_tel" id = "your_tel" value="<?php echo $_POST[your_tel];?>" placeholder="">
          <label for="tel">Telefone</label>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name = "cel" id = "cel" value="<?php echo $_POST[your_cel];?>" placeholder="">
          <label for="cel">Celular </label>
        </div>
      </div>
       <div class="col-sm-12">
      <div class="form-group">
       <div class="col-sm-4">
       <ul>
        <li><label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox1" value="option1"> Guincho Leve
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> Guincho Pesado
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> Guincho munk
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox4" value="option4"> Cegonheiro
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox5" value="option5"> Chaveiro
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox6" value="option6"> Táxi
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox7" value="option7"> Locadora de Veículos
        </label></li>
        </ul>
        </div>
         <div class="col-sm-4">
         <ul>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox8" value="option8"> Elétrica
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox9" value="option9"> Hidráulica/bombeiro
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox10" value="option10"> Desentupimento
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox11" value="option11"> Linha branca
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox12" value="option12"> Ar condicionado
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox13" value="option13"> Vidraçaria
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox14" value="option14"> Oficinas mecânicas
        </label></li>
        </ul>
        </div>
         <div class="col-sm-4">
         <ul>
          <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox15" value="option15"> Serralheiro
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox16" value="option16"> Marceneiro
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox157" value="option17"> Clínica veterinária
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox18" value="option18"> Assistência funerária
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox19" value="option19"> Dedetização
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox20" value="option20"> Manut. de portões
        </label></li>
        <li><label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox21" value="option21"> Funilaria e pintura
        </label></li>
        </ul>
      </div>
      </div>
      <div>
        <textarea class="form-control" rows="3" name="your_message" id="your_message" placeholder=""><?php echo stripslashes($_POST[your_message]); ?></textarea>
        <label for="mensagem">Descreva sua experiência profissional</label>
      </div>
      <div class="botao_form">
        <button type="submit" class="btn btn-default">Enviar <i class="fa fa-paper-plane-o"></i></button>
      </div>
      
    </form>

    <?php } ?>

  </div>
</div>

<?php get_footer(); ?>
