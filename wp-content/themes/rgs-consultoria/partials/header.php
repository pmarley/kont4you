<header class="main-container-header">
    <div class="container">
        <!-- logo placeholder -->
        <div class="main-container-logo">
            <a href="<?= BASE_URL(); ?>">
                <img src="<?= image('logo-header.png') ?>" class="img-fluid">
            </a>
        </div>
        <div class="main-container-mobile-menu menu">
            <div class="container-hamburger-menu menu-button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="main-container-mobile-menu-items">
                <div class="menu-close">
                    <span></span>
                    <span></span>
                </div>
                <!-- Menu mobile  -->
                <?php
                $args = array(
                    'post_type' => 'menu',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );

                $loop = new WP_Query($args);

                if (!empty($loop->post_count)) :
                ?>

                    <ul class="main-container-menu-mobile">
                        <?php
                        while ($loop->have_posts()) :
                            $loop->the_post();
                        ?>
                            <li>
                                <a href="<?= get_field('link')['url']; ?>" target="_blank" title="<?= the_title() ?>" class="social">
                                    <img src="<?= get_field('dark_icon')['url']; ?>" alt="<?= get_field('name_social_media'); ?>" class="img-fluid">
                                    <span class="title"><?= the_title() ?></span>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    <?php endif; ?>
                    <!-- Redes Sociais -->
                    <?php
                    $args = array(
                        'post_type' => 'social_media',
                        'posts_per_page' => 2,
                        'order' => 'ASC',
                    );

                    $loop = new WP_Query($args);

                    if (!empty($loop->post_count)) :
                    ?>

                        <div class="main-container-social-mobile">
                            <?php
                            while ($loop->have_posts()) :
                                $loop->the_post();
                            ?>
                                <a href="<?= get_field('link')['url']; ?>" target="_blank" title="<?= the_title() ?>" class="social">
                                    <img src="<?= get_field('logo_header')['url']; ?>" alt="<?= get_field('name_social_media'); ?>" class="img-fluid">
                                </a>
                            <?php endwhile;
                            wp_reset_query(); ?>
                        </div>
                    <?php endif; ?>
                    </ul>

            </div>
        </div>
        <div class="main-container-menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
            ]);
            ?>
        </div>
        <?php
        $args = array(
            'post_type' => 'social_media',
            'posts_per_page' => 4,
            'order' => 'ASC',
        );

        $loop = new WP_Query($args);

        if (!empty($loop->post_count)) :
        ?>

            <div class="main-container-social">
                <?php
                while ($loop->have_posts()) :
                    $loop->the_post();
                ?>
                    <a href="<?= get_field('link')['url']; ?>" target="_blank" title="<?= the_title() ?>" class="social">
                        <img src="<?= get_field('logo_header')['url']; ?>" alt="<?= get_field('name_social_media'); ?>" class="img-fluid">
                    </a>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        <?php endif; ?>
    </div>
</header>