<?php get_header(); ?>

<div class="page-header">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="post-meta">
                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span class="post-category"><?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn-secondary">Ler mais</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'prev_text' => '← Anterior',
                    'next_text' => 'Próximo →',
                    'type' => 'list'
                ));
                ?>
            </div>
            
        <?php else : ?>
            <div class="no-posts">
                <h2>Nenhum post encontrado</h2>
                <p>Desculpe, não encontramos nenhum post que corresponda aos seus critérios.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
