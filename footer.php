    <footer class="container-fluid">
        <section id="ft-widgets" class="row">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>            
        </section>
        <nav class="col-sm-12">
                <?php
                    wp_nav_menu(
                        array(
                            'container' => 'ul',
                            'items_wrap' => '<ul id="nav-footer" class="nav justify-content-center">%3$s</ul>',
                            'theme_location' => 'social-menu',
                            'walker'  => new social_menu_walker
                    ));
                ?>
            </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>