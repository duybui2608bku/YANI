<?php
/**
 * Template Name: Liên Hệ
 *
 * Contact page template matching Figma design
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main contact-page">

    <!-- ========================================
         HERO SECTION
         ======================================== -->
    <section class="contact-hero" id="contact-hero">
        <div class="container">

            <!-- Title Group -->
            <div class="contact-hero__title-group">
                <h1 class="contact-hero__title">Liên hệ Yani Content</h1>
                <p class="contact-hero__subtitle">
                    Cùng thảo luận xem liệu chiến lược nội dung SEO có phải là mảnh ghép phù hợp cho doanh nghiệp của bạn lúc này.
                </p>
            </div>

            <div class="contact-hero__content">

                <!-- Left Column - Contact Channels -->
                <div class="contact-hero__left">

                    <!-- Kênh liên hệ ưu tiên -->
                    <h2 class="contact-channels__title">Kênh liên hệ ưu tiên</h2>
                    <p class="contact-channels__desc">
                        Với các doanh nghiệp tại Việt Nam, Zalo thường là cách nhanh nhất để làm rõ yêu cầu, tiến độ và ngân sách — tránh việc trao đổi qua lại mất thời gian.
                    </p>

                    <!-- Zalo Channel -->
                    <div class="channel-card" id="channel-zalo">
                        <h3 class="channel-card__title">Zalo (Nhanh nhất)</h3>
                        <p class="channel-card__contact-info">Zalo: 0902.623.078 (Mrs. Janny Anh)</p>
                        <p class="channel-card__note">Chat để nhận báo giá, timeline và tư vấn giải pháp phù hợp.</p>
                        <div class="channel-card__cta">
                            <a href="https://zalo.me/0902623078" class="btn btn-primary" target="_blank" rel="noopener noreferrer" id="btn-zalo-chat">Chat ngay trên Zalo</a>
                        </div>
                    </div>

                    <!-- Email Channel -->
                    <div class="channel-card" id="channel-email">
                        <h3 class="channel-card__title">Email</h3>
                        <a href="mailto:contact@yanicontent.com" class="channel-card__email-link">contact@yanicontent.com</a>
                        <p class="channel-card__response">Chúng tôi phản hồi các yêu cầu phù hợp trong vòng 1 ngày làm việc.</p>
                    </div>

                    <!-- Phù hợp nhất -->
                    <div class="channel-card channel-card--fit" id="channel-fit">
                        <h3 class="channel-card__title">Phù hợp nhất với:</h3>
                        <ul class="fit-list">
                            <li class="fit-list__item">
                                <span class="fit-list__icon"><?php echo yani_get_theme_svg( 'checkmark-1' ); ?></span>
                                <span>Doanh nghiệp đầu tư SEO dài hạn (6–12 tháng)</span>
                            </li>
                            <li class="fit-list__item">
                                <span class="fit-list__icon"><?php echo yani_get_theme_svg( 'checkmark-2' ); ?></span>
                                <span>Website dịch vụ cần leads chất lượng, không chỉ traffic ảo</span>
                            </li>
                            <li class="fit-list__item">
                                <span class="fit-list__icon"><?php echo yani_get_theme_svg( 'checkmark-3' ); ?></span>
                                <span>Đội ngũ coi trọng chất lượng biên tập và quy trình rõ ràng</span>
                            </li>
                        </ul>
                    </div>

                    <!-- CTA link -->
                    <a href="<?php echo esc_url( home_url( '/bang-gia/' ) ); ?>" class="cta-link" id="cta-service-price">
                        <span>Xem chi tiết Dịch vụ &amp; Báo giá</span>
                        <span class="cta-link__icon"><?php echo yani_get_theme_svg( 'arrow-right' ); ?></span>
                    </a>

                </div>

                <!-- Right Column - Contact Form -->
                <div class="contact-form-wrapper" id="contact-form-section">
                    <h2 class="contact-form__title">Gửi yêu cầu dự án</h2>
                    <p class="contact-form__desc">
                        Chia sẻ sơ lược về nhu cầu của bạn. Chúng tôi sẽ phản hồi với các bước tiếp theo và những gì cần thiết để đánh giá.
                    </p>

                    <form id="yani-contact-form" class="contact-form" method="post" novalidate>
                        <?php wp_nonce_field( 'yani_nonce', 'yani_nonce_field' ); ?>

                        <div class="form-group">
                            <label for="contact-fullname" class="form-group__label">Họ tên *</label>
                            <input type="text" id="contact-fullname" name="fullname" class="form-group__input" placeholder="VD: Nguyễn Văn A" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-email" class="form-group__label">Email công việc *</label>
                            <input type="email" id="contact-email" name="email" class="form-group__input" placeholder="name@company.com" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-phone" class="form-group__label">Số điện thoại / Zalo *</label>
                            <input type="tel" id="contact-phone" name="phone" class="form-group__input" placeholder="090..." required>
                        </div>

                        <div class="form-group">
                            <label for="contact-website" class="form-group__label">Website doanh nghiệp (Tùy chọn)</label>
                            <input type="url" id="contact-website" name="website" class="form-group__input" placeholder="http://...">
                        </div>

                        <div class="form-group">
                            <label for="contact-message" class="form-group__label">Bạn cần hỗ trợ gì?</label>
                            <textarea id="contact-message" name="message" class="form-group__textarea" placeholder="VD: Chúng tôi muốn xây dựng kế hoạch nội dung SEO 6-12 tháng và xuất bản X bài/tháng..."></textarea>
                        </div>

                        <p class="contact-form__note">
                            Form này dành cho doanh nghiệp đang tìm kiếm hợp tác nội dung SEO dài hạn. Chúng tôi không cam kết các lời hứa "lên top tức thì".
                        </p>

                        <div class="contact-form__submit">
                            <button type="submit" class="btn btn-primary" id="btn-submit-form">
                                <span>Gửi yêu cầu ngay</span>
                            </button>
                        </div>

                        <div id="form-message" class="form-message"></div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================
         PROCESS SECTION
         ======================================== -->
    <section class="contact-process" id="contact-process">
        <div class="container">
            <h2 class="contact-process__title">Quy trình làm việc sau khi nhận yêu cầu</h2>

            <div class="process-steps">
                <!-- Step 01 -->
                <div class="process-step" id="process-step-01">
                    <div class="process-step__header">
                        <span class="process-step__number">01</span>
                        <span class="process-step__title">Tiếp nhận</span>
                    </div>
                    <p class="process-step__desc">
                        Team Account xác nhận yêu cầu và liên hệ lại trong tối đa 30 phút (giờ hành chính).
                    </p>
                </div>

                <!-- Step 02 -->
                <div class="process-step" id="process-step-02">
                    <div class="process-step__header">
                        <span class="process-step__number">02</span>
                        <span class="process-step__title">Nghiên cứu nhanh</span>
                    </div>
                    <p class="process-step__desc">
                        Chúng tôi xem qua website và lĩnh vực kinh doanh để hiểu sơ bộ "bệnh lý" của dự án.
                    </p>
                </div>

                <!-- Step 03 -->
                <div class="process-step" id="process-step-03">
                    <div class="process-step__header">
                        <span class="process-step__number">03</span>
                        <span class="process-step__title">Tư vấn 1:1</span>
                    </div>
                    <p class="process-step__desc">
                        Trao đổi trực tiếp qua Zalo/Meet để chốt phương án triển khai phù hợp nhất với ngân sách.
                    </p>
                </div>

                <!-- Step 04 -->
                <div class="process-step" id="process-step-04">
                    <div class="process-step__header">
                        <span class="process-step__number">04</span>
                        <span class="process-step__title">Gửi Báo giá</span>
                    </div>
                    <p class="process-step__desc">
                        Gửi Proposal chi tiết, minh bạch hạng mục công việc và cam kết đầu ra.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         FAQ SECTION
         ======================================== -->
    <section class="contact-faq" id="contact-faq">
        <div class="container">
            <div class="contact-faq__header">
                <h2 class="contact-faq__title">Thắc mắc thường gặp</h2>
                <p class="contact-faq__subtitle">
                    Những điều doanh nghiệp ở TP.HCM thường hỏi trước khi hợp tác triển khai content SEO.
                </p>
            </div>

            <div class="faq-list" id="faq-list">
                <!-- FAQ Item 1 - Open by default -->
                <div class="faq-item faq-item--open" id="faq-item-1">
                    <div class="faq-item__header" role="button" tabindex="0" aria-expanded="true" aria-controls="faq-answer-1">
                        <h3 class="faq-item__question">Tư vấn và Audit Website có mất phí không?</h3>
                        <span class="faq-item__toggle">
                            <?php echo yani_get_theme_svg( 'toggle-open' ); ?>
                        </span>
                    </div>
                    <div class="faq-item__answer" id="faq-answer-1" role="region">
                        <p class="faq-item__answer-text">
                            Hoàn toàn KHÔNG. Chúng tôi tư vấn chiến lược và audit sơ bộ website miễn phí. Bạn chỉ trả tiền khi hai bên ký hợp đồng triển khai nội dung chính thức.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item" id="faq-item-2">
                    <div class="faq-item__header" role="button" tabindex="0" aria-expanded="false" aria-controls="faq-answer-2">
                        <h3 class="faq-item__question">Yani Content có xuất hóa đơn VAT không?</h3>
                        <span class="faq-item__toggle">
                            <?php echo yani_get_theme_svg( 'toggle-closed-1' ); ?>
                        </span>
                    </div>
                    <div class="faq-item__answer" id="faq-answer-2" role="region">
                        <p class="faq-item__answer-text">
                            Có, Yani Content xuất hóa đơn VAT đầy đủ cho tất cả dịch vụ.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item" id="faq-item-3">
                    <div class="faq-item__header" role="button" tabindex="0" aria-expanded="false" aria-controls="faq-answer-3">
                        <h3 class="faq-item__question">Tôi ở xa (Hà Nội/Đà Nẵng) có làm việc được không?</h3>
                        <span class="faq-item__toggle">
                            <?php echo yani_get_theme_svg( 'toggle-closed-2' ); ?>
                        </span>
                    </div>
                    <div class="faq-item__answer" id="faq-answer-3" role="region">
                        <p class="faq-item__answer-text">
                            Hoàn toàn được. Chúng tôi làm việc trực tuyến với khách hàng trên toàn quốc qua Zalo, Google Meet và các công cụ quản lý dự án.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         CTA ABOUT LINK
         ======================================== -->
    <section class="contact-cta-about" id="contact-cta-about">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/gioi-thieu/' ) ); ?>" class="cta-link" id="cta-about-team">
                <span>Tìm hiểu thêm về Đội ngũ &amp; Năng lực của chúng tôi</span>
                <span class="cta-link__icon"><?php echo yani_get_theme_svg( 'arrow-right-2' ); ?></span>
            </a>
        </div>
    </section>

    <!-- ========================================
         INFO CARDS SECTION
         ======================================== -->
    <section class="contact-info-cards" id="contact-info-cards">
        <div class="container">
            <div class="contact-info-cards__grid">

                <!-- Văn phòng -->
                <div class="info-card" id="info-card-office">
                    <div class="info-card__title">
                        <span class="info-card__icon"><?php echo yani_get_theme_svg( 'location-icon' ); ?></span>
                        Văn phòng
                    </div>
                    <p class="info-card__desc">
                        Tòa nhà Innovation, Quận 1, TP. Hồ Chí Minh (Vui lòng đặt hẹn trước)
                    </p>
                </div>

                <!-- Thời gian phản hồi -->
                <div class="info-card" id="info-card-response">
                    <div class="info-card__title">
                        <span class="info-card__icon"><?php echo yani_get_theme_svg( 'clock-icon' ); ?></span>
                        Thời gian phản hồi
                    </div>
                    <p class="info-card__desc">
                        Trong vòng 1 ngày làm việc
                    </p>
                </div>

                <!-- Bảo mật thông tin -->
                <div class="info-card" id="info-card-security">
                    <div class="info-card__title">
                        <span class="info-card__icon"><?php echo yani_get_theme_svg( 'shield-icon' ); ?></span>
                        Bảo mật thông tin
                    </div>
                    <p class="info-card__desc">
                        Thông tin dự án được xử lý trách nhiệm và cam kết không chia sẻ với bên thứ ba.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
