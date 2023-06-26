<?php 

/**
 * Santins color scheme
 */
function santins_admin_color_scheme() {
    //Get the theme directory
    $theme_dir = get_template_directory_uri();

    //santins
    wp_admin_css_color( 'santins', __( 'santins' ),
        $theme_dir . '../santins.css',
        array( '#23282d', '#fff', '#f3205c' , '#f3205c')
    );
}

add_action('admin_init', 'santins_admin_color_scheme');

/**
 * Login logo
 */
function my_login_logo() { ?>
    <style type="text/css">
        .login {
            background-color: #23282d;
        }

        .login #backtoblog a, .login #nav a {
            color: #fff !important;
        }

        .wp-core-ui .button-primary {
            background: #f3205c !important;
            border-color: #f3205c !important;
        }

        .wp-core-ui .button-primary:hover, 
        .wp-core-ui .button-primary:focus {
            background: #f42f67 !important;
            border-color: #f21151 !important;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo image('login-logo.svg'); ?>);
            height: 65px;
            width: 320px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );