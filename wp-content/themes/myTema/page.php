<?php
get_header();
the_post(); ?>

<h1 class="text-center my-5 display-3"><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php
get_footer();