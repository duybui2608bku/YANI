<?php
/**
 * The template for displaying single posts
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
$theme_url = esc_url(get_template_directory_uri());

// Current post data
$post_id      = get_the_ID();
$post_title   = get_the_title();
$post_content = get_the_content();
$reading_time = yani_get_reading_time($post_content);
$post_date    = get_the_date('M jS, Y');
$post_year    = get_the_date('Y');
$categories   = get_the_category();
$first_cat    = !empty($categories) ? $categories[0] : null;

// Related posts (same category)
$related_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 9,
    'post__not_in'   => array($post_id),
    'post_status'    => 'publish',
);
if ($first_cat) {
    $related_args['cat'] = $first_cat->term_id;
}
$related_query = new WP_Query($related_args);
?>

<main id="primary" class="site-main blog-single-page">

    <!-- Background decorations -->
    <img src="<?php echo $theme_url; ?>/assets/images/blog-single/infinity-bg-56586a.png"
        class="bsingle-bg-infinity bsingle-bg-infinity--left" alt="" aria-hidden="true">
    <img src="<?php echo $theme_url; ?>/assets/images/blog-single/infinity-bg-56586a.png"
        class="bsingle-bg-infinity bsingle-bg-infinity--right" alt="" aria-hidden="true">

    <!-- ===== 1. HERO / TITLE SECTION ===== -->
    <section class="bsingle-hero" id="bsingle-hero">
        <div class="container">
            <h1 class="bsingle-hero__title">
                <span class="bsingle-hero__title-gradient"><?php echo esc_html($post_title); ?></span>
            </h1>
            <div class="bsingle-hero__meta">
                <?php if ($first_cat): ?>
                    <span class="bsingle-hero__badge"><?php echo esc_html($first_cat->name); ?></span>
                <?php endif; ?>
                <span class="bsingle-hero__badge"><?php echo esc_html($reading_time); ?> phút đọc</span>
                <span class="bsingle-hero__badge"><?php echo esc_html($post_date); ?></span>
            </div>
        </div>
    </section>

    <!-- ===== 2. MAIN CONTENT LAYOUT ===== -->
    <section class="bsingle-layout" id="bsingle-layout">
        <div class="container">

            <!-- LEFT SIDEBAR -->
            <aside class="bsingle-sidebar" id="bsingle-sidebar">

                <!-- Table of Contents (auto-generated from headings) -->
                <div class="bsingle-toc" id="bsingle-toc">
                    <h2 class="bsingle-toc__title">Mục lục bài viết</h2>
                    <ul class="bsingle-toc__list" id="toc-list">
                        <?php
                        // Extract headings from content for TOC
                        $content_raw = get_the_content();
                        $content_raw = apply_filters('the_content', $content_raw);
                        if (preg_match_all('/<h[2-3][^>]*id=["\']([^"\']*)["\'][^>]*>(.*?)<\/h[2-3]>/si', $content_raw, $matches)) {
                            foreach ($matches[2] as $i => $heading_text) {
                                $heading_id = $matches[1][$i];
                                echo '<li><a href="#' . esc_attr($heading_id) . '">' . wp_strip_all_tags($heading_text) . '</a></li>';
                            }
                        } else {
                            // Fallback: extract h2 tags without id
                            if (preg_match_all('/<h2[^>]*>(.*?)<\/h2>/si', $content_raw, $h2_matches)) {
                                foreach ($h2_matches[1] as $i => $heading_text) {
                                    $slug = 'section-' . ($i + 1);
                                    echo '<li><a href="#' . esc_attr($slug) . '">' . wp_strip_all_tags($heading_text) . '</a></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>

                <!-- Share This Post -->
                <div class="bsingle-share" id="bsingle-share">
                    <h3 class="bsingle-share__title">Chia sẻ bài viết:</h3>
                    <div class="bsingle-share__icons">
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
                            class="bsingle-share__icon" id="share-linkedin" aria-label="Chia sẻ trên LinkedIn"
                            target="_blank" rel="noopener noreferrer">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.25 3.875C24.278 3.875 25.264 4.283 25.99 5.01C26.717 5.737 27.125 6.722 27.125 7.75V23.25C27.125 24.278 26.717 25.263 25.99 25.99C25.264 26.717 24.278 27.125 23.25 27.125H7.75C6.722 27.125 5.737 26.717 5.01 25.99C4.283 25.263 3.875 24.278 3.875 23.25V7.75C3.875 6.722 4.283 5.737 5.01 5.01C5.737 4.283 6.722 3.875 7.75 3.875H23.25ZM23.25 6.458H7.75C7.408 6.458 7.079 6.594 6.837 6.837C6.594 7.079 6.458 7.407 6.458 7.75V23.25C6.458 23.593 6.594 23.921 6.837 24.163C7.079 24.406 7.408 24.542 7.75 24.542H23.25C23.593 24.542 23.921 24.406 24.164 24.163C24.406 23.921 24.542 23.593 24.542 23.25V7.75C24.542 7.407 24.406 7.079 24.164 6.837C23.921 6.594 23.593 6.458 23.25 6.458ZM10.333 12.917C10.65 12.917 10.955 13.033 11.192 13.243C11.428 13.453 11.579 13.743 11.616 14.057L11.625 14.208V20.667C11.625 20.996 11.499 21.313 11.273 21.552C11.047 21.791 10.738 21.935 10.409 21.955C10.081 21.974 9.757 21.867 9.504 21.656C9.252 21.444 9.09 21.145 9.051 20.818L9.042 20.667V14.208C9.042 13.866 9.178 13.537 9.42 13.295C9.662 13.053 9.991 12.917 10.333 12.917ZM14.208 11.625C14.511 11.625 14.804 11.731 15.036 11.925C15.268 12.119 15.425 12.388 15.48 12.685C15.74 12.535 16.008 12.4 16.284 12.281C17.146 11.913 18.436 11.71 19.601 12.076C20.212 12.27 20.826 12.631 21.28 13.247C21.687 13.796 21.907 14.464 21.951 15.215L21.959 15.5V20.667C21.958 20.996 21.832 21.313 21.606 21.552C21.38 21.791 21.071 21.935 20.743 21.955C20.414 21.974 20.09 21.867 19.838 21.656C19.585 21.444 19.423 21.145 19.384 20.818L19.375 20.667V15.5C19.375 15.074 19.272 14.875 19.205 14.783C19.108 14.663 18.975 14.578 18.826 14.54C18.377 14.398 17.73 14.473 17.3 14.657C16.654 14.933 16.062 15.367 15.659 15.769L15.5 15.939V20.667C15.5 20.996 15.374 21.313 15.148 21.552C14.922 21.791 14.613 21.935 14.284 21.955C13.956 21.974 13.632 21.867 13.379 21.656C13.127 21.444 12.965 21.145 12.926 20.818L12.917 20.667V12.917C12.917 12.574 13.053 12.246 13.295 12.003C13.537 11.761 13.866 11.625 14.208 11.625ZM10.333 9.042C10.676 9.042 11.005 9.178 11.247 9.42C11.489 9.662 11.625 9.991 11.625 10.333C11.625 10.676 11.489 11.004 11.247 11.247C11.005 11.489 10.676 11.625 10.333 11.625C9.991 11.625 9.662 11.489 9.42 11.247C9.178 11.004 9.042 10.676 9.042 10.333C9.042 9.991 9.178 9.662 9.42 9.42C9.662 9.178 9.991 9.042 10.333 9.042Z" fill="url(#paint_linkedin_wp)"/>
                                <defs>
                                    <linearGradient id="paint_linkedin_wp" x1="1.55" y1="-3.43" x2="41.28" y2="1.19" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#5EE0B6"/>
                                        <stop offset="1" stop-color="#0F2A20"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <!-- X (Twitter) -->
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode($post_title); ?>"
                            class="bsingle-share__icon" id="share-twitter" aria-label="Chia sẻ trên X"
                            target="_blank" rel="noopener noreferrer">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask_x_wp" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="21">
                                    <path d="M0 0H20.667V20.667H0V0Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask_x_wp)">
                                    <path d="M16.275 0.969H19.444L12.521 8.902L20.667 19.699H14.289L9.291 13.152L3.578 19.699H0.406L7.81 11.211L0 0.97H6.539L11.051 6.953L16.275 0.969ZM15.16 17.798H16.917L5.58 2.771H3.696L15.16 17.798Z" fill="url(#paint_x_wp)"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint_x_wp" x1="-2.07" y1="-4.92" x2="33.15" y2="-0.4" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#5EE0B6"/>
                                        <stop offset="1" stop-color="#0F2A20"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                            class="bsingle-share__icon" id="share-facebook" aria-label="Chia sẻ trên Facebook"
                            target="_blank" rel="noopener noreferrer">
                            <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.02 1.821C6.185 0.655 7.766 0 9.415 0H12.612C12.847 0 13.073 0.094 13.24 0.26C13.406 0.427 13.5 0.653 13.5 0.888V5.15C13.5 5.386 13.406 5.612 13.24 5.778C13.073 5.945 12.847 6.039 12.612 6.039H9.415C9.391 6.039 9.368 6.043 9.347 6.052C9.325 6.061 9.306 6.074 9.289 6.091C9.273 6.107 9.26 6.127 9.251 6.148C9.242 6.17 9.237 6.193 9.237 6.216V8.525H12.612C12.747 8.525 12.88 8.556 13.001 8.615C13.123 8.674 13.229 8.76 13.312 8.866C13.395 8.973 13.453 9.097 13.481 9.229C13.509 9.361 13.506 9.498 13.474 9.629L12.408 13.891C12.36 14.083 12.249 14.254 12.093 14.376C11.937 14.498 11.744 14.564 11.546 14.564H9.237V22.201C9.237 22.436 9.144 22.662 8.977 22.829C8.81 22.995 8.585 23.089 8.349 23.089H4.087C3.851 23.089 3.625 22.995 3.459 22.829C3.292 22.662 3.198 22.436 3.198 22.201V14.564H0.89C0.654 14.564 0.428 14.47 0.262 14.304C0.095 14.137 0.002 13.911 0.002 13.676V9.413C0.002 9.297 0.025 9.181 0.069 9.074C0.114 8.966 0.179 8.868 0.262 8.785C0.344 8.703 0.442 8.637 0.55 8.593C0.658 8.548 0.773 8.525 0.89 8.525H3.198V6.216C3.199 4.568 3.854 2.987 5.02 1.821ZM9.415 1.776C8.237 1.776 7.108 2.244 6.275 3.077C5.442 3.909 4.975 5.039 4.975 6.216V9.413C4.975 9.649 4.881 9.874 4.714 10.041C4.548 10.208 4.322 10.301 4.087 10.301H1.778V12.788H4.087C4.322 12.788 4.548 12.881 4.714 13.048C4.881 13.214 4.975 13.44 4.975 13.676V21.313H7.461V13.676C7.461 13.44 7.555 13.214 7.721 13.048C7.888 12.881 8.114 12.788 8.349 12.788H10.852L11.474 10.301H8.349C8.114 10.301 7.888 10.208 7.721 10.041C7.555 9.874 7.461 9.649 7.461 9.413V6.216C7.461 5.698 7.667 5.201 8.033 4.835C8.4 4.468 8.897 4.263 9.415 4.263H11.724V1.776H9.415Z" fill="url(#paint_fb_wp)"/>
                                <defs>
                                    <linearGradient id="paint_fb_wp" x1="-1.35" y1="-7.26" x2="21.92" y2="-5.67" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#5EE0B6"/>
                                        <stop offset="1" stop-color="#0F2A20"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <!-- Link/Copy -->
                        <a href="#" class="bsingle-share__icon" id="share-link" aria-label="Sao chép liên kết"
                            onclick="navigator.clipboard.writeText('<?php echo esc_url(get_permalink()); ?>'); return false;">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.612 11.195C8.982 11.689 9.454 12.099 9.996 12.395C10.537 12.691 11.137 12.867 11.752 12.911C12.368 12.955 12.986 12.866 13.565 12.65C14.143 12.434 14.668 12.097 15.105 11.66L17.688 9.077C18.473 8.265 18.907 7.177 18.897 6.049C18.887 4.92 18.434 3.84 17.636 3.041C16.838 2.243 15.758 1.79 14.629 1.78C13.5 1.77 12.412 2.205 11.6 2.989L10.119 4.461" stroke="url(#paint_link1_wp)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.057 9.473C11.687 8.979 11.215 8.569 10.674 8.273C10.132 7.977 9.533 7.801 8.917 7.757C8.301 7.713 7.683 7.802 7.104 8.018C6.526 8.234 6.001 8.571 5.564 9.008L2.981 11.591C2.197 12.403 1.763 13.491 1.772 14.62C1.782 15.749 2.235 16.829 3.033 17.627C3.832 18.425 4.911 18.878 6.04 18.888C7.169 18.898 8.257 18.464 9.069 17.679L10.541 16.207" stroke="url(#paint_link2_wp)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <linearGradient id="paint_link1_wp" x1="7.58" y1="-1.72" x2="25.19" y2="0.17" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#5EE0B6"/>
                                        <stop offset="1" stop-color="#0F2A20"/>
                                    </linearGradient>
                                    <linearGradient id="paint_link2_wp" x1="0.74" y1="4.24" x2="18.35" y2="6.14" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#5EE0B6"/>
                                        <stop offset="1" stop-color="#0F2A20"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Join the Pack / Newsletter -->
                <div class="bsingle-newsletter" id="bsingle-newsletter">
                    <span class="bsingle-newsletter__label">Tham gia ngay</span>
                    <h4 class="bsingle-newsletter__heading">Nhận cập nhật từ YaniContent.</h4>
                    <p class="bsingle-newsletter__desc">Đăng ký nhận bản tin để cập nhật xu hướng và chiến lược mới nhất.</p>
                    <div class="bsingle-newsletter__input-wrap">
                        <input type="email" class="bsingle-newsletter__input" placeholder="Địa chỉ email"
                            id="sidebar-newsletter-email">
                    </div>
                    <button type="button" class="bsingle-newsletter__btn" id="btn-subscribe">Đăng ký cập nhật</button>
                </div>
            </aside>

            <!-- RIGHT: POST CONTENT -->
            <div class="bsingle-content" id="bsingle-content">
                <!-- Post Featured Image -->
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url($post_id, 'large')); ?>"
                        alt="<?php the_title_attribute(); ?>"
                        class="bsingle-content__featured-img" id="bsingle-featured-img">
                <?php else: ?>
                    <div class="bsingle-content__featured-img" id="bsingle-featured-img"></div>
                <?php endif; ?>

                <!-- Post Content Body -->
                <article class="bsingle-content__article" id="bsingle-article">
                    <?php the_content(); ?>
                </article>
            </div>

        </div>
    </section>

    <!-- ===== 3. RELATED POSTS SECTION ===== -->
    <?php if ($related_query->have_posts()): ?>
    <section class="bsingle-related" id="bsingle-related">
        <div class="container">
            <h2 class="bsingle-related__title">Bài viết liên quan cùng chủ đề</h2>

            <div class="bsingle-related__grid">
                <?php while ($related_query->have_posts()): $related_query->the_post();
                    $r_cats = get_the_category();
                    $r_cat_name = !empty($r_cats) ? $r_cats[0]->name : 'Content SEO';
                ?>
                    <a href="<?php the_permalink(); ?>" class="bsingle-related-card">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                alt="<?php the_title_attribute(); ?>" class="bsingle-related-card__img">
                        <?php else: ?>
                            <div class="bsingle-related-card__img"></div>
                        <?php endif; ?>
                        <div class="bsingle-related-card__body">
                            <span class="bsingle-related-card__category"><?php echo esc_html($r_cat_name); ?></span>
                            <h3 class="bsingle-related-card__title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ===== 4. CTA AUDIT SECTION ===== -->
    <section class="bsingle-cta-audit" id="bsingle-cta-audit">
        <div class="container">
            <span class="bsingle-cta-audit__title-large">Nhận Audit Nội Dung </span>
            <span class="bsingle-cta-audit__title-accent">miễn phí</span>
            <p class="bsingle-cta-audit__desc">Đánh giá nhanh cấu trúc content, EEAT và cơ hội tăng traffic cho website của bạn.</p>
            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="bsingle-cta-audit__btn" id="btn-audit-send">Gửi website để Audit</a>
        </div>
    </section>

</main>

<?php
get_footer();
