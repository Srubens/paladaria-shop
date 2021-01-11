<?php if( have_posts() ){ ?>
    <?php while( have_posts() ){ ?>

        <?php if( has_post_thumbnail() ){ ?>
            <?php the_post_thumbnail('large') ?>
        <?php } ?>

        <?php the_post(); ?>
        <?php the_content(); ?>
    <?php } ?>
<?php } ?>


