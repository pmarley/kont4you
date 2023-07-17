<?php
// Template Name: Formulário de Genética

get_header();
?>

<main class="main-container-gen-form">
    <section class="main-container-banner-hero-gen-form">
        <img class="graph" src="<?= image('graph.svg') ?>">
        <a href="#formulario">
            <img class="arrow" src="<?= image('icon_direção.svg') ?>" alt="">
        </a>
    </section>
    <section id="formulario" class="main-container-icon-gen-form">
        <img src="<?= image('gen_tree_ligth.svg') ?>">
    </section>
    <section class="main-container-form">
        <div class="container">
            <?= do_shortcode('[contact-form-7 id="103" title="arvore genealogica"]') ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>