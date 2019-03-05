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