<?php
/**
 * Template Name: Bảng Giá
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main price-page">

    <!-- Background decorations -->
    <div class="price-bg-vo-cuc price-bg-vo-cuc--top" aria-hidden="true"></div>
    <div class="price-bg-vo-cuc price-bg-vo-cuc--bottom" aria-hidden="true"></div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/spotlight-1.svg" class="price-spotlight price-spotlight--1" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/spotlight-2.svg" class="price-spotlight price-spotlight--2" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/spotlight-3.svg" class="price-spotlight price-spotlight--3" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/spotlight-4.svg" class="price-spotlight price-spotlight--4" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/spotlight-5.svg" class="price-spotlight price-spotlight--5" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/spotlight-6.svg" class="price-spotlight price-spotlight--6" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/bgr-bang-gia.svg" class="price-bgr-main" alt="" aria-hidden="true">

    <!-- ===== SECTION 1: HERO / OPENING ===== -->
    <section class="price-hero" id="price-hero">
        <div class="container">
            <div class="price-hero__badge">
                <span class="price-hero__badge-text">CẬP NHẬT THỊ TRƯỜNG 2026</span>
            </div>
            <h1 class="price-hero__title">
                <span class="price-hero__title-gradient">Bảng Giá Viết Bài Chuẩn SEO</span>
            </h1>
            <h2 class="price-hero__subtitle">Chọn Mức Giá Phù Hợp Nhất</h2>
            <p class="price-hero__desc">Trang này giúp bạn nắm nhanh&nbsp;chi phí viết bài chuẩn SEO, hiểu rõ&nbsp;giá gồm gì/không gồm gì, và chọn mức phù hợp theo mục tiêu: tăng lượt truy cập, tìm khách tiềm năng, hay xây uy tín thương hiệu.</p>
        </div>
    </section>

    <!-- ===== SECTION 2: TÓM TẮT 30 GIÂY ===== -->
    <section class="price-summary" id="price-summary">
        <div class="container">
            <div class="price-summary__outer">
                <h2 class="price-summary__title"><span class="text-gradient">TÓM TẮT 30 GIÂY – MỨC GIÁ CONTENT</span></h2>
                <div class="price-summary__grid">
                    <!-- Row 1: 2 cards -->
                    <!-- Card 1: Mức giá phổ biến -->
                    <div class="price-summary__card price-summary__card--price" id="summary-price-range">
                        <h3 class="price-summary__card-title">Mức giá phổ biến</h3>
                        <span class="price-summary__card-sub">(tính theo 1.000 từ)</span>
                        <div class="price-summary__card-body">
                            <div class="price-summary__range-item">
                                <span class="price-summary__range-pill">120.000đ – 180.000đ</span>
                                <span class="price-summary__range-label">giá rẻ</span>
                            </div>
                            <div class="price-summary__range-item">
                                <span class="price-summary__range-pill">250.000đ – 300.000đ</span>
                                <span class="price-summary__range-label">tầm trung</span>
                            </div>
                            <div class="price-summary__range-item">
                                <span class="price-summary__range-pill">300.000đ – 500.000đ</span>
                                <span class="price-summary__range-label">bài "đinh" cần độ tin cậy/chuyển đổi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Chọn nhanh theo mục tiêu -->
                    <div class="price-summary__card price-summary__card--goal" id="summary-quick-pick">
                        <h3 class="price-summary__card-title">Chọn nhanh theo mục tiêu</h3>
                        <div class="price-summary__card-sub-spacer"></div>
                        <div class="price-summary__card-body">
                            <div class="price-summary__goal-item">
                                <span class="price-summary__goal-pill">Giá rẻ</span>
                                <span class="price-summary__goal-desc">duy trì nội dung</span>
                            </div>
                            <div class="price-summary__goal-item">
                                <span class="price-summary__goal-pill">Tầm trung</span>
                                <span class="price-summary__goal-desc">kéo lượt truy cập/giữ chất lượng ổn định</span>
                            </div>
                            <div class="price-summary__goal-item">
                                <span class="price-summary__goal-pill">Cao</span>
                                <span class="price-summary__goal-desc">bài "đinh" để tăng tin tưởng và điều hướng liên hệ</span>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: 3 cards -->
                    <!-- Card 3: Giá thường bao gồm -->
                    <div class="price-summary__card price-summary__card--include" id="summary-includes">
                        <h3 class="price-summary__card-title">Giá thường bao gồm:</h3>
                        <div class="price-summary__card-divider"></div>
                        <div class="price-summary__card-body">
                            <ul class="price-summary__checklist-list">
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Nghiên cứu từ khóa theo nhu cầu tìm kiếm.</li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Dàn ý (tùy mức).</li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Viết nội dung không trùng lặp.</li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Tối ưu tiêu đề–bố cục.</li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">1–2 lần chỉnh sửa.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 4: Giá thường không bao gồm -->
                    <div class="price-summary__card price-summary__card--exclude" id="summary-excludes">
                        <h3 class="price-summary__card-title">Giá thường không bao gồm:</h3>
                        <div class="price-summary__card-divider"></div>
                        <div class="price-summary__card-body">
                            <ul class="price-summary__checklist-list">
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Thiết kế hình ảnh độc quyền.</li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Đăng bài &amp; căn chỉnh giao diện trên website.</li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/price-faq-toggle.svg" alt="" class="price-summary__checklist-icon">Tối ưu kỹ thuật toàn website (nếu có sẽ báo rõ trước).</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 5: Thời gian bàn giao -->
                    <div class="price-summary__card price-summary__card--delivery" id="summary-delivery">
                        <h3 class="price-summary__card-title">Thời gian bàn giao:</h3>
                        <div class="price-summary__card-divider"></div>
                        <div class="price-summary__card-body">
                            <div class="price-summary__delivery">
                                <div class="price-summary__delivery-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/icon-clock-1.svg" alt="" class="price-summary__delivery-icon">
                                    <p>Thường&nbsp;1–2 ngày/bài<br>(tùy mức &amp; độ khó).</p>
                                </div>
                                <div class="price-summary__delivery-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/icon-clock-2.svg" alt="" class="price-summary__delivery-icon">
                                    <p>Bài gấp/ngoài giờ có thể phát sinh phí.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.price-summary__outer -->
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
