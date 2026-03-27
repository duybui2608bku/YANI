<?php
/**
 * The main template file
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    else :
        ?>
        <section class="no-results">
            <div class="container">
                <h1><?php esc_html_e( 'Không tìm thấy nội dung', 'yani-content' ); ?></h1>
            </div>
        </section>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
