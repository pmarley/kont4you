<?php get_header(); ?>

    <main class="main-container homepage">
        <section class="main-container-hero">
            <div class="beige-block"></div>
            <div class="container-content-hero"
                 style="background: url(<?= image('hero.png') ?>); background-size: cover; background-position: right; background-repeat: repeat;">
                <!-- <img src="" alt="" srcset=""> -->
                <div class="main-container-card">
                    <div class="main-card">
                        <h1>Realizando sonhos, valorizando sua história!</h1>
                        <p>É assim que a RGS consultoria trabalha, encontrando e unindo o elo que faltava em sua vida.
                            <br>Descubra como e entenda os caminhos para realizar o sonho da dupla cidadania.</p>
                        <a href="#our-services" class="">Saiba mais</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-us" class="container main-container-about-us">
            <div class="main-container-about-us-content">
                <h2 class="title">Sobre nós</h2>
                <p>Fundada em 2004, a RGS consultoria é uma empresa que presta serviços na área de direito internacional
                    com ênfase em processos de reconhecimento de cidadania estrangeira e questões de direito privado que
                    envolvam pessoas ou patrimônio em mais de um país, além do Brasil. <br>
                    Com vasta experiência, dedica-se à resolução de problemas e trâmites processuais aplicando,
                    inclusive, normativas dispostas em Tratados dos quais o Brasil é signatário. Promove e encaminha aos
                    seus clientes as melhores soluções, intermediando, se necessário, a contratação de advogados em
                    outros países. <br>
                    Temos, portanto, como objetivo primordial assessorar o cliente em ações ou demandas de cunho
                    individual que envolvam, de alguma forma, o direito estrangeiro, sendo a advocacia internacionalista
                    realizada por esta consultoria a ponte entre duas legislações: a do Brasil e a de outro país
                    envolvido na demanda.
                </p>
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
                        <p>Rinara Granato Santos<br/>OAB/MG 96911</p>
                    </div>
                    <p>Ítalo-brasileira, Advogada Internacionalista, Professora de Direito Internacional, Constitucional
                        e Direitos Humanos. Mestra em Educação Profissional e Tecnológica. Doutora em Ciências Jurídicas
                        e Sociais.</p>
                    <a class="container-virtual-card" href="<?= asset('doc/cartao.pdf') ?>" download>
                        <svg width="38" height="50" viewBox="0 0 38 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2524 10.1499C12.1644 10.2919 12.0303 10.3552 11.8514 10.5073C11.2281 11.037 10.9866 11.5931 10.8771 11.702C10.8292 11.8617 10.7442 11.9878 10.6797 12.152C9.90286 14.1272 10.3744 27.6452 10.3744 30.534C10.091 30.3088 9.8229 30.002 9.57623 29.7599C8.71457 28.9144 7.42461 27.4358 6.28696 27.0396C2.31574 25.6564 -1.02045 29.3322 0.289352 33.1316C0.362569 33.2016 0.511105 33.5367 0.616602 33.6915C1.01342 34.2744 1.43683 34.6474 1.93816 35.1438L8.42263 41.5567C9.35775 42.4822 13.4159 46.5384 14.0409 46.9856C14.646 47.4186 15.9123 48.1509 16.3489 48.5133C16.5851 48.6018 16.793 48.7355 17.0458 48.8379C17.3181 48.948 17.5516 49.0381 17.8203 49.1293C18.4496 49.3074 19.0187 49.4916 19.727 49.6271C20.3889 49.7537 21.1113 49.8586 21.8072 49.9066C23.3731 50.0145 24.8705 50.0289 26.4432 49.9499C27.8088 49.8814 29.3219 49.6319 30.5397 49.2821C32.639 48.6791 33.2873 47.9997 33.8114 47.7974C33.8515 47.7109 34.2541 47.4428 34.4217 47.2942C34.6233 47.1155 34.8198 46.9599 34.996 46.7592C35.5305 46.1502 35.5797 46.0202 35.9822 45.5238C36.094 45.264 36.279 45.0475 36.411 44.7549C36.5381 44.4735 36.6598 44.2409 36.7793 43.9687C36.9011 43.691 36.9986 43.4009 37.1006 43.0897C37.171 42.8752 37.2996 42.3259 37.3952 42.2078C37.3782 42.0364 37.6077 41.0225 37.653 40.7343C37.7311 40.238 37.81 39.6855 37.8449 39.1712C38.0712 35.8375 37.9831 32.264 37.9831 28.8903C37.9831 26.1954 38.1865 24.7955 36.6274 23.2768C36.0889 22.7524 35.2429 22.2914 34.2329 22.2002C32.6429 22.0567 32.383 22.4599 31.4308 22.8215C30.7136 20.4029 27.993 19.308 25.7135 20.2375C25.4763 20.3343 25.2827 20.4691 25.0878 20.5457C24.8682 19.9236 24.5383 19.3455 24.1518 18.9498C23.3493 18.1284 23.2343 18.2931 22.6869 17.915C21.9579 17.7482 21.6622 17.5755 20.7384 17.6406C20.2603 17.6743 19.8004 17.7897 19.3879 17.96C19.2261 18.0269 19.1912 18.0734 19.0097 18.1259C19.0097 17.1721 19.053 13.8703 18.9706 13.1739C18.852 12.174 18.4051 11.3001 17.758 10.6496C17.4708 10.3609 17.2865 10.2591 17.1132 10.0973C16.2949 9.66629 15.7372 9.36399 14.622 9.40993C13.8466 9.44185 13.1187 9.64624 12.489 10.0353C12.4158 10.0804 12.4813 10.0499 12.3743 10.1031C12.2548 10.1625 12.3343 10.1268 12.2524 10.1498V10.1499ZM14.9794 3.1071C20.0142 3.1071 24.0958 7.16662 24.0958 12.1743C24.0958 14.0661 23.5131 15.8225 22.5168 17.2759C22.3119 17.2217 22.1077 17.1648 21.9002 17.1235C21.5743 17.0585 21.2591 17.0404 20.9341 17.0511C22.0331 15.7254 22.6933 14.0266 22.6933 12.1744C22.6933 7.93705 19.2397 4.50212 14.9795 4.50212C10.7193 4.50212 7.26575 7.93705 7.26575 12.1744C7.26575 14.3614 8.18591 16.3345 9.662 17.732C9.65365 18.3316 9.65037 18.9317 9.65 19.5312C7.35628 17.8845 5.86331 15.203 5.86331 12.1744C5.86331 7.16675 9.94478 3.10722 14.9796 3.10722L14.9794 3.1071ZM14.9794 6.1506e-05C21.7395 6.1506e-05 27.2195 5.45073 27.2195 12.1743C27.2195 14.7573 26.4102 17.152 25.0306 19.1224C24.8923 18.9145 24.7384 18.7196 24.5693 18.5465C24.3473 18.3193 24.1133 18.0956 23.8512 17.913C24.9329 16.2623 25.562 14.2915 25.562 12.1742C25.562 6.36108 20.8241 1.64855 14.9794 1.64855C9.13488 1.64855 4.39686 6.36108 4.39686 12.1742C4.39686 16.0564 6.51057 19.447 9.65538 21.2715C9.65928 21.8968 9.66546 22.522 9.67319 23.1472C5.57069 21.1811 2.7394 17.0068 2.7394 12.1742C2.7394 5.4506 8.21955 0 14.9794 0V6.1506e-05ZM17.2688 28.3266C17.2745 28.9529 17.7842 29.4658 18.4142 29.4658H18.4364C19.0689 29.4658 19.5922 28.9511 19.5865 28.3219L19.5096 19.8921L19.5248 19.8877C19.7425 19.8249 19.9107 19.7492 20.1088 19.6492C22.309 18.8303 23.5557 21.0371 23.8399 21.9037V30.1504C23.8399 30.7769 24.3554 31.2896 24.9854 31.2896H25.0075C25.6401 31.2896 26.1577 30.7749 26.1577 30.1457V22.0596C26.2427 22.0142 26.3269 21.9706 26.4134 21.9354C28.7345 21.0526 29.7792 23.1439 30.1377 24.1371V31.5324C30.1377 32.1589 30.6531 32.6716 31.283 32.6716H31.3052C31.9377 32.6716 32.4553 32.1568 32.4553 31.5277V24.3835C33.0621 24.109 33.1781 23.9474 34.0663 24.0276C34.5207 24.0685 35.0082 24.2678 35.3367 24.5878C35.7613 25.0013 35.9735 25.3548 36.0695 25.9383C36.2155 26.8274 36.1385 27.9804 36.1385 28.8903C36.1385 32.2696 36.2333 35.6747 36.0045 39.0476C35.9726 39.516 35.9034 39.987 35.8305 40.4506C35.7685 40.8449 35.6449 41.3023 35.5847 41.7387C35.4955 41.9876 35.4356 42.2455 35.3469 42.5208C35.2688 42.7592 35.1896 43.0044 35.0886 43.2346C34.9751 43.4934 34.8445 43.7456 34.7281 44.0034C34.7016 44.0621 34.655 44.1304 34.621 44.1851C34.5481 44.3022 34.4786 44.4177 34.4147 44.5368C34.1462 44.8784 33.8977 45.2205 33.6063 45.5527C33.4963 45.678 33.3264 45.8081 33.1998 45.9195C33.0408 46.0529 32.8923 46.1586 32.7546 46.2677C32.4539 46.4283 32.1696 46.6203 31.8711 46.7852C31.2887 47.1066 30.6667 47.3358 30.028 47.5193C28.8695 47.8521 27.5564 48.0569 26.3504 48.1173C24.874 48.1915 23.4095 48.1777 21.9349 48.0761C21.3131 48.0331 20.6873 47.9424 20.0756 47.8253C19.4965 47.7145 18.9394 47.5394 18.3737 47.3783C18.1601 47.3046 17.9505 47.2231 17.7409 47.1383C17.5752 47.0712 17.4209 46.9869 17.2583 46.9087C17.0559 46.7778 16.8274 46.6512 16.6474 46.5449C16.4923 46.4531 16.31 46.3396 16.1283 46.2372C15.8152 45.9624 15.4494 45.7321 15.1277 45.5031C14.8274 45.2701 14.4995 44.9369 14.2229 44.674C13.6687 44.1471 13.1211 43.6126 12.5753 43.0772C11.6206 42.1406 10.6743 41.1961 9.7234 40.2558L3.23893 33.8428C2.86833 33.4763 2.45476 33.1122 2.15694 32.6816C2.09164 32.5713 2.03926 32.4711 1.98689 32.3754C1.16598 29.7342 3.90586 27.6928 6.15049 29.0179C6.88173 29.6833 7.57438 30.3732 8.28064 31.0661C8.59689 31.3764 8.87133 31.6882 9.22319 31.9677C9.79043 32.4184 10.52 32.5005 11.1743 32.1875C11.8284 31.8745 12.2192 31.2561 12.2192 30.5341C12.2192 28.1183 11.8354 14.2654 12.3953 12.8262C12.4319 12.7437 12.4674 12.6696 12.5012 12.5959C12.6609 12.3564 12.8025 12.1123 13.0498 11.9021C13.1478 11.8188 13.2339 11.7504 13.313 11.6852C13.3749 11.6513 13.4342 11.6155 13.4921 11.576C13.8571 11.3589 14.275 11.2608 14.6982 11.2434C15.3069 11.2183 15.5992 11.3719 16.0784 11.6278C16.2054 11.7286 16.3338 11.8267 16.4465 11.9402C16.837 12.3329 17.0735 12.8417 17.1384 13.3889C17.1658 13.6267 17.1629 13.9098 17.1671 14.1503C17.2502 18.8628 17.2256 23.6084 17.2687 28.3267L17.2688 28.3266Z" fill="#826C23"/>
                        </svg>
                        <span class="text-hide-in-button">
                            Faça o download do meu cartão virtual em<br>
                            seu dispositivo e tenha acesso rápido em<br>
                            minhas plataformas
                        </span>
                    </a>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35"
                                     fill="none">
                                    <path d="M35 17.5C35 27.1651 27.1651 35 17.5 35C7.83543 35 0 27.1651 0 17.5C0 7.8349 7.83543 0 17.5 0C27.1651 0 35 7.8349 35 17.5ZM22.7047 19.4635C22.4271 19.3247 21.0636 18.6543 20.8092 18.5614C20.5548 18.469 20.37 18.4226 20.1847 18.7002C20 18.9779 19.4686 19.6029 19.3064 19.7876C19.1449 19.9725 18.9834 19.9962 18.7058 19.8568C18.4281 19.7186 17.5349 19.4255 16.475 18.4807C15.6504 17.7457 15.0939 16.8374 14.9319 16.5597C14.7704 16.282 14.9148 16.1322 15.0537 15.9939C15.1786 15.8695 15.3313 15.6697 15.4695 15.5083C15.6084 15.3462 15.6549 15.2306 15.7467 15.0454C15.8396 14.8606 15.7932 14.6986 15.724 14.5598C15.6548 14.4209 15.1001 13.0559 14.8688 12.5005C14.6437 11.9601 14.4152 12.0332 14.2443 12.0248C14.0829 12.0165 13.8982 12.0148 13.7128 12.0148C13.5281 12.0148 13.2278 12.0844 12.9733 12.3616C12.719 12.6399 12.0027 13.3103 12.0027 14.6752C12.0027 16.0399 12.9965 17.3584 13.1354 17.5437C13.2737 17.7291 15.0911 20.5301 17.8733 21.7309C18.5355 22.0168 19.052 22.1872 19.4552 22.3149C20.1195 22.5262 20.7241 22.4963 21.202 22.425C21.7352 22.3453 22.8431 21.754 23.0743 21.1064C23.306 20.4586 23.306 19.9033 23.2364 19.7876C23.1666 19.6721 22.982 19.6029 22.7048 19.4636L22.7047 19.4635ZM17.6432 26.3719H17.6393C15.9839 26.3713 14.3599 25.9272 12.9433 25.0865L12.606 24.8863L9.11418 25.8023L10.0461 22.3983L9.8266 22.0493C8.90344 20.5808 8.41499 18.8833 8.41615 17.1405C8.41828 12.0544 12.5573 7.91669 17.647 7.91669C20.1112 7.91776 22.4282 8.87857 24.1705 10.622C25.9123 12.366 26.8709 14.6829 26.8703 17.1481C26.868 22.2346 22.7291 26.3719 17.6433 26.3719H17.6432ZM25.4963 9.29712C23.4005 7.19921 20.6128 6.04373 17.6432 6.04214C11.5241 6.04214 6.54381 11.0206 6.54159 17.1397C6.54097 19.0956 7.05215 21.0049 8.02335 22.6881L6.4487 28.4389L12.3333 26.8957C13.955 27.7796 15.7808 28.2459 17.6388 28.2464H17.6432C23.7617 28.2464 28.742 23.2679 28.7448 17.1488C28.746 14.1835 27.5921 11.3947 25.4963 9.2973V9.29712Z"
                                          fill="white"></path>
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
                                familiares de um indivíduo, apresentando, de forma organizada, seus ascendentes e
                                descendentes.</p>
                            <p>Importante instrumento da pesquisa genealógica, ela facilita a localização de dados e
                                registros dos antepassados com conexão genética com o requerente.</p>
                            <p>Para fazer a construção da árvore genealógica e descobrir a origem dos ascendentes,
                                parte-se da origem dos sobrenomes do pai ou da mãe. Escolhida a linhagem que advém de um
                                sobrenome europeu, a árvore começa a ser montada numa direção e vai costurando-se a
                                partir de conversas com familiares mais velhos e de coleta de dados (registros de
                                nascimento, casamento e óbito) do requerente e dos seus ascendentes. A ausência ou o
                                desconhecimento de alguma certidão não deve impedir a construção da árvore; ao
                                contrário, as lacunas documentais sinalizadas apontarão os documentos que devem ser
                                objeto de busca na etapa seguinte.</p>
                            <br>
                            <p class="highlight">Entenda como montar sua árvore genealógica lendo o texto ao lado</p>
                        </div>
                        <div class="paragraph">
                            <p class="highlight">Como montar sua Árvore Genealógica e enviar os documentos nela
                                apontados para análise da RGS Consultoria:</p>
                            <p>Faça uma pesquisa oral com sua família, anotando o nome dos seus ascendentes originados
                                de um ancestral europeu. Tanto para cidadania italiana quanto para a portuguesa, procure
                                cópias, mesmo antigas, dos registros de nascimento, casamento e óbito de cada um
                                deles.</p>
                            <p>Não sabendo o nome de algum cônjuge dessa linhagem, ou de qualquer outro dado
                                solicitado, ignore a pergunta e continue montando a árvore. Se não souber ao certo o
                                nome de um ascendente, não pare de completar os dados, escreva no campo “nome” o apelido
                                pelo qual esse parente era conhecido ou o nome da posição ocupada na sua genealogia: “vô
                                Zeca”, ou simplesmente “meu bisavô”, ou ainda “neto do italiano”.</p>
                            <p>No nosso site você pode informar-se melhor sobre quais documentos são necessários ao
                                processo de cidadania
                                clicando nos dois links abaixo.</p>
                            <p>Preencha a árvore com as informações coletadas, gere o PDF e salve no seu computador,
                                celular ou tablet. Você também pode imprimir sua árvore.</p>
                            <p>Com as certidões em mãos e a cópia da árvore genealógica salva em seu dispositivo,
                                preencha seus dados no campo “formulário de contato” deste site, faça o upload dos
                                documentos encontrados e a cópia de sua árvore Genealógica, espere o carregamento dos
                                arquivos e clique em “enviar”. Aparecerá em sua tela uma mensagem de confirmação.
                                Pronto! É só aguardar, que em breve retornaremos. Documentos apenas nos formatos: <span class="highlight soft">PDF, JPEG ou DOC.</span></p>
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
                            Árvore Genealógica <br>
                            monte aqui
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