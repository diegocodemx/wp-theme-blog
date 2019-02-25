<?php get_header(); ?>

    <section id="main" class="container-fluid"> 
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <section id="article-single">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <article>
                            <hgroup>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php if(has_post_thumbnail()){ the_post_thumbnail('slider_thumbs', array('class' => 'img-fluid')); } ?>
                                <div class="extract"><?php the_content(); ?></div>
                            </hgroup>
                    </article>
                    <?php endwhile; else: ?>
                        <h2>No se encontró el articulo</h2>
                    <?php endif; ?>
                </section>
            </div>

<?php get_sidebar(); ?>            

        </div>
    </section>

<?php get_footer(); ?>