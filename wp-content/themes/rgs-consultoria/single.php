<?php get_header(); ?>

<div class="page-header">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="post-meta">
            <span class="post-date"><?php echo get_the_date(); ?></span>
            <?php if (has_category()) : ?>
                <span class="post-category"><?php the_category(', '); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
                <div class="post-footer">
                    <?php if (has_tag()) : ?>
                        <div class="post-tags">
                            <strong>Tags:</strong> <?php the_tags('', ', '); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-navigation">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        
                        <?php if ($prev_post) : ?>
                            <div class="nav-previous">
                                <a href="<?php echo get_permalink($prev_post); ?>">
                                    ← <?php echo get_the_title($prev_post); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($next_post) : ?>
                            <div class="nav-next">
                                <a href="<?php echo get_permalink($next_post); ?>">
                                    <?php echo get_the_title($next_post); ?> →
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
