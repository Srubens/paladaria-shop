<?php

/**
 * Template Name: Page Home
 */
require_once get_template_directory() . '/single.php';
get_header(); 

?> 

    <div class="main">

        <div class="header-box-top">
            <div class="container">
                <div class="col">
                    <header>
                        <h1>Sabor em <br>
                            Cada pedaço.
                        </h1>
                        <a href="#" class="btn btn_orange">Nossos produtos</a>
                    </header>
                </div>
            </div>
        </div><!-- end header-box-top   -->

        <div class="history">
            <div class="container">

                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="history-box-image">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/img-01.png" alt="img-01">
                        </div>
                    </div>
                    <div class="history-text">
                        <div>
                            <h1>História da Ba Bakery</h1>
                            <div class="bg-line"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Minus assumenda sapiente culpa expedita iure nostrum ut molestias iste voluptatibus, magni, 
                            quibusdam veniam, alias facere exercitationem doloribus rem vero illum dolorem.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Minus assumenda sapiente culpa expedita iure nostrum ut molestias iste voluptatibus.
                            </p>
                        </div>
                    </div>
                </div><!-- end d-fle  -->

            </div>
        </div>

        <div class="container">
            <div class="text_products">

                <div class="d-flex flex-column">
                    <h1>Produtos</h1>
                    <div class="bg-line"></div>
                </div>

            </div>
        </div> 
        <!-- end container  -->       

        <div class="products">
            <div class="container m-auto">
                
                    <div class="contaiiner">
                        <div class="box-white">
                            <?= do_shortcode('[products limit="3" columns="3" orderby="popularity"]'); ?>
                        </div>
                    </div>
<!-- 
                    <div class="col-4 col-lg-4 col-md-4">
                        <div class="box-white">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/comida-02.png" alt="comida-01">
                            <header class="box-white-header">
                                <h5>Macarons Diversos 90g</h5>
                                <p>R$ 9,00</p>
                            </header>  
                        </div>
                    </div>

                    <div class="col-4 col-lg-4 col-md-4">
                        <div class="box-white">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/comida-03.png" alt="comida-01">
                            <header class="box-white-header">
                                <h5>Macarons Diversos 90g</h5>
                                <p>R$ 9,00</p>
                            </header>  
                        </div>
                    </div> -->

                <div class="d-flex">
                    <a href="#" class="btn btn_orange btn_more">veja mais</a>
                </div>

            </div>
            
        </div><!-- end products  -->

        <div class="contact">
            <div class="container">
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="box_form">
                        
                        <div class="mb-5">
                            <h1>Se interessou pelos nossos serviços? Manda uma mensagem pra gente. :)</h1>
                        </div>

                        <form class="form_contact" method="POST">
                            <div class="d-flex flex-row mb-3">
                                <label>
                                nome 
                                </label>
                                <input class="form-control" type="text" placeholder="Ex: josé">
                            </div>
                            
                            <div class="d-flex mb-3">
                                <label >
                                telefone 
                                </label>
                                <input class="form-control" type="text" placeholder="Ex: (XX)X.XXXX-XXXX">
                            </div>

                            <div class="d-flex mb-3">
                                <label >
                                email 
                                </label>
                                <input class="form-control" type="email" placeholder="Ex: exemplo@exemplo.com.br">
                            </div>

                            <div class="d-flex mb-3">
                                <label>Mensagem</label>
                                <textarea name="" id="" placeholder="deixe aqui sua mensagem" class="form-control" ></textarea>
                            </div>
                            
                            <button ttype="button" class="btn btn_orange" >enviar</buutton>

                        </form>
                    
                    </div>

                    <div>
                        <div class="bg_image">
                            <h1>Você também pode nos fazer uma visita.</h1>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/local.png" alt="local">
                            <div class="d-flex">
                                <span class="bg_locale"></span> <p>R. Hermílio Arantes, 1040 - Vila dos Coqueiros. Graças, Recife - PE.</p>
                            </div>
                            <a href="#" class="btn btn_white_outline">Traçar Rota</a>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- end contact  -->

<?php get_footer(); ?>