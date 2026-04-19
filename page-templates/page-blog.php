<?php
/**
 * Template Name: Trang Blog
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
$theme_url = esc_url(get_template_directory_uri());

// Danh sách categories cho blog
$blog_categories = array(
    'tat-ca'                => 'Tất cả',
    'chien-luoc'            => 'Chiến lược',
    'viet-bai-on-page'      => 'Viết bài & On-page',
    'search-intent-tu-khoa' => 'Search Intent & Từ khóa',
    'ai-content'            => 'AI & Content',
    'phan-phoi-tang-truong' => 'Phân phối & Tăng trưởng',
    'do-luong-roi'          => 'Đo lường & ROI',
    'xu-huong'              => 'Xu hướng',
);

// Lấy cat filter từ URL
$current_cat = isset($_GET['blog_cat']) ? sanitize_text_field($_GET['blog_cat']) : '';

// Pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query: Pillar post (tag = pillar)
$pillar_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 1,
    'tag'            => 'pillar',
    'post_status'    => 'publish',
);
$pillar_query = new WP_Query($pillar_args);

// Query: Topic cluster posts (tag = topic-cluster), 4 cards for 2×2 grid
$topic_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 4,
    'tag'            => 'topic-cluster',
    'post_status'    => 'publish',
);
$topic_query = new WP_Query($topic_args);

// Query: Regular posts (exclude pillar & topic-cluster tags)
$posts_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'paged'          => $paged,
    'post_status'    => 'publish',
);
$pillar_tag = get_term_by('slug', 'pillar', 'post_tag');
$topic_tag  = get_term_by('slug', 'topic-cluster', 'post_tag');
$exclude_tags = array();
if ($pillar_tag) $exclude_tags[] = $pillar_tag->term_id;
if ($topic_tag) $exclude_tags[] = $topic_tag->term_id;
if (!empty($exclude_tags)) {
    $posts_args['tag__not_in'] = $exclude_tags;
}
if (!empty($current_cat) && $current_cat !== 'tat-ca') {
    $posts_args['category_name'] = $current_cat;
}
$posts_query = new WP_Query($posts_args);

$featured_post_id = 0;
$topic_post_ids = array();
?>

<main id="primary" class="site-main blog-page">

    <!-- Background decorations -->
    <img src="<?php echo $theme_url; ?>/assets/images/blog/infinity-bg-56586a.png"
        class="blog-bg-infinity blog-bg-infinity--top" alt="" aria-hidden="true">
    <img src="<?php echo $theme_url; ?>/assets/images/blog/infinity-bg-56586a.png"
        class="blog-bg-infinity blog-bg-infinity--bottom" alt="" aria-hidden="true">

    <!-- ===== 1. HERO SECTION ===== -->
    <section class="blog-hero" id="blog-hero">
        <div class="container">
            <h1 class="blog-hero__title">
                <span class="blog-hero__title-gradient">Thư viện_Chiến lược Content SEO</span>
                <span class="blog-hero__title-white">cho Doanh nghiệp đa lĩnh vực</span>
            </h1>
            <p class="blog-hero__desc">
                Nơi tổng hợp framework, checklist và case study giúp doanh nghiệp xây hệ nội dung theo
                Search Intent,&nbsp;EEAT&nbsp;và&nbsp;Topic Cluster&nbsp;— tập trung traffic chất lượng và khả năng tạo lead.
            </p>
        </div>
    </section>

    <!-- ===== 2. PILLAR TAB ===== -->
    <section class="blog-pillar-tab" id="blog-pillar-tab">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="blog-pillar-tab__link" id="cat-pillar">Nội dung trụ cột &amp; hệ kiến thức chính</a>
        </div>
    </section>

    <!-- ===== 3. FEATURED PILLAR CARD (left) + 2×2 TOPIC CARDS (right) ===== -->
    <section class="blog-main" id="blog-main">
        <div class="container">
            <div class="blog-main__layout">

                <!-- LEFT: Featured Pillar Card -->
                <?php
                $featured_rendered = false;
                if ($pillar_query->have_posts()):
                    while ($pillar_query->have_posts()): $pillar_query->the_post();
                        $featured_post_id = get_the_ID();
                        $featured_rendered = true;
                        $cats = get_the_category();
                        $cat_name = !empty($cats) ? $cats[0]->name : 'Bài trụ cột (Pillar)';
                        $reading_time = yani_get_reading_time(get_the_content());
                ?>
                        <a href="<?php the_permalink(); ?>" class="blog-featured-card" id="featured-pillar">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                    alt="<?php the_title_attribute(); ?>" class="blog-featured-card__img">
                            <?php else: ?>
                                <img src="<?php echo $theme_url; ?>/assets/images/blog/blog-featured-img-1.svg"
                                    alt="<?php the_title_attribute(); ?>" class="blog-featured-card__img">
                            <?php endif; ?>
                            <div class="blog-featured-card__body">
                                <span class="blog-featured-card__category"><?php echo esc_html($cat_name); ?></span>
                                <h2 class="blog-featured-card__title"><?php the_title(); ?></h2>
                                <p class="blog-featured-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                <div class="blog-featured-card__meta">
                                    <span class="blog-featured-card__badge">Cập nhật <?php echo esc_html(get_the_modified_date('Y')); ?></span>
                                    <span class="blog-featured-card__badge"><?php echo esc_html($reading_time); ?> phút đọc</span>
                                </div>
                            </div>
                        </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;

                if (!$featured_rendered):
                    $featured_fallback_query = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 1,
                        'post_status'    => 'publish',
                    ));
                    if ($featured_fallback_query->have_posts()):
                        while ($featured_fallback_query->have_posts()): $featured_fallback_query->the_post();
                            $featured_post_id = get_the_ID();
                            $cats = get_the_category();
                            $cat_name = !empty($cats) ? $cats[0]->name : 'Bài trụ cột (Pillar)';
                            $reading_time = yani_get_reading_time(get_the_content());
                ?>
                            <a href="<?php the_permalink(); ?>" class="blog-featured-card" id="featured-pillar">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                        alt="<?php the_title_attribute(); ?>" class="blog-featured-card__img">
                                <?php else: ?>
                                    <img src="<?php echo $theme_url; ?>/assets/images/blog/blog-featured-img-1.svg"
                                        alt="<?php the_title_attribute(); ?>" class="blog-featured-card__img">
                                <?php endif; ?>
                                <div class="blog-featured-card__body">
                                    <span class="blog-featured-card__category"><?php echo esc_html($cat_name); ?></span>
                                    <h2 class="blog-featured-card__title"><?php the_title(); ?></h2>
                                    <p class="blog-featured-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                    <div class="blog-featured-card__meta">
                                        <span class="blog-featured-card__badge">Cập nhật <?php echo esc_html(get_the_modified_date('Y')); ?></span>
                                        <span class="blog-featured-card__badge"><?php echo esc_html($reading_time); ?> phút đọc</span>
                                    </div>
                                </div>
                            </a>
                <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                endif;
                ?>

                <!-- RIGHT: 2×2 Topic Cluster Cards -->
                <div class="blog-main__topics">
                    <?php
                    $topic_fallback_images = array(
                        'blog-card-img-1.svg',
                        'blog-card-img-3.svg',
                        'blog-card-img-2.svg',
                        'blog-card-img-4.svg',
                    );
                    $topic_index = 0;
                    if ($topic_query->have_posts()): while ($topic_query->have_posts()): $topic_query->the_post();
                            $topic_post_ids[] = get_the_ID();
                            $cats = get_the_category();
                            $cat_name = !empty($cats) ? $cats[0]->name : 'Chiến lược';
                            $fallback_img = $topic_fallback_images[$topic_index % count($topic_fallback_images)];
                        ?>
                            <a href="<?php the_permalink(); ?>" class="blog-topic-card" id="topic-card-<?php echo $topic_index; ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                        alt="<?php the_title_attribute(); ?>" class="blog-topic-card__img">
                                <?php else: ?>
                                    <img src="<?php echo $theme_url; ?>/assets/images/blog/<?php echo esc_attr($fallback_img); ?>"
                                        alt="<?php the_title_attribute(); ?>" class="blog-topic-card__img">
                                <?php endif; ?>
                                <div class="blog-topic-card__body">
                                    <span class="blog-topic-card__category"><?php echo esc_html($cat_name); ?></span>
                                    <h3 class="blog-topic-card__title"><?php the_title(); ?></h3>
                                    <p class="blog-topic-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                </div>
                            </a>
                    <?php $topic_index++; endwhile; wp_reset_postdata(); endif; ?>

                    <?php
                    if ($topic_index < 4):
                        $topic_fallback_args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 4 - $topic_index,
                            'post_status'    => 'publish',
                            'post__not_in'   => array_merge(array($featured_post_id), $topic_post_ids),
                        );
                        $topic_fallback_query = new WP_Query($topic_fallback_args);
                        if ($topic_fallback_query->have_posts()):
                            while ($topic_fallback_query->have_posts()): $topic_fallback_query->the_post();
                                $topic_post_ids[] = get_the_ID();
                                $cats = get_the_category();
                                $cat_name = !empty($cats) ? $cats[0]->name : 'Chiến lược';
                                $fallback_img = $topic_fallback_images[$topic_index % count($topic_fallback_images)];
                    ?>
                                <a href="<?php the_permalink(); ?>" class="blog-topic-card" id="topic-card-<?php echo $topic_index; ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                            alt="<?php the_title_attribute(); ?>" class="blog-topic-card__img">
                                    <?php else: ?>
                                        <img src="<?php echo $theme_url; ?>/assets/images/blog/<?php echo esc_attr($fallback_img); ?>"
                                            alt="<?php the_title_attribute(); ?>" class="blog-topic-card__img">
                                    <?php endif; ?>
                                    <div class="blog-topic-card__body">
                                        <span class="blog-topic-card__category"><?php echo esc_html($cat_name); ?></span>
                                        <h3 class="blog-topic-card__title"><?php the_title(); ?></h3>
                                        <p class="blog-topic-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    </div>
                                </a>
                    <?php
                            $topic_index++;
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    endif;
                    ?>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== 4. CTA BANNER ===== -->
    <section class="blog-cta-banner" id="blog-cta-banner">
        <div class="blog-cta-banner__bg"></div>
        <div class="container">
            <h2 class="blog-cta-banner__title">Bạn muốn áp dụng các chiến lược này?</h2>
            <p class="blog-cta-banner__desc">
                Chúng tôi có gói triển khai Content SEO chuyên sâu cho doanh nghiệp SEM.
            </p>
            <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="blog-cta-banner__btn" id="btn-xem-giai-phap">Xem giải pháp</a>
        </div>
    </section>

    <!-- ===== 5. CATEGORY TABS (4×2 grid) ===== -->
    <section class="blog-categories" id="blog-categories">
        <div class="container">
            <div class="blog-categories__grid">
                <?php foreach ($blog_categories as $slug => $label): ?>
                    <a href="<?php echo esc_url(add_query_arg('blog_cat', $slug, get_permalink())); ?>"
                        class="blog-categories__tab <?php echo ($current_cat === $slug || (empty($current_cat) && $slug === 'tat-ca')) ? 'blog-categories__tab--active' : ''; ?>"
                        id="cat-<?php echo esc_attr($slug); ?>"><?php echo esc_html($label); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== 6. BLOG POSTS GRID (3 cols × 2 rows) ===== -->
    <section class="blog-posts" id="blog-posts">
        <div class="container">
            <div class="blog-posts__grid">
                <?php
                $post_fallback_images = array(
                    'blog-featured-img-2.svg',
                    'blog-featured-img-4.svg',
                    'blog-featured-img-6.svg',
                    'blog-featured-img-3.svg',
                    'blog-featured-img-5.svg',
                    'blog-featured-img-7.svg',
                );
                $post_index = 0;
                if ($posts_query->have_posts()): while ($posts_query->have_posts()): $posts_query->the_post();
                        $cats = get_the_category();
                        $cat_name = !empty($cats) ? $cats[0]->name : 'Content SEO';
                        $reading_time = yani_get_reading_time(get_the_content());
                        $fallback_img = $post_fallback_images[$post_index % count($post_fallback_images)];
                    ?>
                        <a href="<?php the_permalink(); ?>" class="blog-post-card" id="post-card-<?php echo $post_index; ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                    alt="<?php the_title_attribute(); ?>" class="blog-post-card__img">
                            <?php else: ?>
                                <img src="<?php echo $theme_url; ?>/assets/images/blog/<?php echo esc_attr($fallback_img); ?>"
                                    alt="<?php the_title_attribute(); ?>" class="blog-post-card__img">
                            <?php endif; ?>
                            <div class="blog-post-card__body">
                                <span class="blog-post-card__category"><?php echo esc_html($cat_name); ?></span>
                                <h3 class="blog-post-card__title"><?php the_title(); ?></h3>
                                <p class="blog-post-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                                <div class="blog-post-card__meta">
                                    <span class="blog-post-card__badge"><?php echo esc_html(get_the_date('d/m/Y')); ?></span>
                                    <span class="blog-post-card__badge"><?php echo esc_html($reading_time); ?> phút đọc</span>
                                </div>
                            </div>
                        </a>
                <?php $post_index++; endwhile; endif; ?>

                <?php
                if ($post_index === 0):
                    $regular_fallback_query = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                        'post_status'    => 'publish',
                        'post__not_in'   => array_merge(array($featured_post_id), $topic_post_ids),
                    ));
                    if ($regular_fallback_query->have_posts()):
                        while ($regular_fallback_query->have_posts()): $regular_fallback_query->the_post();
                            $cats = get_the_category();
                            $cat_name = !empty($cats) ? $cats[0]->name : 'Content SEO';
                            $reading_time = yani_get_reading_time(get_the_content());
                            $fallback_img = $post_fallback_images[$post_index % count($post_fallback_images)];
                ?>
                            <a href="<?php the_permalink(); ?>" class="blog-post-card" id="post-card-<?php echo $post_index; ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                        alt="<?php the_title_attribute(); ?>" class="blog-post-card__img">
                                <?php else: ?>
                                    <img src="<?php echo $theme_url; ?>/assets/images/blog/<?php echo esc_attr($fallback_img); ?>"
                                        alt="<?php the_title_attribute(); ?>" class="blog-post-card__img">
                                <?php endif; ?>
                                <div class="blog-post-card__body">
                                    <span class="blog-post-card__category"><?php echo esc_html($cat_name); ?></span>
                                    <h3 class="blog-post-card__title"><?php the_title(); ?></h3>
                                    <p class="blog-post-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                                    <div class="blog-post-card__meta">
                                        <span class="blog-post-card__badge"><?php echo esc_html(get_the_date('d/m/Y')); ?></span>
                                        <span class="blog-post-card__badge"><?php echo esc_html($reading_time); ?> phút đọc</span>
                                    </div>
                                </div>
                            </a>
                <?php
                        $post_index++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ===== 7. PAGINATION ===== -->
    <?php if ($posts_query->max_num_pages > 1): ?>
    <nav class="blog-pagination" id="blog-pagination" aria-label="Phân trang bài viết">
        <ul class="blog-pagination__list">
            <?php
            $total_pages = $posts_query->max_num_pages;
            for ($i = 1; $i <= min(5, $total_pages); $i++):
            ?>
                <li class="blog-pagination__item <?php echo ($paged == $i) ? 'blog-pagination__item--active' : ''; ?>">
                    <a href="<?php echo esc_url(get_pagenum_link($i)); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a>
                </li>
            <?php endfor; ?>
            <?php if ($total_pages > 5): ?>
                <li class="blog-pagination__item"><span>...</span></li>
                <li class="blog-pagination__item <?php echo ($paged == $total_pages) ? 'blog-pagination__item--active' : ''; ?>">
                    <a href="<?php echo esc_url(get_pagenum_link($total_pages)); ?>"><?php echo str_pad($total_pages, 2, '0', STR_PAD_LEFT); ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
    <?php endif; wp_reset_postdata(); ?>

    <!-- ===== 8. NEWSLETTER SECTION ===== -->
    <section class="blog-newsletter" id="blog-newsletter">
        <div class="container">
            <div class="blog-newsletter__wrapper">
                <span class="blog-newsletter__title-large">Đừng bỏ lỡ</span>
                <span class="blog-newsletter__title-accent">các Chiến lược mới</span>

                <p class="blog-newsletter__desc">
                    Nhận bản tin hàng tuần về Content SEO chuẩn cho Doanh Nghiệp, cập nhật thuật toán Google và
                    Case study thực tế. Không Spam, chỉ có kiến thức giá trị.
                </p>

                <div class="blog-newsletter__form">
                    <div class="blog-newsletter__input-wrapper">
                        <input type="email" class="blog-newsletter__input"
                            placeholder="Email doanh nghiệp của bạn..." id="newsletter-email">
                        <button type="button" class="blog-newsletter__submit"
                            id="btn-newsletter-submit">Đăng ký ngay</button>
                    </div>
                </div>

                <p class="blog-newsletter__note">
                    Nội dung được biên tập nghiêm ngặt theo tiêu chuẩn&nbsp;EEAT&nbsp;và&nbsp;Search Intent.
                    Nói KHÔNG với bài viết câu view rỗng tuếch.
                </p>

                <a href="#" class="blog-newsletter__editorial-link" id="link-editorial-standard">
                    Xem tiêu chuẩn biên tập
                    <img src="<?php echo $theme_url; ?>/assets/images/blog/arrow-right-green-sm.svg" alt="">
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
