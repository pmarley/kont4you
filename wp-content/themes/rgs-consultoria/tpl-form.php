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
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.698706 11.7573L10.1113 3.1123L13.5 0L16.8887 3.1123L26.3013 11.7573C27.2329 12.613 27.2329 14.0137 26.3013 14.8693L26.3009 14.8696C25.5877 15.5247 24.5264 15.6782 23.6501 15.3301V27H18.9961V16.0003H8.41583V27H3.76179V15.1199C2.82869 15.7149 1.52866 15.6316 0.699078 14.8697L0.698706 14.8694C-0.232902 14.0138 -0.232902 12.6131 0.698706 11.7573V11.7573ZM9.48004 17.2396H17.8523V26.9999H9.48004V17.2396ZM18.6217 10.9286L13.5 6.22451L8.37829 10.9286H18.6216H18.6217Z" fill="#9D832B" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php partial('modal-send-form') ?>
<?php partial('contact-form') ?>

<?php get_footer(); ?>