<?php
// Template Name: Formulário de Genética

get_header();
?>

<main class="main-container-gen-form">
    <section class="main-container-banner-hero-gen-form">
        <img class="graph" src="<?= image('graph.svg') ?>">
        <a href="#formulario">
            <img class="arrow" src="<?= image('icon_direção.svg') ?>">
        </a>
    </section>
    <section id="formulario" class="main-container-icon-gen-form">
        <img src="<?= image('gen_tree_ligth.svg') ?>">
    </section>
    <section class="main-container-form">
        <div class="container">
            <h1>Árvore Genealógica</h1>
            <?= do_shortcode('[contact-form-7 id="103" title="arvore genealogica"]') ?>
            <div class="main-container-back">
                <div class="container-arrow-back">
                    <a href="#contact-form">
                        <img src="<?= image('icon_direção.svg') ?>">
                    </a>
                </div>
                <div class="main-container-home">
                    <a href="<?= base_url(); ?>">
                        <img src="<?= image('icon_home.svg') ?>">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php partial('contact-form') ?>

<?php get_footer(); ?>