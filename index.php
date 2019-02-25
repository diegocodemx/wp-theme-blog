<?php get_header(); ?>

    <section id="main" class="container-fluid"> 
        <div id="no-slide">
            <section id="slideshow">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="slide">
                    <div class="row">
                        <div class="col-md-6">
                        <a href="<?php the_permalink() ?>">
                            <?php if(has_post_thumbnail()){ the_post_thumbnail('slider_thumbs', array('class' => 'img-fluid img-thumbnail mx-auto d-block')); } ?>
                        </a>
                        </div>
                        <div class="col-md-6">
                            <article>
                                <hgroup>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="date"><?php the_author(); ?> | <?php the_date(); ?> | <span><?php the_category(); ?></span></div>
                                    <div class="extract"><?php the_excerpt(); ?></div>
                                </hgroup>
                            </article>
                        </div> 
                    </div>
                </div>
                <?php endwhile; else: ?>
                <!-- Aquí el código que se ejecuta si no se encuentran artículos -->
                <?php endif; ?>
            </section>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <section id="article-list">
                    <?php query_posts("paged=$paged"); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <article>
                        <div class="row align-items-center">
                            <div class="thumb col-md-4 col-sm-12">
                                <?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs', array('class' => 'img-fluid img-thumbnail mx-auto d-block')); } ?>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <hgroup>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="date"><?php the_author(); ?> | <?php the_date(); ?> | <span><?php the_category(); ?></span></div>
                                    <div class="extract"><?php the_excerpt(); ?></div>
                                </hgroup>
                                <a class="btn btn-outline-dark" href="<?php the_permalink(); ?>" role="button">Seguir leyendo</a>
                            </div>
                        </div>    
                    </article>
                    <?php endwhile; else: ?>
                        <h2>No se encontraron articulos</h2>
                    <?php endif; ?>
                    <div id="pagination" class="row">
                        <?php previous_posts_link('< Posts Anteriores') ?>
                        <?php next_posts_link('Posts Siguientes >') ?>
                    </div>
                </section>
            </div>

<?php get_sidebar(); ?>            

        </div>
    </section>

<?php get_footer(); ?>