<?php
/**
 * Template Name: Trang Chủ
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main home-page">

    <!-- Background decorations -->
    <div class="home-bg-vo-cuc home-bg-vo-cuc--top" aria-hidden="true"></div>
    <div class="home-bg-vo-cuc home-bg-vo-cuc--bottom" aria-hidden="true"></div>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/spotlight-hero.svg" class="home-spotlight home-spotlight--hero" alt="" aria-hidden="true">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/spotlight-2.svg" class="home-spotlight home-spotlight--2" alt="" aria-hidden="true">

    <!-- ===== HERO SECTION ===== -->
    <section class="home-hero" id="home-hero">
        <div class="container">
            <p class="home-hero__subtitle"><?php esc_html_e('GIẢI PHÁP CONTENT CHUYÊN NGHIỆP CHO DOANH NGHIỆP SME', 'yani-content'); ?></p>

            <h1>
                <span class="home-hero__title-gradient"><?php esc_html_e('CHUYỂN HOÁ Nội dung', 'yani-content'); ?></span><br>
                <span class="home-hero__title-white"><?php esc_html_e('THÀNH Tài Sản Số Bền Vững', 'yani-content'); ?></span>
            </h1>

            <p class="home-hero__desc">
                <?php esc_html_e('Thay vì "đăng bài cho có", Yani tập trung xây dựng hệ thống nội dung số & content SEO chiến lược cho doanh nghiệp, bám sát hành trình khách hàng, giải thích đúng vấn đề, tăng niềm tin, và đưa người đọc đến bước liên hệ. Phù hợp doanh nghiệp SME muốn tăng trưởng dài hạn, giảm lệ thuộc quảng cáo.', 'yani-content'); ?>
            </p>

            <div class="home-hero__actions">
                <a href="#home-services" class="home-hero__btn-primary" id="btn-xem-giai-phap"><?php esc_html_e('Xem giải pháp content', 'yani-content'); ?></a>

                <a href="#" class="home-hero__btn-zalo" id="btn-zalo-hero">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/btn-zalo.svg" alt="<?php esc_attr_e('Nhắn zalo để nhận báo giá', 'yani-content'); ?>" class="home-hero__btn-zalo-icon">
                </a>
            </div>

            <a href="#home-pricing" class="home-hero__link-price" id="link-bang-gia">
                <?php esc_html_e('Xem bảng giá và cách tính chi tiết', 'yani-content'); ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-link.svg" alt="">
            </a>
        </div>

        <!-- Hero visual -->
        <div class="home-hero__visual" aria-hidden="true">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/hero-img.svg" alt="">
        </div>
    </section>

    <!-- ===== PARTNER SECTION (Đối tác phù hợp) ===== -->
    <section class="home-partner" id="home-partner">
        <div class="container">
            <div class="home-partner__header">
                <h2 class="home-partner__title-gradient"><?php esc_html_e('Đối tác phù hợp', 'yani-content'); ?></h2>
                <p class="home-partner__desc">
                    <?php esc_html_e('Thay vì "đăng bài cho có", Yani tập trung xây dựng hệ thống nội dung số & content SEO chiến lược cho doanh nghiệp, bám sát hành trình khách hàng, giải thích đúng vấn đề, tăng niềm tin, và đưa người đọc đến bước liên hệ. Phù hợp doanh nghiệp SME muốn tăng trưởng dài hạn, giảm lệ thuộc quảng cáo.', 'yani-content'); ?>
                </p>
            </div>

            <div class="home-partner__grid">
                <div class="home-partner__card" id="partner-construction">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-xd-nt.svg" alt="" class="home-partner__card-icon">
                    <h4 class="home-partner__card-title"><?php esc_html_e('Xây dựng & Nội thất', 'yani-content'); ?></h4>
                    <p class="home-partner__card-desc"><?php esc_html_e('Thể hiện năng lực thi công và tư duy thẩm mỹ qua từng bài viết kỹ thuật.', 'yani-content'); ?></p>
                </div>

                <div class="home-partner__card" id="partner-ymyl">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-y-te.svg" alt="" class="home-partner__card-icon">
                    <h4 class="home-partner__card-title"><?php esc_html_e('Y tế & Sức khỏe (YMYL)', 'yani-content'); ?></h4>
                    <p class="home-partner__card-desc"><?php esc_html_e('Tuân thủ tiêu chuẩn EEAT. Nội dung minh bạch, chính xác và có trách nhiệm.', 'yani-content'); ?></p>
                </div>

                <div class="home-partner__card" id="partner-b2b">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-business.svg" alt="" class="home-partner__card-icon">
                    <h4 class="home-partner__card-title"><?php esc_html_e('B2B Services', 'yani-content'); ?></h4>
                    <p class="home-partner__card-desc"><?php esc_html_e('Tuân thủ tiêu chuẩn EEAT. Nội dung minh bạch, chính xác và có trách nhiệm.', 'yani-content'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PAIN POINTS SECTION ===== -->
    <section class="home-pain" id="home-pain">
        <div class="container">
            <div class="home-pain__header">
                <h2 class="home-pain__title-accent"><?php esc_html_e('Content có rồi nhưng không ra khách?', 'yani-content'); ?></h2>
                <h3 class="home-pain__title-main"><?php esc_html_e('BẠN CÓ ĐANG GẶP TÌNH HUỐNG NÀY?', 'yani-content'); ?></h3>
                <p class="home-pain__subtitle"><?php esc_html_e('Nếu bạn thấy "đúng mình", phần dưới sẽ giúp bạn chọn hướng triển khai phù hợp (không cần gói dài ngay từ đầu).', 'yani-content'); ?></p>
            </div>

            <div class="home-pain__grid">
                <div class="home-pain__card" id="pain-traffic">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/card-bg-1.svg" alt="" class="home-pain__card-bg">
                    <h4 class="home-pain__card-title"><?php esc_html_e('Đăng bài đều nhưng traffic "mỏng"', 'yani-content'); ?></h4>
                    <p class="home-pain__card-desc"><?php esc_html_e('Nội dung thiếu đúng "câu hỏi người tìm kiếm", nên khó lên nhóm từ khóa mang lại nhu cầu thật.', 'yani-content'); ?></p>
                    <a href="#" class="home-pain__card-link">
                        <?php esc_html_e('Xem hướng triển khai phù hợp', 'yani-content'); ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                    </a>
                </div>

                <div class="home-pain__card" id="pain-industry">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/card-bg-2.svg" alt="" class="home-pain__card-bg">
                    <h4 class="home-pain__card-title"><?php esc_html_e('Ngành khó (B2B/YMYL) nên "không dám viết đại"', 'yani-content'); ?></h4>
                    <p class="home-pain__card-desc"><?php esc_html_e('Cần nội dung đúng ngữ cảnh ngành, diễn đạt rõ ràng và hạn chế sai sót gây hiểu nhầm.', 'yani-content'); ?></p>
                    <a href="#" class="home-pain__card-link">
                        <?php esc_html_e('Xem tiêu chuẩn nội dung', 'yani-content'); ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                    </a>
                </div>

                <div class="home-pain__card" id="pain-team">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/card-bg-3.svg" alt="" class="home-pain__card-bg">
                    <h4 class="home-pain__card-title"><?php echo esc_html__('Team in-house thiếu thời gian / thiếu chuyên môn ngành', 'yani-content'); ?></h4>
                    <p class="home-pain__card-desc"><?php esc_html_e('Vấn đề thường không nằm ở "viết", mà ở việc chọn đúng chủ đề, đúng dàn ý, đúng tiêu chuẩn bàn giao.', 'yani-content'); ?></p>
                    <a href="#" class="home-pain__card-link">
                        <?php esc_html_e('Gửi ngành để tư vấn nhanh', 'yani-content'); ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                    </a>
                </div>

                <div class="home-pain__card" id="pain-rank">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/card-bg-4.svg" alt="" class="home-pain__card-bg">
                    <h4 class="home-pain__card-title"><?php esc_html_e('Bài lên rồi tụt / không bền', 'yani-content'); ?></h4>
                    <p class="home-pain__card-desc"><?php esc_html_e('Thiếu độ sâu, thiếu cấu trúc, thiếu tín hiệu tin cậy khiến bài khó giữ top khi cạnh tranh tăng.', 'yani-content'); ?></p>
                    <a href="#" class="home-pain__card-link">
                        <?php esc_html_e('Tối ưu theo hướng bền vững', 'yani-content'); ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                    </a>
                </div>
            </div>

            <div class="home-pain__cta-row">
                <a href="#" class="home-pain__cta-btn" id="btn-zalo-pain"><?php esc_html_e('Nhắn zalo để được định hướng nhanh', 'yani-content'); ?></a>
                <p class="home-pain__cta-hint"><?php esc_html_e('Gợi ý: bạn có thể bắt đầu bằng 1–3 bài test để đánh giá chất lượng trước.', 'yani-content'); ?></p>
            </div>
        </div>
    </section>

    <!-- ===== CASE STUDY SECTION ===== -->
    <section class="home-case" id="home-case">
        <div class="container">
            <div class="home-case__wrapper">
                <div class="home-case__left">
                    <h2 class="home-case__label"><?php esc_html_e('CASE STUDY', 'yani-content'); ?></h2>
                    <p class="home-case__title-accent"><?php esc_html_e('Hiệu quả Thực tế', 'yani-content'); ?></p>
                    <p class="home-case__subtitle"><?php esc_html_e('Các case dưới đây đại diện cho mô hình triển khai và tư duy tối ưu, không phải cam kết kết quả cố định.', 'yani-content'); ?></p>
                    <p class="home-case__desc">
                        <?php esc_html_e('Dưới đây là ví dụ cách chúng tôi đo và tối ưu hiệu quả nội dung, tập trung vào traffic chất lượng, hành vi người dùng và khả năng tạo lead, thay vì chỉ chạy theo số lượng bài viết hay thứ hạng ngắn hạn.', 'yani-content'); ?>
                    </p>
                    <p class="home-case__note"><?php esc_html_e('(Số liệu minh họa dựa trên các dự án cùng phân khúc)', 'yani-content'); ?></p>
                </div>

                <div class="home-case__right">
                    <!-- Case card 1 -->
                    <div class="home-case__card" id="case-construction">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/case-study-card-1.svg" alt="" class="home-case__card-bg">
                        <div class="home-case__card-info">
                            <div class="home-case__card-company">
                                <div>
                                    <p class="home-case__card-company-name"><?php esc_html_e('Construction Firm', 'yani-content'); ?></p>
                                    <p class="home-case__card-company-desc"><?php esc_html_e('Dự án xây dựng', 'yani-content'); ?></p>
                                </div>
                                <span class="home-case__card-stat-highlight" style="margin-left: auto;"><?php esc_html_e('Growth', 'yani-content'); ?></span>
                            </div>
                            <div class="home-case__card-stat-divider"></div>
                            <div class="home-case__card-stats">
                                <div class="home-case__card-stat">
                                    <span class="home-case__card-stat-label"><?php esc_html_e('MỤC TIÊU', 'yani-content'); ?></span>
                                    <span class="home-case__card-stat-value"><?php esc_html_e('Tăng Organic Traffic', 'yani-content'); ?></span>
                                </div>
                                <div class="home-case__card-stat">
                                    <span class="home-case__card-stat-label"><?php esc_html_e('KẾT QUẢ', 'yani-content'); ?></span>
                                    <span class="home-case__card-stat-value"><?php esc_html_e('Traffic', 'yani-content'); ?></span>
                                    <span class="home-case__card-big-number">X3</span>
                                </div>
                                <div class="home-case__card-stat">
                                    <span class="home-case__card-stat-label"><?php echo esc_html__('TÁC ĐỘNG', 'yani-content'); ?><br><?php echo esc_html__('KINH DOANH', 'yani-content'); ?></span>
                                    <span class="home-case__card-stat-highlight"><?php esc_html_e('Tăng Leads chất lượng', 'yani-content'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case card 2 -->
                    <div class="home-case__card" id="case-education">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/case-study-card-2.svg" alt="" class="home-case__card-bg">
                        <div class="home-case__card-info">
                            <div class="home-case__card-company">
                                <div>
                                    <p class="home-case__card-company-name"><?php esc_html_e('B2B Education', 'yani-content'); ?></p>
                                    <p class="home-case__card-company-desc"><?php esc_html_e('Đào tạo Tiếng Anh', 'yani-content'); ?></p>
                                </div>
                                <span class="home-case__card-stat-highlight" style="margin-left: auto;"><?php esc_html_e('Niche Authority', 'yani-content'); ?></span>
                            </div>
                            <div class="home-case__card-stat-divider"></div>
                            <div class="home-case__card-stats">
                                <div class="home-case__card-stat">
                                    <span class="home-case__card-stat-label"><?php esc_html_e('VẤN ĐỀ', 'yani-content'); ?></span>
                                    <span class="home-case__card-stat-value"><?php esc_html_e('Traffic dậm chân tại chỗ', 'yani-content'); ?></span>
                                </div>
                                <div class="home-case__card-stat">
                                    <span class="home-case__card-stat-label"><?php esc_html_e('GIẢI PHÁP', 'yani-content'); ?></span>
                                    <span class="home-case__card-stat-value"><?php esc_html_e('Topic Cluster', 'yani-content'); ?></span>
                                </div>
                                <div class="home-case__card-stat">
                                    <span class="home-case__card-stat-label"><?php esc_html_e('HIỆU QUẢ', 'yani-content'); ?></span>
                                    <span class="home-case__card-stat-highlight"><?php echo esc_html__('Phủ sóng', 'yani-content'); ?><br><?php echo esc_html__('từ khóa ngành', 'yani-content'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES SECTION (Dịch Vụ Cốt Lõi) ===== -->
    <section class="home-services" id="home-services">
        <div class="container">
            <div class="home-services__header">
                <p class="home-services__accent"><?php esc_html_e('Giải pháp Nội dung Chuyên biệt', 'yani-content'); ?></p>
                <h2 class="home-services__title"><?php esc_html_e('DỊCH VỤ CỐT LÕI', 'yani-content'); ?></h2>
                <p class="home-services__desc">
                    <?php esc_html_e('Không phải doanh nghiệp nào cũng cần cùng một loại content. Chúng tôi xây dựng từng giải pháp nội dung để giải quyết đúng vấn đề SEO và chuyển đổi mà team marketing đang gặp phải.', 'yani-content'); ?>
                </p>
            </div>

            <div class="home-services__dots">
                <span class="home-services__dot"></span>
                <span class="home-services__dot active"></span>
                <span class="home-services__dot"></span>
            </div>

            <div class="home-services__cards">
                <div class="home-services__card" id="service-topic-cluster">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-service-1.svg" alt="" class="home-services__card-icon">
                    <h3 class="home-services__card-title"><?php echo esc_html__('Triển khai', 'yani-content'); ?><br><?php echo esc_html__('Topic Cluster', 'yani-content'); ?></h3>
                    <p class="home-services__card-feature"><?php esc_html_e('Bài Pillar chuyên sâu', 'yani-content'); ?></p>
                    <p class="home-services__card-desc"><?php esc_html_e('Xây dựng mạng lưới nội dung bao phủ chủ đề. Giúp Google hiểu bạn là chuyên gia số 1 trong ngành.', 'yani-content'); ?></p>
                </div>

                <div class="home-services__card" id="service-eeat">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-service-3.svg" alt="" class="home-services__card-icon">
                    <h3 class="home-services__card-title"><?php esc_html_e('Content Chuẩn EEAT', 'yani-content'); ?></h3>
                    <p class="home-services__card-feature"><?php esc_html_e('Tối ưu Search Intent', 'yani-content'); ?></p>
                    <p class="home-services__card-desc"><?php esc_html_e('Nội dung 100% Human-written. Tập trung vào trải nghiệm người dùng và intent tìm kiếm thực tế.', 'yani-content'); ?></p>
                    <span class="home-services__card-tag"><?php esc_html_e('Recommended', 'yani-content'); ?></span>
                </div>

                <div class="home-services__card" id="service-audit">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-service-2.svg" alt="" class="home-services__card-icon">
                    <h3 class="home-services__card-title"><?php echo esc_html__('Audit &', 'yani-content'); ?><br><?php echo esc_html__('Tối ưu Content', 'yani-content'); ?></h3>
                    <p class="home-services__card-feature"><?php esc_html_e('Bài Pillar chuyên sâu', 'yani-content'); ?></p>
                    <p class="home-services__card-desc"><?php esc_html_e('Làm mới nội dung cũ (Content Refresh), cập nhật thông tin để lấy lại thứ hạng từ đối thủ.', 'yani-content'); ?></p>
                </div>
            </div>

            <a href="#" class="home-services__link" id="link-chi-tiet-dv">
                <?php esc_html_e('Xem chi tiết dịch vụ', 'yani-content'); ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-link-service.svg" alt="">
            </a>
        </div>
    </section>

    <!-- ===== PRICING SECTION (Ước lượng chi phí nhanh) ===== -->
    <section class="home-pricing" id="home-pricing">
        <div class="container">
            <div class="home-pricing__header">
                <p class="home-pricing__accent"><?php esc_html_e('Chọn mức đầu tư theo mục tiêu', 'yani-content'); ?></p>
                <h2 class="home-pricing__title"><?php esc_html_e('ƯỚC LƯỢNG CHI PHÍ NHANH', 'yani-content'); ?></h2>
                <p class="home-pricing__desc">
                    <?php esc_html_e('Thay vì hỏi "một bài bao nhiêu tiền", doanh nghiệp thường chốt theo mục tiêu: duy trì – tăng trưởng – chuyển đổi. Bạn có thể bắt đầu nhỏ với bài test trước.', 'yani-content'); ?>
                </p>
            </div>

            <div class="home-pricing__grid">
                <!-- Maintenance -->
                <div class="home-pricing__card" id="pricing-maintenance">
                    <p class="home-pricing__card-level"><?php esc_html_e('DUY TRÌ', 'yani-content'); ?></p>
                    <h3 class="home-pricing__card-name"><?php esc_html_e('Maintenance', 'yani-content'); ?></h3>
                    <p class="home-pricing__card-desc"><?php esc_html_e('Phù hợp đăng đều, chủ đề thông dụng, tối ưu cơ bản để giữ nền nội dung.', 'yani-content'); ?></p>
                    <div class="home-pricing__card-divider"></div>
                    <ul class="home-pricing__card-features">
                        <li><?php esc_html_e('Bố cục rõ, dễ đọc', 'yani-content'); ?></li>
                        <li><?php esc_html_e('Không trùng lặp nội dung', 'yani-content'); ?></li>
                        <li><?php esc_html_e('Bàn giao nhanh theo lịch', 'yani-content'); ?></li>
                    </ul>
                    <a href="#" class="home-pricing__card-btn home-pricing__card-btn--outline" id="btn-price-maint"><?php esc_html_e('Xem mức giá tham khảo', 'yani-content'); ?></a>
                </div>

                <!-- Growth SEO -->
                <div class="home-pricing__card home-pricing__card--featured" id="pricing-growth">
                    <p class="home-pricing__card-level"><?php esc_html_e('TĂNG TRƯỞNG', 'yani-content'); ?></p>
                    <h3 class="home-pricing__card-name"><?php esc_html_e('Growth SEO', 'yani-content'); ?></h3>
                    <p class="home-pricing__card-desc"><?php esc_html_e('Phù hợp kéo traffic chất lượng cho blog doanh nghiệp, bài dịch vụ cạnh tranh vừa.', 'yani-content'); ?></p>
                    <div class="home-pricing__card-divider"></div>
                    <ul class="home-pricing__card-features">
                        <li><?php esc_html_e('Nghiên cứu nhu cầu tìm kiếm', 'yani-content'); ?></li>
                        <li><?php esc_html_e('Dàn ý duyệt trước (tùy bài)', 'yani-content'); ?></li>
                        <li><?php esc_html_e('Tối ưu điều hướng người dùng', 'yani-content'); ?></li>
                    </ul>
                    <a href="#" class="home-pricing__card-btn home-pricing__card-btn--primary" id="btn-price-growth"><?php esc_html_e('Xem bảng giá chi tiết', 'yani-content'); ?></a>
                </div>

                <!-- Authority -->
                <div class="home-pricing__card" id="pricing-authority">
                    <p class="home-pricing__card-level"><?php esc_html_e('CHUYỂN ĐỔI', 'yani-content'); ?></p>
                    <h3 class="home-pricing__card-name"><?php esc_html_e('Authority', 'yani-content'); ?></h3>
                    <p class="home-pricing__card-desc"><?php esc_html_e('Dành cho bài "đinh" cần lập luận, ví dụ sát ngành và điều hướng liên hệ/mua.', 'yani-content'); ?></p>
                    <div class="home-pricing__card-divider"></div>
                    <ul class="home-pricing__card-features">
                        <li><?php esc_html_e('Góc nhìn/insight khác biệt', 'yani-content'); ?></li>
                        <li><?php esc_html_e('Tối ưu CTA theo mục tiêu', 'yani-content'); ?></li>
                        <li><?php esc_html_e('Báo giá theo phạm vi', 'yani-content'); ?></li>
                    </ul>
                    <a href="#" class="home-pricing__card-btn home-pricing__card-btn--outline" id="btn-price-auth"><?php esc_html_e('Nhận tư vấn mức phù hợp', 'yani-content'); ?></a>
                </div>
            </div>

            <p class="home-pricing__hint"><?php esc_html_e('Gợi ý để dễ chốt: bắt đầu bằng 1–3 bài test (có trả phí), nghiệm thu theo checklist rõ ràng, sau đó mới mở rộng số lượng.', 'yani-content'); ?></p>
        </div>
    </section>

    <!-- ===== CONTENT STANDARDS SECTION ===== -->
    <section class="home-standards" id="home-standards">
        <div class="container">
            <div class="home-standards__header">
                <p class="home-standards__accent"><?php esc_html_e('Tiêu chuẩn Nội dung', 'yani-content'); ?></p>
                <p class="home-standards__desc">
                    <?php esc_html_e('Trong bối cảnh nội dung AI ngày càng phổ biến, chúng tôi tập trung vào chất lượng, tính chính xác và trải nghiệm người đọc để nội dung thực sự mang lại giá trị dài hạn cho doanh nghiệp.', 'yani-content'); ?>
                </p>
            </div>

            <div class="home-standards__grid">
                <div class="home-standards__card" id="standard-editing">
                    <div class="home-standards__card-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/content-standard-icon-1.svg" alt="">
                    </div>
                    <div class="home-standards__card-body">
                        <p class="home-standards__card-subtitle"><?php esc_html_e('Biên tập đa tầng', 'yani-content'); ?></p>
                        <h4 class="home-standards__card-title"><?php esc_html_e('Biên tập', 'yani-content'); ?></h4>
                        <p class="home-standards__card-badge"><?php esc_html_e('Có kiểm duyệt & nghiệm thu', 'yani-content'); ?></p>
                        <p class="home-standards__card-desc"><?php esc_html_e('Mỗi bài viết đều được rà soát về cấu trúc SEO và nội dung chuyên môn, đảm bảo dễ đọc, đúng ngữ cảnh và phù hợp ngành.', 'yani-content'); ?></p>
                    </div>
                </div>

                <div class="home-standards__card" id="standard-content">
                    <div class="home-standards__card-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/content-standard-icon-2.svg" alt="">
                    </div>
                    <div class="home-standards__card-body">
                        <p class="home-standards__card-subtitle"><?php esc_html_e('Tập trung Search Intent', 'yani-content'); ?></p>
                        <h4 class="home-standards__card-title"><?php esc_html_e('Nội dung', 'yani-content'); ?></h4>
                        <p class="home-standards__card-badge"><?php esc_html_e('Không đạo văn, không nội dung rác', 'yani-content'); ?></p>
                        <p class="home-standards__card-desc"><?php esc_html_e('Nội dung được xây dựng dựa trên câu hỏi và nhu cầu thực tế của người tìm kiếm, tránh viết lan man hay nhồi nhét từ khóa.', 'yani-content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROCESS SECTION ===== -->
    <section class="home-process" id="home-process">
        <div class="container">
            <div class="home-process__header">
                <p class="home-process__accent"><?php esc_html_e('Quy trình làm việc', 'yani-content'); ?></p>
                <p class="home-process__desc">
                    <?php esc_html_e('Chúng tôi triển khai nội dung theo quy trình rõ ràng, có người chịu trách nhiệm ở từng bước, tập trung vào hiệu quả SEO và khả năng tạo lead, thay vì chỉ xuất bản bài viết theo cảm tính.', 'yani-content'); ?>
                </p>
            </div>

            <div class="home-process__timeline">
                <div class="home-process__step" id="process-step-01">
                    <span class="home-process__step-number">01</span>
                    <div class="home-process__step-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/process-icon-1.svg" alt="">
                    </div>
                    <div class="home-process__step-content">
                        <h4 class="home-process__step-title"><?php esc_html_e('Nghiên cứu & định hướng nội dung', 'yani-content'); ?></h4>
                        <p class="home-process__step-desc"><?php esc_html_e('Phân tích nhu cầu tìm kiếm, đối thủ và nội dung hiện có của website để xác định chủ đề cần làm trước, tránh viết lan man hoặc trùng lặp.', 'yani-content'); ?></p>
                    </div>
                </div>

                <div class="home-process__step" id="process-step-02">
                    <span class="home-process__step-number">02</span>
                    <div class="home-process__step-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/process-icon-2.svg" alt="">
                    </div>
                    <div class="home-process__step-content">
                        <h4 class="home-process__step-title"><?php esc_html_e('Xây dựng bộ từ khóa ưu tiên', 'yani-content'); ?></h4>
                        <p class="home-process__step-desc"><?php esc_html_e('Lựa chọn từ khóa dựa trên mức độ liên quan đến dịch vụ, khả năng chuyển đổi và giai đoạn ra quyết định của người tìm kiếm.', 'yani-content'); ?></p>
                    </div>
                </div>

                <div class="home-process__step" id="process-step-03">
                    <span class="home-process__step-number">03</span>
                    <div class="home-process__step-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/process-icon-3.svg" alt="">
                    </div>
                    <div class="home-process__step-content">
                        <h4 class="home-process__step-title"><?php echo esc_html__('Sản xuất &', 'yani-content'); ?><br><?php echo esc_html__('biên tập nội dung', 'yani-content'); ?></h4>
                        <p class="home-process__step-desc"><?php esc_html_e('Nội dung được viết dựa trên outline rõ ràng, biên tập về chuyên môn và cấu trúc SEO, đảm bảo dễ đọc, đúng ngữ cảnh và phù hợp ngành.', 'yani-content'); ?></p>
                    </div>
                </div>

                <div class="home-process__step" id="process-step-04">
                    <span class="home-process__step-number">04</span>
                    <div class="home-process__step-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/process-icon-4.svg" alt="">
                    </div>
                    <div class="home-process__step-content">
                        <h4 class="home-process__step-title"><?php esc_html_e('Theo dõi, báo cáo & tối ưu', 'yani-content'); ?></h4>
                        <p class="home-process__step-desc"><?php esc_html_e('Theo dõi hiệu quả nội dung dựa trên traffic, hành vi người dùng và tín hiệu chuyển đổi; cập nhật và tối ưu định kỳ theo dữ liệu thực tế.', 'yani-content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== BLOG SECTION ===== -->
    <section class="home-blog" id="home-blog">
        <div class="container">
            <div class="home-blog__header">
                <div class="home-blog__header-left">
                    <p class="home-blog__accent"><?php esc_html_e('Bài viết mới về Content SEO & UX', 'yani-content'); ?></p>
                    <h2 class="home-blog__title"><?php esc_html_e('GÓC NHÌN CHUYÊN GIA', 'yani-content'); ?></h2>
                    <p class="home-blog__desc">
                        <?php esc_html_e('Tổng hợp các phân tích ngắn, dễ áp dụng cho doanh nghiệp: chọn mức đầu tư nội dung, tối ưu intent, và giảm rủi ro "viết xong để đó".', 'yani-content'); ?>
                    </p>
                </div>
                <a href="#" class="home-blog__view-all" id="link-all-blog">
                    <?php esc_html_e('xem toàn bộ bài viết', 'yani-content'); ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-blog.svg" alt="">
                </a>
            </div>

            <div class="home-blog__grid">
                <div class="home-blog__card" id="blog-card-1">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/blog-card-img-1.svg" alt="" class="home-blog__card-img">
                    <div class="home-blog__card-body">
                        <h3 class="home-blog__card-title"><?php esc_html_e('Cách chọn mức giá viết bài chuẩn SEO để không "mua sai"', 'yani-content'); ?></h3>
                        <p class="home-blog__card-desc"><?php esc_html_e('Checklist chọn gói theo mục tiêu: traffic – lead – branding. Tránh phí ẩn và giảm chi phí sửa lại.', 'yani-content'); ?></p>
                        <a href="#" class="home-blog__card-link">
                            <?php esc_html_e('ĐỌC BÀI', 'yani-content'); ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                        </a>
                    </div>
                </div>

                <div class="home-blog__card" id="blog-card-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/blog-card-img-2.svg" alt="" class="home-blog__card-img">
                    <div class="home-blog__card-body">
                        <h3 class="home-blog__card-title"><?php esc_html_e('Nội dung "người thật" khác gì nội dung tổng hợp?', 'yani-content'); ?></h3>
                        <p class="home-blog__card-desc"><?php esc_html_e('Dấu hiệu nhận biết bài có insight, ví dụ sát ngành và tạo tin tưởng — nhất là B2B/YMYL.', 'yani-content'); ?></p>
                        <a href="#" class="home-blog__card-link">
                            <?php esc_html_e('ĐỌC BÀI', 'yani-content'); ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                        </a>
                    </div>
                </div>

                <div class="home-blog__card" id="blog-card-3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/blog-card-img-3.svg" alt="" class="home-blog__card-img">
                    <div class="home-blog__card-body">
                        <h3 class="home-blog__card-title"><?php esc_html_e('5 thay đổi UX nhỏ giúp bài viết tăng thời gian đọc', 'yani-content'); ?></h3>
                        <p class="home-blog__card-desc"><?php esc_html_e('Tối ưu bố cục và điều hướng CTA giúp tăng trải nghiệm đọc cho người dùng.', 'yani-content'); ?></p>
                        <a href="#" class="home-blog__card-link">
                            <?php esc_html_e('ĐỌC BÀI', 'yani-content'); ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="home-cta" id="home-cta">
        <div class="container">
            <div class="home-cta__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/cta-icon.svg" alt="" aria-hidden="true">
            </div>
            <h2 class="home-cta__title-white"><?php esc_html_e('Đừng để Website đánh mất', 'yani-content'); ?></h2>
            <p class="home-cta__title-gradient"><?php esc_html_e('Lợi thế Cạnh tranh', 'yani-content'); ?></p>
            <p class="home-cta__desc">
                <?php esc_html_e('Đối thủ đang xây dựng Authority mỗi ngày. Hãy bắt đầu ngay hôm nay để dẫn đầu thị trường ngách của bạn.', 'yani-content'); ?>
            </p>

            <div class="home-cta__actions">
                <a href="#" class="home-cta__btn-primary" id="btn-cta-consult"><?php esc_html_e('Đăng ký tư vấn chiến lược', 'yani-content'); ?></a>
                <a href="#" class="home-cta__btn-zalo" id="btn-cta-zalo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/cta-zalo-btn.svg" alt="<?php esc_attr_e('Xem quy trình và bảng giá', 'yani-content'); ?>">
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
