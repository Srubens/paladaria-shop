<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="viewport" content="<?php bloginfo('description'); ?>" >
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <nav class="bg_nav navbar navbar-expand-lg navbar-light ">
        <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <?php 
                    
                       if( has_nav_menu('menu_ba') ){
                           wp_nav_menu([
                               'theme_location' => 'menu_ba',
                                'fallback_cb' => false,
                                'container_id' => 'navbarResponsive',
                                'menu_class' => 'navbar-nav',
                                'walker' => new WP_Bootstrap_Navwalker(),
                                'depth' => 3
                           ]);
                       }

                    ?>

                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Quem somos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Equipe</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul> -->
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="logo"> <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="logo"></a> </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="col-4 d-flex justify-content-end">
                    <div class="social ">
                        <ul class="list_social">
                            <li><a href="#" class="ml-3" > <i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="#" class="ml-3" > <i class="fab fa-instagram"></i> </a></li>
                            <li><a href="#" class="ml-3" > <i class="fab fa-twitter"></i> </a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list_card">
                            <li>
                                <a href="<?= wc_get_cart_url(); ?>"> <span class="figure_card"></span> 
                                <span class="box_total_itens">
                                    <?php echo WC()->cart->get_cart_contents_count(); ?>
                                </span>  </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <div class="bg-marron"></div>  