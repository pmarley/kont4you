<?php
/**
 * Kont4You functions and definitions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function kont4you_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'kont4you'),
        'footer' => __('Menu Rodapé', 'kont4you'),
    ));
}
add_action('after_setup_theme', 'kont4you_setup');

/**
 * Enqueue scripts and styles
 */
function kont4you_scripts() {
    wp_enqueue_style('kont4you-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Add smooth scrolling
    wp_add_inline_script('jquery', '
        jQuery(document).ready(function($) {
            $("a[href^=\'#\']").on("click", function(e) {
                e.preventDefault();
                var target = $(this.getAttribute("href"));
                if (target.length) {
                    $("html, body").stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'kont4you_scripts');

/**
 * Custom image function for placeholder images
 */
function kont4you_get_image($image_name) {
    $image_path = get_template_directory_uri() . '/assets/img/' . $image_name;
    
    // Check if image exists, if not return placeholder
    if (!file_exists(get_template_directory() . '/assets/img/' . $image_name)) {
        return 'https://via.placeholder.com/400x300/2563eb/ffffff?text=Kont4You';
    }
    
    return $image_path;
}

/**
 * Add custom post types for services
 */
function kont4you_custom_post_types() {
    // Services post type
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Serviços',
            'singular_name' => 'Serviço',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Serviço',
            'edit_item' => 'Editar Serviço',
            'new_item' => 'Novo Serviço',
            'view_item' => 'Ver Serviço',
            'search_items' => 'Buscar Serviços',
            'not_found' => 'Nenhum serviço encontrado',
            'not_found_in_trash' => 'Nenhum serviço encontrado na lixeira'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-businessman',
        'rewrite' => array('slug' => 'servicos')
    ));
    
    // Testimonials post type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => 'Depoimentos',
            'singular_name' => 'Depoimento',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Depoimento',
            'edit_item' => 'Editar Depoimento',
            'new_item' => 'Novo Depoimento',
            'view_item' => 'Ver Depoimento',
            'search_items' => 'Buscar Depoimentos',
            'not_found' => 'Nenhum depoimento encontrado',
            'not_found_in_trash' => 'Nenhum depoimento encontrado na lixeira'
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
        'rewrite' => array('slug' => 'depoimentos')
    ));
}
add_action('init', 'kont4you_custom_post_types');

/**
 * Add custom fields for testimonials
 */
function kont4you_add_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'Detalhes do Depoimento',
        'kont4you_testimonial_meta_box',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'kont4you_add_meta_boxes');

function kont4you_testimonial_meta_box($post) {
    wp_nonce_field('kont4you_save_testimonial_meta', 'kont4you_testimonial_nonce');
    
    $author_name = get_post_meta($post->ID, '_testimonial_author_name', true);
    $author_position = get_post_meta($post->ID, '_testimonial_author_position', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="testimonial_author_name">Nome do Autor</label></th>';
    echo '<td><input type="text" id="testimonial_author_name" name="testimonial_author_name" value="' . esc_attr($author_name) . '" class="regular-text" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="testimonial_author_position">Cargo/Função</label></th>';
    echo '<td><input type="text" id="testimonial_author_position" name="testimonial_author_position" value="' . esc_attr($author_position) . '" class="regular-text" /></td>';
    echo '</tr>';
    echo '</table>';
}

function kont4you_save_testimonial_meta($post_id) {
    if (!isset($_POST['kont4you_testimonial_nonce']) || !wp_verify_nonce($_POST['kont4you_testimonial_nonce'], 'kont4you_save_testimonial_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['testimonial_author_name'])) {
        update_post_meta($post_id, '_testimonial_author_name', sanitize_text_field($_POST['testimonial_author_name']));
    }
    
    if (isset($_POST['testimonial_author_position'])) {
        update_post_meta($post_id, '_testimonial_author_position', sanitize_text_field($_POST['testimonial_author_position']));
    }
}
add_action('save_post', 'kont4you_save_testimonial_meta');

/**
 * Contact form handler
 */
function kont4you_handle_contact_form() {
    if (isset($_POST['kont4you_contact_nonce']) && wp_verify_nonce($_POST['kont4you_contact_nonce'], 'kont4you_contact_form')) {
        $nome = sanitize_text_field($_POST['nome']);
        $email = sanitize_email($_POST['email']);
        $telefone = sanitize_text_field($_POST['telefone']);
        $mensagem = sanitize_textarea_field($_POST['mensagem']);
        
        $to = get_option('admin_email');
        $subject = 'Nova mensagem do site Kont4You';
        $body = "Nome: $nome\n";
        $body .= "Email: $email\n";
        $body .= "Telefone: $telefone\n";
        $body .= "Mensagem: $mensagem\n";
        
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        wp_mail($to, $subject, $body, $headers);
        
        wp_redirect(home_url('/?contact=success'));
        exit;
    }
}
add_action('init', 'kont4you_handle_contact_form');

/**
 * Add customizer options
 */
function kont4you_customize_register($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('kont4you_contact_info', array(
        'title' => 'Informações de Contato',
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('kont4you_address', array(
        'default' => 'Av. Rio Branco, 125 - 19º andar - Centro, RJ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('kont4you_address', array(
        'label' => 'Endereço',
        'section' => 'kont4you_contact_info',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('kont4you_email', array(
        'default' => 'kontcomigo@kont4you.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('kont4you_email', array(
        'label' => 'Email',
        'section' => 'kont4you_contact_info',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('kont4you_phone', array(
        'default' => '(21) 98306-0000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('kont4you_phone', array(
        'label' => 'Telefone',
        'section' => 'kont4you_contact_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'kont4you_customize_register');
