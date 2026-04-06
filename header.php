<?php
/**
 * The header template
 *
 * @package Yani_Content
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <!-- ====== SITE HEADER ====== -->
    <header id="site-header" class="site-header">
        <div class="container header-container">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo" aria-label="Yani Content - Trang chủ">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" alt="Yani Content" width="182" height="25">
            </a>

            <!-- Desktop Navigation -->
            <nav id="header-nav" class="header-nav" aria-label="Menu chính">
                <ul class="header-nav__list" id="header-nav-list">
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-nav__link<?php if (is_front_page() || is_home()) echo ' header-nav__link--active'; ?>">TRANG CHỦ</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/dich-vu')); ?>" class="header-nav__link<?php if (is_page_template('page-templates/page-service.php')) echo ' header-nav__link--active'; ?>">DỊCH VỤ</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/chien-luoc')); ?>" class="header-nav__link<?php if (is_page_template('page-templates/page-strategy.php')) echo ' header-nav__link--active'; ?>">CHIẾN LƯỢC</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/bang-gia')); ?>" class="header-nav__link<?php if (is_page_template('page-templates/page-price.php')) echo ' header-nav__link--active'; ?>">BẢNG GIÁ</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="header-nav__link<?php if (is_page_template('page-templates/page-blog.php') || is_singular('post')) echo ' header-nav__link--active'; ?>">BLOG</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/ve-chung-toi')); ?>" class="header-nav__link<?php if (is_page_template('page-templates/page-about.php')) echo ' header-nav__link--active'; ?>">VỀ CHÚNG TÔI</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="<?php echo esc_url(home_url('/lien-he')); ?>" class="header-nav__link<?php if (is_page_template('page-templates/page-contact.php')) echo ' header-nav__link--active'; ?>">LIÊN HỆ</a>
                    </li>
                </ul>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button id="header-menu-toggle" class="header-menu-toggle" aria-label="Mở menu" aria-expanded="false" aria-controls="header-mobile-menu">
                <span class="header-menu-toggle__bar"></span>
                <span class="header-menu-toggle__bar"></span>
                <span class="header-menu-toggle__bar"></span>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="header-mobile-menu" class="header-mobile-menu" aria-hidden="true">
            <nav class="header-mobile-nav" aria-label="Menu di động">
                <ul class="header-mobile-nav__list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="header-mobile-nav__link<?php if (is_front_page() || is_home()) echo ' header-mobile-nav__link--active'; ?>">Trang chủ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/dich-vu')); ?>" class="header-mobile-nav__link<?php if (is_page_template('page-templates/page-service.php')) echo ' header-mobile-nav__link--active'; ?>">Dịch vụ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/chien-luoc')); ?>" class="header-mobile-nav__link<?php if (is_page_template('page-templates/page-strategy.php')) echo ' header-mobile-nav__link--active'; ?>">Chiến lược</a></li>
                    <li><a href="<?php echo esc_url(home_url('/bang-gia')); ?>" class="header-mobile-nav__link<?php if (is_page_template('page-templates/page-price.php')) echo ' header-mobile-nav__link--active'; ?>">Bảng giá</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="header-mobile-nav__link<?php if (is_page_template('page-templates/page-blog.php') || is_singular('post')) echo ' header-mobile-nav__link--active'; ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ve-chung-toi')); ?>" class="header-mobile-nav__link<?php if (is_page_template('page-templates/page-about.php')) echo ' header-mobile-nav__link--active'; ?>">Về chúng tôi</a></li>
                    <li><a href="<?php echo esc_url(home_url('/lien-he')); ?>" class="header-mobile-nav__link<?php if (is_page_template('page-templates/page-contact.php')) echo ' header-mobile-nav__link--active'; ?>">Liên hệ</a></li>
                </ul>

                <!-- Mobile CTA -->
                <div class="header-mobile-cta">
                    <a href="<?php echo esc_url(home_url('/lien-he')); ?>" class="btn btn-primary header-mobile-cta__btn" id="btn-mobile-contact">Nhận tư vấn miễn phí</a>
                </div>
            </nav>
        </div>
    </header>
