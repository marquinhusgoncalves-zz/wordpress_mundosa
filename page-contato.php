<?php

$ph_name = "Alessandro Parejo";
$ph_email = "web@mundosa.com.br";
$ph_tel = "11 99999-9999";
$ph_subject = "Sobre o que seria o contato?";
$ph_message = "Escreva aqui...";

if($_POST[sent]){
 $error = "";
 if(!trim($_POST[your_name])){
 $ph_name = "Por favor, coloque seu nome";
 }
 if(!filter_var(trim($_POST[your_email]),FILTER_VALIDATE_EMAIL)){
 $ph_email = "Coloque um e-mail válido";
 }
 if(!trim($_POST[your_tel])){
 $ph_message = "Falta sua mensagem";
 }
 if(!trim($_POST[your_message])){
 $ph_message = "Falta sua mensagem";
 }
 if(!trim($_POST[your_subject])){
 $ph_subject = "Seria bom saber o assunto";
 }
 if(!$error){
 $email = wp_mail(get_option("admin_email"),trim($_POST[your_name])." enviou uma mensagem do site ".get_option("blogname"),stripslashes(trim($_POST[your_message])),"From: ".trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email]));
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
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" name="your_name" id="your_name" value="<?php echo $_POST[your_name];?>" placeholder="<?php echo $ph_name; ?>">
          <label for="nome">Nome</label>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="your_email" id="your_email" value="<?php echo $_POST[your_email];?>" placeholder="<?php echo $ph_email; ?>">
          <label for="email">e-mail</label>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name = "your_tel" id = "your_tel" value="<?php echo $_POST[your_tel];?>" placeholder="<?php echo $ph_tel; ?>">
          <label for="tel">Cel | Tel</label>
        </div>
        <div class="form-group"> 
          <input type="text" class="form-control" name="your_subject" id="your_subject" value="<?php echo $_POST[your_subject];?>" placeholder="<?php echo $ph_subject; ?>">
          <label for="assunto">Assunto</label>
        </div>
      </div>
      <div class="col-md-6">
        <div>
          <textarea class="form-control" rows="3" name="your_message" id="your_message" placeholder="<?php echo $ph_message; ?>"><?php echo stripslashes($_POST[your_message]); ?></textarea>
          <label for="mensagem">Mensagem</label>
        </div>
        <!-- <div class="form-group">
          <input type="text" class="form-control" id="human" name="human">
          <label for="human" class="control-label">2 + 3 = ?</label>
        </div> -->
        <div class="botao_form">
          <button type="submit" class="btn btn-default">Enviar <i class="fa fa-paper-plane-o"></i></button>
        </div>
      </div>
    </form>

<?php } ?>

  </div>
</div>
<div id="map-canvas"></div>

<?php get_footer(); ?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 

<script type="text/javascript">

  function initialize() {
    var myLatlng = new google.maps.LatLng(-23.7050083, -46.5472141);
    var mapOptions = {
      zoom: 18,
      center: myLatlng,
      disableDefaultUI: false,
      scrollwheel: false,
      draggable: false
    }
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Mundo S/A'
    });

    var styles = [
    {
      stylers: [
      { hue: "#6C1F1F" },
      { saturation: -20 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
      { lightness: 100 },
      { visibility: "simplified" }
      ]
    },{
      featureType: "road.local",
      elementType: "labels",
    }
    ];

    map.setOptions({styles: styles});
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>