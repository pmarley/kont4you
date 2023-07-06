<?php get_header(); ?>

<main class="main-container homepage">
    <section class="main-container-hero">
        <img src="<?= image('hero.png') ?>" alt="" srcset="">
        <div class="main-container-card container">
            <div class="main-card">
                <h1>Get your <span>business</span> online</h1>
                <p>Get your business online with our web design and development services. We offer a range of services to help you get online and reach more customers.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
            <div class="column"></div>
        </div>
    </section>

    <?php partial('contact-form') ?>

</main>

<?php get_footer(); ?>