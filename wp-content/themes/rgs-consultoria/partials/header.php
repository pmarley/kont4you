<header class="container main-container-header">
    <!-- logo placeholder -->
    <div class="main-container-logo">
        <a href="<?= BASE_URL(); ?>">
            <img src="<?= image('logo-header.png') ?>" class="img-fluid">
        </a>
    </div>
    <div class="main-container-menu">
        <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
            ]);
        ?>
    </div>
    <div class="main-container-social">
            <?php 
                $args = array(
                    'post_type' => 'social_media',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) :
                    $loop->the_post();
            ?>
                <a href="<?= get_field('link')['url']; ?>" target="_blank" title="<?= the_title() ?>" class="social">
                    <img src="<?= get_field('logo')['url']; ?>" alt="<?= get_field('name_social_media'); ?>" class="img-fluid">
                </a>
            <?php endwhile; wp_reset_query(); ?>
    </div>
</header>