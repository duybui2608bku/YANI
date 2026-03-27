<?php
/**
 * Template Name: Trang Chủ
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main page-home-main">
    <div class="container">
        <h1><?php esc_html_e( 'Trang Chủ', 'yani-content' ); ?></h1>
        <p><?php esc_html_e( 'Nội dung trang chủ sẽ được cập nhật sau.', 'yani-content' ); ?></p>
    </div>
</main>

<?php
get_footer();
