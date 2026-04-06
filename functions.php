<?php
/**
 * Yani Content Theme Functions
 *
 * @package Yani_Content
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('YANI_THEME_VERSION', '1.0.0');
define('YANI_THEME_DIR', get_template_directory());
define('YANI_THEME_URI', get_template_directory_uri());

/**
 * Helper: get file modification time as version for cache busting
 */
function yani_file_version($relative_path) {
    $file = YANI_THEME_DIR . '/' . $relative_path;
    if (file_exists($file)) {
        return filemtime($file);
    }
    return YANI_THEME_VERSION;
}

/**
 * Theme Setup
 */
function yani_theme_setup()
{
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Enable support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 25,
        'width' => 182,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Enable HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'yani-content'),
        'footer' => esc_html__('Footer Menu', 'yani-content'),
    ));

    // Add editor style
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'yani_theme_setup');

/**
 * Enqueue scripts and styles
 */
function yani_enqueue_scripts()
{
    // Google Fonts - Be Vietnam Pro
    wp_enqueue_style(
        'yani-google-fonts',
        'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'yani-main-style',
        YANI_THEME_URI . '/assets/css/main.css',
        array('yani-google-fonts'),
        yani_file_version('assets/css/main.css')
    );

    // Home page styles
    if (is_page_template('page-templates/page-home.php') || is_front_page() || is_home()) {
        wp_enqueue_style(
            'yani-home-style',
            YANI_THEME_URI . '/assets/css/page-home.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-home.css')
        );
    }

    // Contact page styles
    if (is_page_template('page-templates/page-contact.php')) {
        wp_enqueue_style(
            'yani-contact-style',
            YANI_THEME_URI . '/assets/css/page-contact.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-contact.css')
        );
    }

    // About page styles and scripts
    if (is_page_template('page-templates/page-about.php')) {
        wp_enqueue_style(
            'yani-about-style',
            YANI_THEME_URI . '/assets/css/page-about.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-about.css')
        );
        wp_enqueue_script(
            'yani-about-script',
            YANI_THEME_URI . '/assets/js/page-about.js',
            array(),
            yani_file_version('assets/js/page-about.js'),
            true
        );
    }

    // Service page styles and scripts
    if (is_page_template('page-templates/page-service.php')) {
        wp_enqueue_style(
            'yani-service-style',
            YANI_THEME_URI . '/assets/css/page-service.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-service.css')
        );
        wp_enqueue_script(
            'yani-service-script',
            YANI_THEME_URI . '/assets/js/page-service.js',
            array(),
            yani_file_version('assets/js/page-service.js'),
            true
        );
    }

    // Blog page styles
    if (is_page_template('page-templates/page-blog.php')) {
        wp_enqueue_style(
            'yani-blog-style',
            YANI_THEME_URI . '/assets/css/page-blog.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-blog.css')
        );
    }

    // Blog Single post styles
    if (is_singular('post')) {
        wp_enqueue_style(
            'yani-blog-single-style',
            YANI_THEME_URI . '/assets/css/page-blog-single.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-blog-single.css')
        );
    }

    // Strategy page styles
    if (is_page_template('page-templates/page-strategy.php')) {
        wp_enqueue_style(
            'yani-strategy-style',
            YANI_THEME_URI . '/assets/css/page-strategy.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-strategy.css')
        );
    }

    // Price page styles
    if (is_page_template('page-templates/page-price.php')) {
        wp_enqueue_style(
            'yani-price-style',
            YANI_THEME_URI . '/assets/css/page-price.css',
            array('yani-main-style'),
            yani_file_version('assets/css/page-price.css')
        );
    }

    // Theme stylesheet (style.css)
    wp_enqueue_style(
        'yani-style',
        get_stylesheet_uri(),
        array('yani-main-style'),
        yani_file_version('style.css')
    );

    // Main JS
    wp_enqueue_script(
        'yani-main-script',
        YANI_THEME_URI . '/assets/js/main.js',
        array(),
        yani_file_version('assets/js/main.js'),
        true
    );

    // Localize script
    wp_localize_script('yani-main-script', 'yaniData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'themeUrl' => YANI_THEME_URI,
        'nonce' => wp_create_nonce('yani_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'yani_enqueue_scripts');

/**
 * Register widget areas
 */
function yani_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'yani-content'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'yani-content'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer', 'yani-content'),
        'id' => 'footer-1',
        'description' => esc_html__('Add footer widgets here.', 'yani-content'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'yani_widgets_init');

/**
 * Custom template tags
 */
function yani_get_theme_svg($svg_name)
{
    $svg_path = YANI_THEME_DIR . '/assets/images/' . $svg_name . '.svg';
    if (file_exists($svg_path)) {
        return file_get_contents($svg_path);
    }
    return '';
}

/**
 * Helper: Calculate reading time for a post
 *
 * @param string $content Post content
 * @param int    $wpm     Words per minute (Vietnamese average)
 * @return int Reading time in minutes
 */
function yani_get_reading_time($content = '', $wpm = 200)
{
    $word_count = str_word_count(strip_tags($content));
    $reading_time = max(1, ceil($word_count / $wpm));
    return $reading_time;
}

/**
 * Handle contact form submission via AJAX
 */
function yani_handle_contact_form()
{
    check_ajax_referer('yani_nonce', 'nonce');

    $name = sanitize_text_field($_POST['fullname'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $website = esc_url_raw($_POST['website'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($phone)) {
        wp_send_json_error(array('message' => 'Vui lòng điền đầy đủ thông tin bắt buộc.'));
    }

    $to = get_option('admin_email');
    $subject = sprintf('[Yani Content] Yêu cầu mới từ %s', $name);
    $body = sprintf(
        "Họ tên: %s\nEmail: %s\nSĐT/Zalo: %s\nWebsite: %s\n\nNhu cầu:\n%s",
        $name,
        $email,
        $phone,
        $website,
        $message
    );
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Cảm ơn bạn! Chúng tôi sẽ phản hồi trong vòng 1 ngày làm việc.'));
    }
    else {
        wp_send_json_error(array('message' => 'Có lỗi xảy ra. Vui lòng thử lại sau.'));
    }
}
add_action('wp_ajax_yani_contact_form', 'yani_handle_contact_form');
add_action('wp_ajax_nopriv_yani_contact_form', 'yani_handle_contact_form');

/**
 * Add custom body classes
 */
function yani_body_classes($classes)
{
    if (is_page_template('page-templates/page-contact.php')) {
        $classes[] = 'page-contact';
    }
    if (is_page_template('page-templates/page-home.php')) {
        $classes[] = 'page-home';
    }
    if (is_page_template('page-templates/page-service.php')) {
        $classes[] = 'page-service';
    }
    if (is_page_template('page-templates/page-price.php')) {
        $classes[] = 'page-price';
    }
    if (is_page_template('page-templates/page-about.php')) {
        $classes[] = 'page-about';
    }
    if (is_page_template('page-templates/page-blog.php')) {
        $classes[] = 'page-blog';
    }
    if (is_page_template('page-templates/page-strategy.php')) {
        $classes[] = 'page-strategy';
    }
    if (is_singular('post')) {
        $classes[] = 'page-blog-single';
    }
    return $classes;
}
add_filter('body_class', 'yani_body_classes');
