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
        <p class="pt-3">Homologação de <br>
          Decisão Estrangeira</p>
      </div>
    </div>
    <div class="container-images">
      <img class="main-banner" src="<?php echo image("BannerHomologação1.png") ?>" alt="">
      <div class="main-container-beige"></div>
    </div>
  </div>

  <div id="cities" class="container container-cidades">
    <div class="por-onde-comecar">
      <div class="primeiros-passos">
        <div class="pesquisa">
          <div class="passotres">
            <h1>O que é a homologação de decisão estrangeira e como operacionalizá-la na justiça brasileira?</h1>
            <p>A homologação é o ato de reconhecer juridicamente e dar validade a qualquer decisão terminativa (judicial ou não) advinda de um órgão estatal de país estrangeiro. Depois de homologada no Brasil a referida decisão (que pode ou não ser uma sentença judicial), passa a ter plena validade no nosso ordenamento, podendo, por exemplo, ser executado na justiça brasileira ou apresentado, em um cartório para averbação de divórcio. Um exemplo clássico é um acordo de alimentos firmado em outro país, que pode e deve ser executado pela justiça brasileira, após sua homologação.
              A Constituição Federal estabelece que a homologação de sentenças ou decisões estrangeiras é feita por meio de processo que tramita no Superior Tribunal de Justiça (STJ), tendo que, obrigatoriamente, ser conduzido por um(a) advogado(a). .
              <br>
              <br>
              Os casos mais comuns são divórcios, separações, alimentos e ações indenizatórias resolvidas no exterior em que, pelo menos, uma das partes resida no Brasil e aqui pretenda cumprir seus termos.
              <br>
              <br>  
              Nosso escritório é especializado nessa espécie de processo homologatório, conhecendo caminhos que abreviam, consideravelmente, o tempo de espera regular pela conclusão do feito. Temos casos de processos homologatórios iniciados e concluídos em 6 (seis) meses no STJ.
              Nosso escritório é conduzido por uma experiente advogada, professora de direito internacional, contando ainda com uma rede de advogados que atuam em parceria em outros países, estando apto a executar na justiça brasileira sentenças contra pessoas e/ou empresas com residência no exterior.
              Para avançarmos no orçamento, preencha nosso formulário de contato e mande uma cópia da decisão que você deseja homologar; se o documento já foi traduzido para o português, anexe também a tradução e aguarde nosso contato.
            </p>
          </div>
        </div>
        <div class="img-lisboa">
          <img class="img-position" src="<?php echo image("fotohomologação.png") ?>" alt="">
          <img  src="<?php echo image("Rectanglehomolocação.png") ?>" alt="">
          <div class="botao-contato">
            <a href="">
              <button>
                <img class="icone-pessoa" src="<?php echo image("icon_contato.svg") ?>" alt="">
                contato
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="arrow-down container">
        <a href="#direito-de-familia" id="direito-de-familia">
          <img src="<?php echo image("icon_direção.svg") ?>" alt="">
        </a>
      </div>
    </div>
  </div>

  <div>
    <img id="img-tarja" src="<?php echo image("Tarja Direito de Família.png") ?>" alt="">
  </div>

  <div id="cities" class="container container-cidades">
    <div class="por-onde-comecar">
      <div class="primeiros-passos">
        <div class="pesquisa">
          <div class="passotres">
            <h1>Consultoria, Sucessões e Legislação Estrangeira</h1>
            <p>
            Conduzido por uma experiente advogada, professora de direito internacional, nosso escritório está plenamente capacitado para representar os interesses dos seus clientes em processos que tramitem no Brasil e que tenham alguma das partes e/ou patrimônio em país estrangeiro.
            <br>
            <br>
            Entre as atividades desenvolvidas pela RGS Consultoria encontra-se a condução de processos ou elaboração de consultoria jurídica em assuntos relacionados a questões atinentes a solicitação, defesa ou execução de alimentos quando uma das partes se encontra em país estrangeiro, com aplicação da Convenção de Nova Iorque sobre Prestação de Alimentos no Estrangeiro (CNY), da qual o Brasil é signatário.
            <br>
            <br>
            Ainda dentro do escopo de atuação desse escritório, encontra-se a condução de processos no Brasil e/ou elaboração de consultoria jurídica em assuntos atinentes à retenção ilícita de crianças em outro país, levadas ou trazidas sem autorização de um dos pais ou do responsável legal, nos termos previstos na Convenção sobre os Aspectos Civis do Sequestro Internacional de Crianças, documento do qual o Brasil é também signatário.
            <br>
            <br>
            Algumas das demandas recorrentes atendidas por esta consultoria: homologação de divórcio concluído no estrangeiro; definição da guarda e dos alimentos de crianças e adolescentes quando um dos responsáveis reside fora do Brasil; orientação necessária para requerer e executar alimentos e indenizações no caso de devedor(a) residente fora do Brasil.
            <br>
            <br>
            Relatando seu caso por e-mail, poderemos orientá-lo(a) em absoluto sigilo.
            </p>
          </div>
        </div>
        <div class="img-lisboa">
          <img class="img-position" src="<?php echo image("Família1.png") ?>" alt="">
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
          <img  src="<?php echo image("icon_direção.svg") ?>" alt="">
        </a>
      </div>
    </div>
  </div>
  <?php partial('contact-form') ?>
</section>

<?php
get_footer();
?>