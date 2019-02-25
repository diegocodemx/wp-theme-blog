    <footer class="container-fluid">
        <section id="ft-widgets" class="row">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>            
        </section>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>