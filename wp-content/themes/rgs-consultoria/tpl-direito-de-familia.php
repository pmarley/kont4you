<?php
/*
Template Name: direito de familia
*/
get_header();
?>

<section class="container-direito-de-familia">
  <div class="banner">
    <div class="rectangle">
      <div class="glass-effect">
        <img src="<?php echo image("icon_justiça.svg") ?>" alt="">
        <p class="pt-3">Homologação de
          Decisão Estrangeira</p>
      </div>
    </div>
    <img src="<?php echo image("BannerHomologação1.png") ?>" alt="">
    <img src="<?php echo image("Rectanglebege.png") ?>" alt="">
  </div>

  <div id="cities" class="container container-cidades">
    <div class="por-onde-comecar">
      <div class="primeiros-passos">
        <div class="pesquisa">
          <div class="passotres">
            <h1>Como funciona?</h1>
            <p>A Constituição Federal estabelece que a homologação de sentenças ou decisões estrangeiras é de competência do Superior Tribunal de Justiça (STJ). A homologação é um processo necessário para que a sentença proferida no exterior – ou qualquer ato não judicial que, pela lei brasileira, tenha natureza de sentença – possa produzir efeitos no Brasil.
              <br>
              <br>
              Os casos mais comuns são os divórcios, separações, alimentos e ações indenizatórias resolvidas no exterior.
              <br>
              <br>
              Nosso escritório está capacitado para promover todo o processo de homologação, bem como executar a sentença contra pessoas e empresas, mesmo se uma das partes estiver no exterior.
              <br>
              <br>
              Para avançarmos, Preencha nosso formulário de contato e mande uma cópia da decisão que você precisa homologar (se já existir uma tradução mande em anexo também) e aguarde que responderemos com um orçamento.
            </p>
            <div class="botao-contato">
              <a href="">
                <button>
                  <img src="<?php echo image("icon_contato.svg") ?>" alt="">
                  contato
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="img-lisboa">
          <img class="" src="<?php echo image("fotohomologação.png") ?>" alt="">
          <img src="<?php echo image("Rectanglehomolocação.png") ?>" alt="">
        </div>
      </div>
      <div class="arrow-down container">
        <a href="#direito-de-familia" id="direito-de-familia">
          <img src="<?php echo image("icon_direção.svg") ?>" alt="">
        </a>
      </div>
    </div>
  </div>

  <div class="banner">
    <img src="<?php echo image("TarjaDireitodeFamília.png") ?>" alt="">
  </div>

  <div id="cities" class="container container-cidades">
    <div class="por-onde-comecar">
      <div class="primeiros-passos">
        <div class="pesquisa">
          <div class="passotres">
            <h1>Consultoria, Sucessões e Legislação Estrangeira</h1>
            <p>Os casos mais comuns são assessoria para execução de alimentos e indenizações quando uma das partes ou o bem se encontre no estrangeiro.
              <br>
              <br>
              A questão da definição da guarda de crianças e adolescentes quando os responsáveis residem em países diferentes, bem como a orientação necessária para requerer alimentos quando o devedor reside fora do Brasil são algumas das demandas que podem ser atendidas por este escritório.
              <br>
              <br>
              Relatando seu caso por e-mail poderemos orientá-lo (a) fornecendo consultoria ou representação processual, com sigilo absoluto.
            </p>
            <div class="botao-contato pt-5">
              <a href="">
                <button>
                  <img src="<?php echo image("icon_contato.svg") ?>" alt="">
                  contato
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="img-lisboa">
          <img class="" src="<?php echo image("Família1.png") ?>" alt="">
          <img src="<?php echo image("Rectanglehomolocação.png") ?>" alt="">
          <div class="pt-3 assemble-family-tree">
            <img src="<?php echo image("oBtãoÁrvoreGenealógica.png") ?>" alt="">
            <a href="">Montar minha árvore genealógica</a>
            <img src="<?php echo image("botão_home.png") ?>" alt="">
          </div>
        </div>
      </div>
      <div class="arrow-down container">
        <a href="#contact-form">
          <img src="<?php echo image("icon_direção.svg") ?>" alt="">
        </a>
      </div>
    </div>
  </div>
  <?php partial('contact-form') ?>
</section>

<?php
get_footer();
?>