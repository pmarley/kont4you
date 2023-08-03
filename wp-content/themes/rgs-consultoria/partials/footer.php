<footer class="main-container-footer">
    <div class="container">
        <div class="copy">&copy; <?php echo date('Y'); ?> - Todos os direitos reservados RGS consultoria</div>
        <div class="main-development">
            <p>Desenvolvido por <a href="mailto:sandromilagre@hotmail.com" target="_blank">esedesign</a></p>
        </div>
        <div class="main-container-social">
            <?php
            $args = array(
                'post_type' => 'social_media',
                'posts_per_page' => 2,
                'order' => 'ASC',
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) :
                $loop->the_post();
            ?>
                <a href="<?= get_field('link')['url']; ?>" target="<?= get_field('link')['target'] ?>" title="<?= the_title() ?>" class="social">
                    <img src="<?= get_field('logo_footer')['url']; ?>" alt="<?= get_field('name_social_media'); ?>" class="img-fluid">
                </a>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</footer>