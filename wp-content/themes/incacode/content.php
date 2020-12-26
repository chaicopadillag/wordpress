<div class="col-8">
    <div class="row">
    <?php
#para busqueda personalizada
// query_posts('order=ASC&category_name=')
?>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post();?>
            <div class="col-6">
                <div class="card">
                    <img src="<?php the_post_thumbnail_url()?>" class="card-img-top" alt="<?php the_title()?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title(); ?> - <small>
                            <?php /*get_the_date(); */the_time('d-M-Y')?> </small></h5>
                        <p class="card-text"><?php the_excerpt()?></p>
                        <p class="card-text"><?php the_category()?></p>
                        <p class="card-text"><?php the_tags()?></p>
                        <p class="card-text"><?php the_author()?></p>
                        <p class="card-text"><?php the_content()?></p>
                        <a href="<?php the_permalink()?>" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        <?php endwhile?>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">
                No hay articulos para <a href="#" class="alert-link">Leer</a>. Primero debes crear uno
            </div>
        <?php endif?>
        <?php rewind_posts();?>
    </div>
</div>
