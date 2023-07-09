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

  <section class="container main-container-about-us">
    <div class="main-container-about-us-content">
      <h2 class="title">Sobre nós</h2>
      <p>Fundada em 2004, a RGS consultoria é uma empresa que presta serviços na área de direito internacional com ênfase em cidadania estrangeira e atua em processos de dupla cidadania.</p>
      <p>Com vasta experiência, se dedica na resolução de problemas e trâmites com muita criatividade, promovendo e encaminhando a seus clientes as melhores soluções.</p>
      <p>Temos como objetivo primordial, assessorar o cliente em ações ou demandas de cunho individual que envolvam de alguma forma o direito estrangeiro, sendo a advocacia internacionalista que realiza, a ponte de interligação entre as duas legislações, a do Brasil e a do país estrangeiro envolvido na demanda.</p>
      <div class="container-arrow">
        <a href="#">
          <img src="<?= image('gray_arrow.svg') ?>">
        </a>
      </div>
    </div>
    <div class="main-container-brand">
      <img src="<?= image('about-us-brand.svg') ?>" alt="" srcset="">
      <a href="#">
        Nossos Serviços
      </a>
    </div>
  </section>

  <?php partial('contact-form') ?>

</main>

<?php get_footer(); ?>