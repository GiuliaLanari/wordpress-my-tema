<?php
get_header();
?>
<h1 class="text-center my-4 display-3"><?php the_archive_title(); ?></h1>
<div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 mb-5 "><?php
    while (have_posts()) {
        the_post(); ?>
        <div class="col ">
            <div class="card text-bg-dark h-100 ">
                <img 
                    src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(32); ?>"
                    class="card-img-top"
                    alt="<?php the_title(); ?>"
                >
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-auto">Read</a>
                </div>
            </div>
        </div><?php
    } ?>
</div>

<div class="text-center">
<?php
echo paginate_links();
?>
</div>


get_footer();
