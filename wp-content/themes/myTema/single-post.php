<?php

get_header();
the_post();?>

<div class="row">
    <div class="col-12 col-md-9">
        <h1 class="display-4"><?php the_title(); ?></h1>
        <div class="content">
        <?php the_content(); ?>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();