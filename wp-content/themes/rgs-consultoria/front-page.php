<?php get_header(); ?>

<main class="main-container homepage">
    <section class="main-container-hero">
        <div class="beige-block"></div>
        <div class="container-content-hero" style="background: url(<?= image('hero.png') ?>); background-size: cover; background-position: right; background-repeat: repeat;">
            <!-- <img src="" alt="" srcset=""> -->
            <div class="main-container-card">
                <div class="main-card">
                    <h1>Realizando sonhos, valorizando sua história!</h1>
                    <p>É assim que a RGS consultoria trabalha, encontrando e unindo o elo que faltava em sua vida. <br>Descubra como e entenda os caminhos para realizar o sonho da dupla cidadania.</p>
                    <a href="#our-services" class="">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="container main-container-about-us">
        <div class="main-container-about-us-content">
            <h2 class="title">Sobre nós</h2>
            <p>Fundada em 2004, a RGS consultoria é uma empresa que presta serviços na área de direito internacional com
                ênfase em cidadania estrangeira e atua em processos de dupla cidadania.</p>
            <p>Com vasta experiência, se dedica na resolução de problemas e trâmites com muita criatividade, promovendo
                e encaminhando a seus clientes as melhores soluções.</p>
            <p>Temos como objetivo primordial, assessorar o cliente em ações ou demandas de cunho individual que
                envolvam de alguma forma o direito estrangeiro, sendo a advocacia internacionalista que realiza, a ponte
                de interligação entre as duas legislações, a do Brasil e a do país estrangeiro envolvido na demanda.</p>
            <div class="container-arrow">
                <a id="down" href="#down">
                    <img src="<?= image('gray_arrow.svg') ?>">
                </a>
            </div>
        </div>
        <div class="main-container-brand">
            <img src="<?= image('about-us-brand.svg') ?>" alt="" srcset="">
            <a href="#our-services">
                Nossos Serviços
            </a>
        </div>
        <div class="main-container-expirence">
            <div class="container-expirence">
                <div class="title-expirence">
                    <img src="<?= image('diploma.svg') ?>">
                    <p>Rinara Granato Santos<br />OAB/MG 96911</p>
                </div>
                <p>Advogada Internacionalista<br>
                    Professora de Direito Internacional<br>
                    e Direitos Humanos.<br>
                    Mestra em Educação Profissional<br>
                    e Tecnológica.<br>
                    Doutora em Ciências Jurídicas e Sociais.</p>
            </div>
            <div class="main-container-glass-more-info">
                <h3>Para mais informações, entre em contato conosco por email ou nosso Whatsapp.</h3>
            </div>
        </div>
        <div class="main-container-photo">
            <img src="<?= image('person_1.png') ?>">
            <div class="main-container-glass-more-info-content">
                <div class="container-social-media">
                    <div class="container-whats">
                        <a href="https://api.whatsapp.com/send?phone=5532991361591" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                <path d="M35 17.5C35 27.1651 27.1651 35 17.5 35C7.83543 35 0 27.1651 0 17.5C0 7.8349 7.83543 0 17.5 0C27.1651 0 35 7.8349 35 17.5ZM22.7047 19.4635C22.4271 19.3247 21.0636 18.6543 20.8092 18.5614C20.5548 18.469 20.37 18.4226 20.1847 18.7002C20 18.9779 19.4686 19.6029 19.3064 19.7876C19.1449 19.9725 18.9834 19.9962 18.7058 19.8568C18.4281 19.7186 17.5349 19.4255 16.475 18.4807C15.6504 17.7457 15.0939 16.8374 14.9319 16.5597C14.7704 16.282 14.9148 16.1322 15.0537 15.9939C15.1786 15.8695 15.3313 15.6697 15.4695 15.5083C15.6084 15.3462 15.6549 15.2306 15.7467 15.0454C15.8396 14.8606 15.7932 14.6986 15.724 14.5598C15.6548 14.4209 15.1001 13.0559 14.8688 12.5005C14.6437 11.9601 14.4152 12.0332 14.2443 12.0248C14.0829 12.0165 13.8982 12.0148 13.7128 12.0148C13.5281 12.0148 13.2278 12.0844 12.9733 12.3616C12.719 12.6399 12.0027 13.3103 12.0027 14.6752C12.0027 16.0399 12.9965 17.3584 13.1354 17.5437C13.2737 17.7291 15.0911 20.5301 17.8733 21.7309C18.5355 22.0168 19.052 22.1872 19.4552 22.3149C20.1195 22.5262 20.7241 22.4963 21.202 22.425C21.7352 22.3453 22.8431 21.754 23.0743 21.1064C23.306 20.4586 23.306 19.9033 23.2364 19.7876C23.1666 19.6721 22.982 19.6029 22.7048 19.4636L22.7047 19.4635ZM17.6432 26.3719H17.6393C15.9839 26.3713 14.3599 25.9272 12.9433 25.0865L12.606 24.8863L9.11418 25.8023L10.0461 22.3983L9.8266 22.0493C8.90344 20.5808 8.41499 18.8833 8.41615 17.1405C8.41828 12.0544 12.5573 7.91669 17.647 7.91669C20.1112 7.91776 22.4282 8.87857 24.1705 10.622C25.9123 12.366 26.8709 14.6829 26.8703 17.1481C26.868 22.2346 22.7291 26.3719 17.6433 26.3719H17.6432ZM25.4963 9.29712C23.4005 7.19921 20.6128 6.04373 17.6432 6.04214C11.5241 6.04214 6.54381 11.0206 6.54159 17.1397C6.54097 19.0956 7.05215 21.0049 8.02335 22.6881L6.4487 28.4389L12.3333 26.8957C13.955 27.7796 15.7808 28.2459 17.6388 28.2464H17.6432C23.7617 28.2464 28.742 23.2679 28.7448 17.1488C28.746 14.1835 27.5921 11.3947 25.4963 9.2973V9.29712Z" fill="white"></path>
                            </svg>
                            <span>Tel.: (32) 991361591</span>
                        </a>
                    </div>
                    <div class="container-mail">
                        <a href="mailto:contato@rgsconsultoria.net.br" target="_blank">
                            <img src="<?= image('icons/icon_email.svg') ?>">
                            <span>contato@rgsconsultoria.net.br</span>
                        </a>
                    </div>
                </div>
                <span id="our-services"></span>
            </div>
        </div>
    </section>
    <section class="main-container-our-services">
        <div class="container">
            <div class="main-container-title">
                <h2>Nossos Serviços</h2>
            </div>
            <div class="main-container-cards-services">
                <?php
                $file = file_get_contents(get_template_directory() . '/inc/json/services.json');

                $content = json_decode($file);

                foreach ($content->services as $service) :
                ?>
                    <div class="main-container-card-service">
                        <div class="main-container-icon">
                            <img src="<?= image($service->icon) ?>" alt="" srcset="">
                            <h2><?= $service->title ?></h2>
                        </div>
                        <p><?= $service->description ?></p>
                        <a href="<?= $service->link ?>">Leia mais</a>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="main-container-icon-gen-tree">
                <img src="<?= image('gen_tree.svg') ?>">
                <h1 class="title-gen-tree">
                    Árvore Genealógica
                </h1>
                <div class="main-container-content-gen-tree">
                    <div class="paragraph">
                        <p>A árvore genealógica é a representação gráfica e simbólica do histórico das ligações
                            familiares
                            de um indivíduo, apresentando de forma organizada os seus ascendentes e descendentes.</p>
                        <br>
                        <p>Este é um instrumento importante no processo genealógico, pois é uma maneira de levantar
                            dados
                            sobre os ancestrais dos membros que tiveram participação na construção familiar de uma
                            pessoa,
                            de maneira que fiquem estabelecidas as conexões entre esses indivíduos.</p>
                        <br>
                        <p>Para fazer a construção da árvore genealógica é necessário descobrir de onde vieram os seus
                            ancestrais, o que pode ser feito buscando a origem dos sobrenomes do pai e da mãe de um
                            indivíduo. As pesquisas são feitas levando em conta aspectos como seus nomes e algumas
                            vezes,
                            datas e lugares de nascimento, documentos importantes, registros de casamento, fotos e
                            falecimento.</p>
                        <br>
                        <p>Quando o indivíduo que constrói a árvore genealógica é da própria família, ele é chamado de
                            probandus ou de cujus.</p>
                        <br>
                        <p class="highlight">Entenda ainda melhor como deve proceder antes de criar
                            sua árvore genealógica lendo o texto ao lado.</p>
                    </div>
                    <div class="paragraph">
                        <p class="highlight">Como proceder ao enviar documentos e montar sua Árvore Genealógica:</p>
                        <p>Faça sua pesquisa e reúna todos os documentos referentes ao serviço que precisa, seja para
                            cidadania italiana ou portuguesa. Dentro de nosso site você pode se informar melhor sobre
                            esses
                            documentos clicando nos dois links abaixo.</p>
                        <p> que reunir todos os documentos com você é hora de
                            montar sua Árvore Genealógica.</p>
                        <ul>
                            <li>Preencha com as informações corretas de acordo com a documentação.</li>
                            <li>Após a árvore preenchida, gere o PDF e você pode salvar em seu computador, celular ou
                                imprimir se preferir. </li>
                            <li>Com todos os documentos em mãos e a cópia da árvore genealógica salva em seu
                                dispositivo, vá
                                em nosso site e na área do formulário de contato, preencha com seus dados.</li>
                            <li>Faça o upload de seus documentos e a cópia de sua árvore Genealógica, espere o
                                carregamento
                                dos arquivos e click em enviar.</li>
                        </ul>
                        <p>Uma mensagem de confirmação irá aparecer em sua tela.</p>
                        <p>Pronto, é só aguardar que em breve retornaremos.</p>
                        <p class="highlight soft">Documentos apenas nos formatos: PDF, JPEG ou DOC.</p>
                    </div>
                </div>
                <div class="container-buttons-gen-tree">
                    <a class="redir" href="<?= base_url('cidadania-italiana') ?>">
                        Cidadania Italiana
                    </a>
                    <a class="redir" href="<?= base_url('cidadania-portuguesa') ?>">
                        Cidadania Portuguesa
                    </a>
                    <a class="redir" href="<?= base_url('arvore-genealogica') ?>">
                        Arvore Genealógica
                    </a>
                    <a class="back-to-top" href="<?= base_url() ?>">
                        <img src="<?= image('icon_home.svg') ?>" alt="">
                    </a>
                </div>
                <div class="container-arrow-next-section">
                    <a id="contact-form-down" href="#contact-form-down">
                        <img class="mb-0" src="<?= image('icon_direção.svg') ?>" alt="">
                    </a>
                </div>
            </div>

        </div>
    </section>

    <?php partial('contact-form'); ?>

</main>

<?php get_footer(); ?>