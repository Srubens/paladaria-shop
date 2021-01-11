<?php
get_header(); 


?> 

    <div class="main">     

        <div class="products">
            <div class="container m-5">
                <div class=" d-flex justify-content-between">
                

                    <?php if( have_posts() ){ ?>
                        <?php while( have_posts() ){ ?>
                            
                            <?php the_post(); ?>
                            <div class="col">
                                <?php the_title(); ?>
                                <?php the_content(); ?>
                            </div>
                            
                        <?php } ?>
                    <?php } ?> 


                </div>

            </div>
        </div><!-- end products  -->


<?php get_footer(); ?>