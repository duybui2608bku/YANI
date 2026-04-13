<?php
/**
 * Template Name: Dịch Vụ
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
$t = get_template_directory_uri();
$img = $t . '/assets/images/service';
?>

<main id="primary" class="site-main service-page">

    <!-- Background gradient vectors -->
    <div class="service-bgr-banggia" aria-hidden="true">
        <img src="<?php echo $img; ?>/bgr-vector-1.svg" class="service-bgr-banggia__v1" alt="">
        <img src="<?php echo $img; ?>/bgr-vector-2.svg" class="service-bgr-banggia__v2" alt="">
        <img src="<?php echo $img; ?>/bgr-subtract.svg" class="service-bgr-banggia__subtract" alt="">
    </div>

    <!-- ===== HERO SECTION ===== -->
    <section class="service-hero" id="service-hero">
        <div class="container">
            <div class="service-hero__infinity" aria-hidden="true">
                <img src="<?php echo $img; ?>/infinity-bg-56586a.png" alt="">
            </div>

            <p class="service-hero__breadcrumb"><?php esc_html_e('DỊCH VỤ VIẾT CONTENT CHUẨN SEO • CHO DOANH NGHIỆP TP.HCM', 'yani-content'); ?></p>

            <h1 class="service-hero__title">
                <span class="service-hero__title-line1"><?php esc_html_e('Dịch vụ viết content chuẩn SEO', 'yani-content'); ?></span>
                <span class="service-hero__title-line2 text-gradient"><?php esc_html_e('Đúng Intent, tăng khách tiềm năng', 'yani-content'); ?></span>
            </h1>

            <p class="service-hero__desc">
                <?php echo esc_html('Chúng tôi không "viết cho đủ số bài". Yani xây hệ thống nội dung có cấu trúc theo hành trình khách hàng: chọn đúng chủ đề, viết đúng vấn đề, tăng niềm tin và dẫn người đọc đến bước liên hệ. Phù hợp doanh nghiệp B2B/SME ở TP.HCM cần tăng trưởng bền vững trong lộ trình 6–12 tháng.'); ?>
            </p>

            <div class="service-hero__actions">
                <a href="<?php echo esc_url(home_url('/bang-gia/')); ?>" class="btn btn-primary" id="btn-xem-goi">
                    <?php esc_html_e('Xem gói triển khai theo tháng', 'yani-content'); ?>
                </a>
                <a href="#" class="btn btn-zalo-ghost" id="btn-zalo-hero">
                    <span><?php esc_html_e('Nhắn zalo để nhận báo giá', 'yani-content'); ?></span>
                    <!-- <img src="<?php echo $img; ?>/zalo-icon.svg" alt="Zalo" class="btn-zalo-ghost__icon"> -->
                </a>
            </div>

            <p class="service-hero__note"><?php esc_html_e('Có duyệt dàn ý trước khi viết • Biên tập 2 vòng • Có hợp đồng & hóa đơn VAT', 'yani-content'); ?></p>
        </div>
    </section>

    <!-- ===== GÓI VIẾT CONTENT SEO SECTION ===== -->
    <section class="service-packages" id="service-packages">
        <div class="container">
            <div class="service-packages__header">
                <h2 class="service-packages__title">
                    <span class="service-packages__title-white"><?php esc_html_e('Gói viết content SEO', 'yani-content'); ?></span>
                    <span class="service-packages__title-gradient text-gradient"><?php esc_html_e('theo tháng cho doanh nghiệp', 'yani-content'); ?></span>
                </h2>
                <p class="service-packages__desc"><?php echo esc_html('Thiết kế theo độ cạnh tranh ngành, nguồn lực đội marketing và mục tiêu tăng trưởng 6–12 tháng. Trọng tâm là cụm chủ đề, bài trụ cột và liên kết nội bộ để tăng hiệu quả tìm kiếm & chuyển đổi.'); ?></p>
            </div>

            <div class="service-packages__grid">

                <!-- Gói Khởi động -->
                <div class="service-packages__card" id="pkg-starter">
                    <div class="service-packages__card-inner">
                        <span class="service-packages__badge"><?php esc_html_e('Gói Khởi động', 'yani-content'); ?></span>
                        <p class="service-packages__card-subtitle"><?php esc_html_e('Phù hợp doanh nghiệp mới làm SEO hoặc website chưa có nền nội dung rõ ràng.', 'yani-content'); ?></p>

                        <div class="service-packages__card-dots">
                            <img src="<?php echo $img; ?>/pkg-starter-dots.svg" alt="" aria-hidden="true">
                        </div>

                        <div class="service-packages__card-features">
                            <span class="service-packages__card-feature service-packages__card-feature--left"><?php esc_html_e('Duyệt dàn ý trước khi viết', 'yani-content'); ?></span>
                            <span class="service-packages__card-feature service-packages__card-feature--center"><?php esc_html_e('Biên tập 2 vòng', 'yani-content'); ?></span>
                            <span class="service-packages__card-feature service-packages__card-feature--right"><?php esc_html_e('Báo cáo theo tháng', 'yani-content'); ?></span>
                        </div>

                        <div class="service-packages__card-separator"></div>

                        <h3 class="service-packages__card-price"><?php esc_html_e('Liên hệ', 'yani-content'); ?></h3>
                        <p class="service-packages__card-budget"><?php esc_html_e('(Ngân sách phổ biến tại TP.HCM: 10–15 triệu/tháng)', 'yani-content'); ?></p>

                        <div class="service-packages__card-steps">
                            <img src="<?php echo $img; ?>/pkg-starter-steps.svg" alt="" class="service-packages__card-steps-icon" aria-hidden="true">
                        </div>

                        <ul class="service-packages__card-list">
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-1.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Nghiên cứu từ khóa theo ý định tìm kiếm & giai đoạn ra quyết định', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-2.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('2–4 bài nền tảng (bài trụ cột hoặc bài giới thiệu dịch vụ)', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-3.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Viết & đăng bài chuẩn SEO lên website (tối ưu đọc dễ, rõ ý)', 'yani-content'); ?></span>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-ghost-card" id="btn-zalo-starter">
                            <span><?php esc_html_e('Nhắn Zalo tư vấn gói phù hợp', 'yani-content'); ?></span>
                        </a>
                    </div>
                </div>

                <!-- Gói Tăng trưởng (Phổ biến nhất) -->
                <div class="service-packages__card service-packages__card--featured" id="pkg-growth">
                    <div class="service-packages__card-inner">
                        <div class="service-packages__popular-badge"><?php esc_html_e('Phổ biến nhất', 'yani-content'); ?></div>

                        <span class="service-packages__badge"><?php esc_html_e('Gói Tăng trưởng', 'yani-content'); ?></span>
                        <p class="service-packages__card-subtitle"><?php esc_html_e('Dành cho doanh nghiệp đã làm SEO, cần mở rộng cụm chủ đề và tăng uy tín theo ngành.', 'yani-content'); ?></p>

                        <div class="service-packages__card-dots">
                            <img src="<?php echo $img; ?>/pkg-growth-dots.svg" alt="" aria-hidden="true">
                        </div>

                        <div class="service-packages__card-features">
                            <span class="service-packages__card-feature service-packages__card-feature--left"><?php esc_html_e('Duyệt dàn ý trước khi viết', 'yani-content'); ?></span>
                            <span class="service-packages__card-feature service-packages__card-feature--center"><?php esc_html_e('Biên tập 2 vòng', 'yani-content'); ?></span>
                            <span class="service-packages__card-feature service-packages__card-feature--right"><?php esc_html_e('Có định hướng nội dung theo dữ liệu', 'yani-content'); ?></span>
                        </div>

                        <div class="service-packages__card-separator"></div>

                        <h3 class="service-packages__card-price"><?php esc_html_e('Liên hệ', 'yani-content'); ?></h3>
                        <p class="service-packages__card-budget"><?php esc_html_e('(Ngân sách phổ biến tại TP.HCM: 15–20+ triệu/tháng)', 'yani-content'); ?></p>

                        <div class="service-packages__card-steps">
                            <img src="<?php echo $img; ?>/pkg-starter-steps.svg" alt="" class="service-packages__card-steps-icon" aria-hidden="true">
                        </div>

                        <ul class="service-packages__card-list">
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-1.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('5–10 bài chuyên sâu / tháng', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-2.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Lập kế hoạch cụm chủ đề & liên kết nội bộ theo hành trình khách hàng.', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-3.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Làm mới nội dung cũ định kỳ để giữ thứ hạng và tăng chuyển đổi', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-4.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Phân tích khoảng trống nội dung & đề xuất chủ đề ưu tiên', 'yani-content'); ?></span>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-cta-featured" id="btn-featured-pkg">
                            <?php esc_html_e('Nhận đề xuất triển khai', 'yani-content'); ?>
                        </a>
                    </div>
                </div>

                <!-- Gói Dẫn đầu -->
                <div class="service-packages__card" id="pkg-lead">
                    <div class="service-packages__card-inner">
                        <span class="service-packages__badge"><?php esc_html_e('Gói Dẫn đầu', 'yani-content'); ?></span>
                        <p class="service-packages__card-subtitle"><?php esc_html_e('Cho ngành cạnh tranh cao: Y tế, Bất động sản, Luật, Tài chính.', 'yani-content'); ?></p>

                        <div class="service-packages__card-dots">
                            <img src="<?php echo $img; ?>/pkg-lead-dots.svg" alt="" aria-hidden="true">
                        </div>

                        <div class="service-packages__card-features">
                            <span class="service-packages__card-feature service-packages__card-feature--left"><?php esc_html_e('Kiểm duyệt chuyên môn', 'yani-content'); ?></span>
                            <span class="service-packages__card-feature service-packages__card-feature--center"><?php esc_html_e('Chuẩn tin cậy cao', 'yani-content'); ?></span>
                            <span class="service-packages__card-feature service-packages__card-feature--right"><?php esc_html_e('Quản lý tiến độ rõ ràng', 'yani-content'); ?></span>
                        </div>

                        <div class="service-packages__card-separator"></div>

                        <h3 class="service-packages__card-price"><?php esc_html_e('Liên hệ', 'yani-content'); ?></h3>
                        <p class="service-packages__card-budget"><?php esc_html_e('(Triển khai theo dự án / quy mô lớn)', 'yani-content'); ?></p>

                        <div class="service-packages__card-steps">
                            <img src="<?php echo $img; ?>/pkg-starter-steps.svg" alt="" class="service-packages__card-steps-icon" aria-hidden="true">
                        </div>

                        <ul class="service-packages__card-list">
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-1.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('10–15+ bài chuyên sâu / tháng', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-2.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Nội dung chuẩn tin cậy cao, trích nguồn khi cần, hạn chế rủi ro sai lệch', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-3.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Có người phụ trách nội dung & SEO riêng', 'yani-content'); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo $img; ?>/check-circle-4.svg" alt="" aria-hidden="true">
                                <span><?php esc_html_e('Báo cáo hiệu suất & định hướng tối ưu hàng tháng', 'yani-content'); ?></span>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-ghost-card" id="btn-zalo-lead">
                            <span><?php esc_html_e('Nhắn Zalo tư vấn gói phù hợp', 'yani-content'); ?></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== VÌ SAO NỘI DUNG WEBSITE KHÓ TẠO HIỆU QUẢ ===== -->
    <section class="service-problems" id="service-problems">
        <div class="container">
            <div class="service-problems__header">
                <h2 class="service-problems__title">
                    <span class="service-problems__title-white"><?php esc_html_e('Vì sao nội dung website', 'yani-content'); ?></span>
                    <span class="service-problems__title-gradient text-gradient"><?php esc_html_e('khó tạo hiệu quả?', 'yani-content'); ?></span>
                </h2>
                <p class="service-problems__desc"><?php echo esc_html('Nhiều doanh nghiệp đầu tư đều đặn nhưng lượng truy cập không đúng, người đọc không ở lại và không phát sinh liên hệ. Dưới đây là những nguyên nhân phổ biến.'); ?></p>
            </div>

            <div class="service-problems__grid">
                <div class="service-problems__card">
                    <div class="service-problems__card-inner">
                        <img src="<?php echo $img; ?>/warning-icon.svg" alt="" class="service-problems__card-icon" aria-hidden="true">
                        <h4 class="service-problems__card-title"><?php esc_html_e('Nội dung thiên về từ khóa', 'yani-content'); ?></h4>
                        <p class="service-problems__card-desc"><?php esc_html_e('Tối ưu máy móc, tập trung từ khóa nhưng thiếu giá trị thực. Kết quả là thời gian ở lại thấp, khó giữ thứ hạng ổn định và khó chuyển đổi.', 'yani-content'); ?></p>
                    </div>
                </div>
                <div class="service-problems__card">
                    <div class="service-problems__card-inner">
                        <img src="<?php echo $img; ?>/warning-icon-2.svg" alt="" class="service-problems__card-icon" aria-hidden="true">
                        <h4 class="service-problems__card-title"><?php esc_html_e('Thiếu chiều sâu chuyên môn', 'yani-content'); ?></h4>
                        <p class="service-problems__card-desc"><?php esc_html_e('Nội dung mô tả chung, thiếu ví dụ và phân tích theo bối cảnh. Website khó thể hiện năng lực, đặc biệt với doanh nghiệp B2B có chu kỳ ra quyết định dài.', 'yani-content'); ?></p>
                    </div>
                </div>
                <div class="service-problems__card">
                    <div class="service-problems__card-inner">
                        <img src="<?php echo $img; ?>/warning-icon-3.svg" alt="" class="service-problems__card-icon" aria-hidden="true">
                        <h4 class="service-problems__card-title"><?php esc_html_e('Thiếu định hướng nội dung', 'yani-content'); ?></h4>
                        <p class="service-problems__card-desc"><?php esc_html_e('Viết rời rạc, không có cụm chủ đề và liên kết nội bộ rõ ràng khiến website khó xây "uy tín theo ngành" và không hỗ trợ tốt cho SEO dài hạn.', 'yani-content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CÁCH CHÚNG TÔI TRIỂN KHAI ===== -->
    <section class="service-approach" id="service-approach">
        <div class="container">
            <div class="service-approach__badge">
                <span><?php esc_html_e('CÁCH CHÚNG TÔI TRIỂN KHAI', 'yani-content'); ?></span>
            </div>

            <h2 class="service-approach__title text-gradient"><?php esc_html_e('Dịch vụ viết content chuẩn SEO', 'yani-content'); ?></h2>
            <h3 class="service-approach__subtitle"><?php esc_html_e('bám sát ý định tìm kiếm (tập trung chuyển đổi)', 'yani-content'); ?></h3>
            <p class="service-approach__desc"><?php echo esc_html('Nội dung được xây dựng để thỏa mãn cả hai: công cụ tìm kiếm (cấu trúc, kỹ thuật) và khách hàng (giá trị, ra quyết định).'); ?></p>
        </div>
    </section>

    <!-- ===== FEATURE + STANDARD (2-column layout) ===== -->
    <section class="service-features-standard" id="service-features">
        <div class="container">
            <div class="service-fs__grid">
                <!-- LEFT: 3 Feature Cards stacked -->
                <div class="service-fs__left">
                    <div class="service-features__card" id="feature-intent">
                        <div class="service-features__card-bg">
                            <img src="<?php echo $img; ?>/phan-tich-nhu-cau.png" alt="" aria-hidden="true">
                        </div>
                        <div class="service-features__card-mask">
                            <img src="<?php echo $img; ?>/feature-mask-1.svg" alt="" aria-hidden="true">
                        </div>
                        <div class="service-features__card-content">
                            <h5 class="service-features__card-title"><?php esc_html_e('Phân tích nhu cầu tìm kiếm theo từng giai đoạn', 'yani-content'); ?></h5>
                            <p class="service-features__card-desc"><?php echo esc_html('Trong dịch vụ viết content chuẩn SEO, chúng tôi không chọn chủ đề theo cảm tính. Mỗi từ khóa được phân tích để hiểu người tìm kiếm đang muốn gì: tìm hiểu, so sánh, hay cần báo giá — từ đó chọn góc viết và cấu trúc phù hợp.'); ?></p>
                        </div>
                    </div>

                    <div class="service-features__card" id="feature-tone">
                        <div class="service-features__card-bg">
                            <img src="<?php echo $img; ?>/bg-van-phong-chuyen-nghiep.png" alt="" aria-hidden="true">
                        </div>
                        <div class="service-features__card-mask">
                            <img src="<?php echo $img; ?>/feature-mask-2.svg" alt="" aria-hidden="true">
                        </div>
                        <div class="service-features__card-content">
                            <h5 class="service-features__card-title"><?php esc_html_e('Văn phong chuyên nghiệp – đúng ngành, đúng người ra quyết định', 'yani-content'); ?></h5>
                            <p class="service-features__card-desc"><?php echo esc_html('Bài viết được triển khai theo ngôn ngữ doanh nghiệp: rõ ràng, có dẫn chứng khi cần, phù hợp với người đọc như trưởng phòng marketing, phụ trách SEO và ban lãnh đạo.'); ?></p>
                        </div>
                    </div>

                    <div class="service-features__card" id="feature-cluster">
                        <div class="service-features__card-bg">
                            <img src="<?php echo $img; ?>/bg-bai-tru-cot.png" alt="" aria-hidden="true">
                        </div>
                        <div class="service-features__card-mask">
                            <img src="<?php echo $img; ?>/feature-mask-3.svg" alt="" aria-hidden="true">
                        </div>
                        <div class="service-features__card-content">
                            <h5 class="service-features__card-title"><?php esc_html_e('Cụm chủ đề & bài trụ cột cho tăng trưởng dài hạn', 'yani-content'); ?></h5>
                            <p class="service-features__card-desc"><?php echo esc_html('Nội dung được tổ chức theo bài trụ cột và cụm bài liên quan, kết hợp liên kết nội bộ theo ngữ nghĩa để vừa tăng hiệu quả tìm kiếm, vừa dẫn dắt người đọc đi sâu và tăng tỷ lệ liên hệ.'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Standard/Checklist Box -->
                <div class="service-fs__right">
                    <div class="service-standard__card">
                        <div class="service-standard__card-bg"></div>
                        <h4 class="service-standard__title-label"><?php esc_html_e('Một bài viết tiêu chuẩn trong dịch vụ viết bài SEO gồm:', 'yani-content'); ?></h4>

                        <div class="service-standard__separator"></div>

                        <div class="service-standard__list">
                            <img src="<?php echo $img; ?>/standard-checklist.svg" alt="" class="service-standard__checklist-icon" aria-hidden="true">
                            <ul>
                                <li><?php esc_html_e('Độ dài linh hoạt 1.500 – 3.000+ từ (tùy độ cạnh tranh & độ sâu chủ đề)', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Nghiên cứu từ khóa chính, từ khóa liên quan và ngữ cảnh tìm kiếm', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Tối ưu cấu trúc tiêu đề (H1 – H2 – H3) rõ ý, dễ đọc', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Liên kết nội bộ theo cụm chủ đề để tăng độ bao phủ và điều hướng người đọc', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Biên tập 2 vòng: kiểm tra SEO & rà soát nội dung theo ngành', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Tối ưu trải nghiệm đọc: mục lục, gạch đầu dòng, bảng so sánh khi cần', 'yani-content'); ?></li>
                            </ul>
                        </div>

                        <a href="#" class="btn btn-ghost-card" id="btn-standard-cta">
                            <span><?php esc_html_e('Nhận đề xuất nội dung theo ngành', 'yani-content'); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== VÌ SAO DOANH NGHIỆP CHỌN YANI ===== -->
    <section class="service-comparison" id="service-comparison">
        <div class="container">
            <div class="service-comparison__header">
                <h2 class="service-comparison__title">
                    <span><?php esc_html_e('Vì sao doanh nghiệp', 'yani-content'); ?></span>
                    <span class="text-gradient"><?php esc_html_e('chọn Yani Content?', 'yani-content'); ?></span>
                </h2>
                <p class="service-comparison__desc"><?php echo esc_html('Khác biệt không nằm ở "viết hay", mà nằm ở tư duy triển khai, kiểm soát rủi ro và khả năng tạo giá trị dài hạn cho website doanh nghiệp B2B/SME tại TP.HCM.'); ?></p>
            </div>

            <div class="service-comparison__table">
                <div class="service-comparison__table-header">
                    <span class="service-comparison__table-col1"><?php esc_html_e('Tiêu chí so sánh', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col2 text-gradient"><?php esc_html_e('Yani Content', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col3"><?php esc_html_e('Giải pháp viết nội dung đại trà', 'yani-content'); ?></span>
                </div>

                <div class="service-comparison__table-row">
                    <span class="service-comparison__table-col1"><?php esc_html_e('Bám sát nhu cầu tìm kiếm', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col2"><?php esc_html_e('Phân tích ý định tìm kiếm theo hành trình khách hàng B2B', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col3"><?php esc_html_e('Chỉ dựa vào danh sách từ khóa cơ bản', 'yani-content'); ?></span>
                </div>

                <div class="service-comparison__table-row">
                    <span class="service-comparison__table-col1"><?php esc_html_e('Người trực tiếp thực hiện', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col2"><?php esc_html_e('Có người phụ trách nội dung theo ngành, chịu trách nhiệm chất lượng', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col3"><?php esc_html_e('Viết tổng hợp, khó đảm bảo đúng bối cảnh ngành', 'yani-content'); ?></span>
                </div>

                <div class="service-comparison__table-row">
                    <span class="service-comparison__table-col1"><?php esc_html_e('Quy trình kiểm soát chất lượng', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col2"><?php esc_html_e('Duyệt dàn ý trước khi viết + biên tập 2 vòng', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col3"><?php esc_html_e('Không có quy trình kiểm duyệt rõ ràng', 'yani-content'); ?></span>
                </div>

                <div class="service-comparison__table-row">
                    <span class="service-comparison__table-col1"><?php esc_html_e('Trách nhiệm & pháp lý', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col2"><?php esc_html_e('Hợp đồng rõ ràng, xuất hóa đơn VAT, bảo mật nội dung', 'yani-content'); ?></span>
                    <span class="service-comparison__table-col3"><?php esc_html_e('Thỏa thuận rời rạc, khó kiểm soát rủi ro', 'yani-content'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== KHÁCH HÀNG NÓI GÌ ===== -->
    <section class="service-testimonials" id="service-testimonials">
        <div class="container">
            <div class="service-testimonials__header">
                <h2 class="service-testimonials__title">
                    <span class="text-gradient"><?php esc_html_e('Khách hàng nói gì', 'yani-content'); ?></span>
                    <span><?php esc_html_e('về nội dung của Yani?', 'yani-content'); ?></span>
                </h2>
                <p class="service-testimonials__desc"><?php esc_html_e('Một vài phản hồi giả định (mô phỏng) từ doanh nghiệp đang triển khai nội dung theo lộ trình dài hạn.', 'yani-content'); ?></p>
            </div>

            <div class="service-testimonials__stars">
                <img src="<?php echo $img; ?>/testimonial-stars.svg" alt="" aria-hidden="true">
            </div>

            <div class="service-testimonials__grid">
                <!-- Testimonial 1 -->
                <div class="service-testimonials__card" id="testimonial-1">
                    <div class="service-testimonials__card-inner">
                        <div class="service-testimonials__card-quote">
                            <img src="<?php echo $img; ?>/quote-stars.svg" alt="" class="service-testimonials__card-stars" aria-hidden="true">
                            <div class="service-testimonials__card-tags">
                                <span class="service-testimonials__tag"><?php esc_html_e('Duyệt dàn ý', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('Tăng liên hệ', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('B2B', 'yani-content'); ?></span>
                            </div>
                            <p class="service-testimonials__card-text"><?php echo esc_html('"Điểm mình thích là làm rất rõ dàn ý và hướng triển khai trước khi viết. Nội dung không lan man, bám đúng vấn đề khách hàng hay hỏi, nên đội sales dùng lại được để tư vấn. Sau vài tuần, thời gian đọc và lượt liên hệ tăng thấy rõ."'); ?></p>
                        </div>
                        <div class="service-testimonials__card-author">
                            <div class="service-testimonials__avatar"></div>
                            <div class="service-testimonials__author-info">
                                <h6 class="service-testimonials__author-name"><?php esc_html_e('Anh Minh T.', 'yani-content'); ?></h6>
                                <p class="service-testimonials__author-role"><?php esc_html_e('Trưởng phòng Marketing', 'yani-content'); ?><br><?php esc_html_e('Doanh nghiệp B2B (TP.HCM)', 'yani-content'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="service-testimonials__card" id="testimonial-2">
                    <div class="service-testimonials__card-inner">
                        <div class="service-testimonials__card-quote">
                            <img src="<?php echo $img; ?>/quote-stars.svg" alt="" class="service-testimonials__card-stars" aria-hidden="true">
                            <div class="service-testimonials__card-tags">
                                <span class="service-testimonials__tag"><?php esc_html_e('Cấu trúc bài', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('FAQ', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('Thương hiệu', 'yani-content'); ?></span>
                            </div>
                            <p class="service-testimonials__card-text"><?php echo esc_html('"Trước đây bài nhiều nhưng đọc không ra \'gu\' thương hiệu. Bên Yani làm lại cấu trúc bài, thêm phần so sánh/FAQ đúng kiểu khách hay hỏi. Nội dung nhìn chuyên nghiệp hơn hẳn, website cũng dễ đọc và giữ người dùng lâu hơn."'); ?></p>
                        </div>
                        <div class="service-testimonials__card-author">
                            <div class="service-testimonials__avatar"></div>
                            <div class="service-testimonials__author-info">
                                <h6 class="service-testimonials__author-name"><?php esc_html_e('Chị Hương N.', 'yani-content'); ?></h6>
                                <p class="service-testimonials__author-role"><?php esc_html_e('Quản lý Website', 'yani-content'); ?><br><?php esc_html_e('Ngành Nội thất (TP.HCM)', 'yani-content'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="service-testimonials__card" id="testimonial-3">
                    <div class="service-testimonials__card-inner">
                        <div class="service-testimonials__card-quote">
                            <img src="<?php echo $img; ?>/quote-stars.svg" alt="" class="service-testimonials__card-stars" aria-hidden="true">
                            <div class="service-testimonials__card-tags">
                                <span class="service-testimonials__tag"><?php esc_html_e('Lộ trình', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('Báo cáo', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('Chuyển đổi', 'yani-content'); ?></span>
                            </div>
                            <p class="service-testimonials__card-text"><?php echo esc_html('"Mình không rành SEO, nhưng bên Yani giải thích rất rõ: bài nào phục vụ tìm hiểu, bài nào phục vụ so sánh, bài nào dẫn tới liên hệ. Nhờ vậy triển khai theo lộ trình, không viết theo cảm tính. Phần báo cáo cũng dễ hiểu, tập trung vào khách tiềm năng."'); ?></p>
                        </div>
                        <div class="service-testimonials__card-author">
                            <div class="service-testimonials__avatar"></div>
                            <div class="service-testimonials__author-info">
                                <h6 class="service-testimonials__author-name"><?php esc_html_e('Anh Quang D.', 'yani-content'); ?></h6>
                                <p class="service-testimonials__author-role"><?php esc_html_e('Chủ doanh nghiệp', 'yani-content'); ?><br><?php esc_html_e('Dịch vụ B2B (TP.HCM)', 'yani-content'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="service-testimonials__card" id="testimonial-4">
                    <div class="service-testimonials__card-inner">
                        <div class="service-testimonials__card-quote">
                            <img src="<?php echo $img; ?>/quote-stars.svg" alt="" class="service-testimonials__card-stars" aria-hidden="true">
                            <div class="service-testimonials__card-tags">
                                <span class="service-testimonials__tag"><?php esc_html_e('Dễ đọc', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('Tăng đăng ký', 'yani-content'); ?></span>
                                <span class="service-testimonials__tag"><?php esc_html_e('Quy trình', 'yani-content'); ?></span>
                            </div>
                            <p class="service-testimonials__card-text"><?php echo esc_html('"Bài viết có điểm cộng là dễ đọc, có mục lục, gạch ý rõ, ví dụ sát thực tế. Nhờ cách trình bày đó, người đọc ở lại lâu hơn và tỷ lệ chuyển từ đọc sang để lại thông tin tốt hơn. Team mình cũng học được cách làm khung nội dung để tự triển khai về sau."'); ?></p>
                        </div>
                        <div class="service-testimonials__card-author">
                            <div class="service-testimonials__avatar"></div>
                            <div class="service-testimonials__author-info">
                                <h6 class="service-testimonials__author-name"><?php esc_html_e('Chị Linh P.', 'yani-content'); ?></h6>
                                <p class="service-testimonials__author-role"><?php esc_html_e('Trưởng nhóm Nội dung', 'yani-content'); ?><br><?php esc_html_e('Ngành Giáo dục (TP.HCM)', 'yani-content'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="service-testimonials__disclaimer"><?php esc_html_e('*Các đánh giá trên là nội dung giả định để minh họa cách trình bày phản hồi.', 'yani-content'); ?></p>

            <a href="#" class="btn btn-primary" id="btn-testimonial-cta">
                <?php esc_html_e('Nhận tư vấn nội dung phù hợp', 'yani-content'); ?>
            </a>
        </div>
    </section>

    <!-- ===== THẮC MẮC THƯỜNG GẶP ===== -->
    <section class="service-faq" id="service-faq">
        <div class="container">
            <h2 class="service-faq__title text-gradient"><?php esc_html_e('Thắc mắc thường gặp', 'yani-content'); ?></h2>
            <p class="service-faq__desc"><?php esc_html_e('Những điều doanh nghiệp ở TP.HCM thường hỏi trước khi hợp tác triển khai content SEO.', 'yani-content'); ?></p>

            <div class="service-faq__list">
                <div class="service-faq__item" id="faq-1">
                    <button class="service-faq__question" aria-expanded="false">
                        <span><?php esc_html_e('Tôi có được duyệt dàn ý trước khi viết không?', 'yani-content'); ?></span>
                        <img src="<?php echo $img; ?>/faq-toggle.svg" alt="" class="service-faq__toggle" aria-hidden="true">
                    </button>
                    <div class="service-faq__answer">
                        <p><?php esc_html_e('Có. Mỗi bài viết đều được duyệt dàn ý trước khi triển khai. Bạn có thể góp ý, chỉnh sửa hướng viết trước khi chúng tôi bắt đầu.', 'yani-content'); ?></p>
                    </div>
                </div>

                <div class="service-faq__item" id="faq-2">
                    <button class="service-faq__question" aria-expanded="false">
                        <span><?php esc_html_e('Chính sách chỉnh sửa và bảo hành như thế nào?', 'yani-content'); ?></span>
                        <img src="<?php echo $img; ?>/faq-toggle.svg" alt="" class="service-faq__toggle" aria-hidden="true">
                    </button>
                    <div class="service-faq__answer">
                        <p><?php esc_html_e('Chúng tôi hỗ trợ chỉnh sửa miễn phí trong vòng 7 ngày sau bàn giao. Bài viết được biên tập 2 vòng trước khi giao.', 'yani-content'); ?></p>
                    </div>
                </div>

                <div class="service-faq__item service-faq__item--open" id="faq-3">
                    <button class="service-faq__question" aria-expanded="true">
                        <span><?php esc_html_e('Bên bạn có am hiểu ngành hẹp (ví dụ: hóa chất, cơ khí) không?', 'yani-content'); ?></span>
                        <img src="<?php echo $img; ?>/faq-toggle-open.svg" alt="" class="service-faq__toggle" aria-hidden="true">
                    </button>
                    <div class="service-faq__answer">
                        <p><?php esc_html_e('Có. Chúng tôi bắt đầu bằng nghiên cứu sản phẩm/dịch vụ, cách khách hàng tìm kiếm và cách đối thủ đang triển khai. Khi cần, chúng tôi tham vấn chuyên môn để rà soát thuật ngữ và dữ liệu trước khi bàn giao.', 'yani-content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CAM KẾT CHẤT LƯỢNG ===== -->
    <section class="service-commitment" id="service-commitment">
        <div class="container">
            <h2 class="service-commitment__title text-gradient"><?php esc_html_e('Cam kết chất lượng nội dung', 'yani-content'); ?></h2>
            <p class="service-commitment__desc"><?php echo esc_html('Mỗi bài viết được kiểm soát chặt về chuyên môn, độ chính xác và hiệu quả tìm kiếm để bảo vệ uy tín thương hiệu doanh nghiệp.'); ?></p>

            <div class="service-commitment__grid">
                <div class="service-commitment__card" id="commitment-editorial">
                    <div class="service-commitment__card-content">
                        <div class="service-commitment__card-left">
                            <h4 class="service-commitment__card-label"><?php esc_html_e('Tiêu chuẩn', 'yani-content'); ?></h4>
                            <h4 class="service-commitment__card-title"><?php esc_html_e('biên tập nội dung', 'yani-content'); ?></h4>
                        </div>
                        <ul class="service-commitment__card-list">
                            <li><?php esc_html_e('Nội dung nghiên cứu độc lập, bám vấn đề thật (không sao chép – không xào lại)', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Trích dẫn nguồn uy tín khi cần (cơ quan quản lý, tài liệu chuyên ngành, báo chính thống)', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Văn phong rõ ràng, mạch lạc, phù hợp môi trường doanh nghiệp B2B (tập trung ra quyết định)', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Rà soát thuật ngữ và dữ liệu trước khi bàn giao để hạn chế tối đa sai sót', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Với nội dung nhạy cảm, ưu tiên nguồn tham chiếu chính thống và kiểm tra thông tin kỹ hơn', 'yani-content'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="service-commitment__card" id="commitment-seo">
                    <div class="service-commitment__card-content">
                        <div class="service-commitment__card-left">
                            <h4 class="service-commitment__card-label"><?php esc_html_e('Tiêu chuẩn', 'yani-content'); ?></h4>
                            <h4 class="service-commitment__card-title"><?php esc_html_e('kỹ thuật SEO', 'yani-content'); ?></h4>
                        </div>
                        <ul class="service-commitment__card-list">
                            <li><?php esc_html_e('Tối ưu từ khóa theo ngữ cảnh, đảm bảo tự nhiên và dễ đọc', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Nội dung đáp ứng đúng ý định tìm kiếm: tìm hiểu, so sánh hoặc ra quyết định liên hệ', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Tối ưu cấu trúc trang: tiêu đề mục, mô tả, hình ảnh và dữ liệu hỗ trợ khi cần', 'yani-content'); ?></li>
                            <li><?php esc_html_e('Hiển thị tốt trên di động, ưu tiên trải nghiệm đọc và tốc độ tải trang', 'yani-content'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BOTTOM ===== -->
    <section class="service-cta" id="service-cta">
        <div class="service-cta__bg" aria-hidden="true"></div>
        <div class="container">
            <div class="service-cta__badge">
                <span><?php esc_html_e('Sẵn sàng', 'yani-content'); ?></span>
            </div>

            <h2 class="service-cta__title">
                <span class="service-cta__title-gradient text-gradient"><?php esc_html_e('tăng hiệu quả content SEO', 'yani-content'); ?></span>
                <span class="service-cta__title-sub"><?php esc_html_e('cho doanh nghiệp?', 'yani-content'); ?></span>
            </h2>

            <p class="service-cta__desc"><?php echo esc_html('Nhắn Zalo để nhận đề xuất triển khai mẫu cho website: gợi ý cụm chủ đề theo ngành, 5–10 bài nên ưu tiên và đề xuất tối ưu chuyển đổi để tăng liên hệ.'); ?></p>

            <div class="service-cta__buttons">
                <a href="#" class="btn btn-primary" id="btn-cta-zalo">
                    <?php esc_html_e('Nhắn Zalo nhận tư vấn', 'yani-content'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/bang-gia/')); ?>" class="btn btn-zalo-ghost" id="btn-cta-goi">
                    <span><?php esc_html_e('Xem gói theo tháng', 'yani-content'); ?></span>
                </a>
            </div>

            <p class="service-cta__note"><?php esc_html_e('*Phản hồi trong giờ hành chính.', 'yani-content'); ?></p>
        </div>
    </section>

</main>

<?php
get_footer();
