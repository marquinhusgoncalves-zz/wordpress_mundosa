<?php 
//Barra superior ADM
    add_filter('show_admin_bar', '__return_false');

//Adiciona menu no adm
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

//Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'mobile' => __( 'Mobile Menu' ),
));

//Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

//Imagem destacada
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200 );

//image catagory
	add_action('admin_head', 'wpds_admin_head');
	add_action('edit_term', 'wpds_save_tax_pic');
	add_action('create_term', 'wpds_save_tax_pic');
	function wpds_admin_head() {
	$taxonomies = get_taxonomies();
	//$taxonomies = array('category'); // uncomment and specify particular taxonomies you want to add image feature.
	if (is_array($taxonomies)) {
	    foreach ($taxonomies as $z_taxonomy) {
	        add_action($z_taxonomy . '_add_form_fields', 'wpds_tax_field');
	        add_action($z_taxonomy . '_edit_form_fields', 'wpds_tax_field');
	    }
	}
	}

	// add image field in add form
	function wpds_tax_field($taxonomy) {
	wp_enqueue_style('thickbox');
	wp_enqueue_script('thickbox');
	if(empty($taxonomy)) {
	    echo '<div class="form-field">
	            <label for="wpds_tax_pic">Picture</label>
	            <input type="text" name="wpds_tax_pic" id="wpds_tax_pic" value="" />
	        </div>';
	}
	else{
	    $wpds_tax_pic_url = get_option('wpds_tax_pic' . $taxonomy->term_id);
	    echo '<tr class="form-field">
	    <th scope="row" valign="top"><label for="wpds_tax_pic">Picture</label></th>
	    <td><input type="text" name="wpds_tax_pic" id="wpds_tax_pic" value="' . $wpds_tax_pic_url . '" /><br />';
	    if(!empty($wpds_tax_pic_url))
	        echo '<img src="'.$wpds_tax_pic_url.'" style="max-width:200px;border: 1px solid #ccc;padding: 5px;box-shadow: 5px 5px 10px #ccc;margin-top: 10px;" >';
	    echo '</td></tr>';        
	}
	echo '<script type="text/javascript">
	    jQuery(document).ready(function() {
	            jQuery("#wpds_tax_pic").click(function() {
	                tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
	                return false;
	            });
	            window.send_to_editor = function(html) {
	                jQuery("#wpds_tax_pic").val( jQuery("img",html).attr("src") );
	                tb_remove();
	            }
	    });
	</script>';
	}

	// save our taxonomy image while edit or save term
	function wpds_save_tax_pic($term_id) {
	if (isset($_POST['wpds_tax_pic']))
			update_option('wpds_tax_pic' . $term_id, $_POST['wpds_tax_pic']);
	}

	// output taxonomy image url for the given term_id (NULL by default)
	function wpds_tax_pic_url($term_id = NULL) {
		if ($term_id) 
		    return get_option('wpds_tax_pic' . $term_id);
		elseif (is_category())
		    return get_option('wpds_tax_pic' . get_query_var('cat')) ;
		elseif (is_tax()) {
		    $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
		    return get_option('wpds_tax_pic' . $current_term->term_id);
		}
	}
?>