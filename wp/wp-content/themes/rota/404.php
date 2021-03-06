<?php get_header(); ?>
<main id="main" role="main">
    <article class="container-fluid">
        <div class="row">
            <div class="col-12 editor_content">
                <h1><?php _e('404 page does not exist', 'rota'); ?></h1>
                <p><?php _e('We can not find what you are looking for.','rota'); ?></p>
                <p><?php _e('Maybe we can still help you.','rota'); ?></p>
                <p><?php _e('You can search our website by using the form below or go to','rota'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e(' homepage','rota'); ?></a></p>
                <?php echo get_search_form(); ?>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>
