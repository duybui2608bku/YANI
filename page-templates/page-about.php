<?php
/**
 * Template Name: Về Chúng Tôi
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main about-page">

    <!-- Background decorations -->
    <div class="about-bg-vo-cuc about-bg-vo-cuc--top" aria-hidden="true"></div>
    <div class="about-bg-vo-cuc about-bg-vo-cuc--bottom" aria-hidden="true"></div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/spotlight-about-1.svg" class="about-spotlight about-spotlight--1" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/spotlight-about-2.svg" class="about-spotlight about-spotlight--2" alt="" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/bgr-bang-gia.svg" class="about-bg-section" alt="" aria-hidden="true">

    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero" id="about-hero">
        <div class="container">
            <h1 class="about-hero__page-title text-gradient"><?php esc_html_e('Giới thiệu về Yani Content', 'yani-content'); ?></h1>

            <div class="about-hero__badge">
                <span class="about-hero__badge-text"><?php esc_html_e('ĐỘI NGŨ CONTENT SEO THỰC CHIẾN', 'yani-content'); ?></span>
            </div>

            <p class="about-hero__desc">
                <?php esc_html_e('Chúng tôi không làm SEO để "lấy le" với Google. Chúng tôi làm nội dung để doanh nghiệp của bạn', 'yani-content'); ?>&nbsp;<strong><?php esc_html_e('sống khỏe, bán được hàng', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('và khẳng định vị thế "trùm" trong ngách.', 'yani-content'); ?>
            </p>

            <div class="about-hero__actions">
                <a href="#about-principle" class="btn btn-primary" id="btn-xem-nangluc"><?php esc_html_e('Xem năng lực', 'yani-content'); ?></a>
                <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-ghost" id="btn-lien-he"><?php esc_html_e('Liên hệ ngay', 'yani-content'); ?></a>
            </div>
        </div>
    </section>

    <!-- ===== STATS SECTION ===== -->
    <section class="about-stats" id="about-stats">
        <div class="container">
            <div class="about-stats__grid">
                <div class="about-stats__item" id="stat-experience">
                    <span class="about-stats__number text-gradient">5+</span>
                    <p class="about-stats__label"><?php esc_html_e('Năm kinh nghiệm', 'yani-content'); ?><br><?php esc_html_e('Thực chiến dịch vụ Content SEO doanh nghiệp', 'yani-content'); ?></p>
                </div>
                <div class="about-stats__divider" aria-hidden="true"></div>
                <div class="about-stats__item" id="stat-projects">
                    <span class="about-stats__number text-gradient">200+</span>
                    <p class="about-stats__label"><?php esc_html_e('Dự án đã triển khai', 'yani-content'); ?><br><?php esc_html_e('Thành công', 'yani-content'); ?></p>
                </div>
                <div class="about-stats__divider" aria-hidden="true"></div>
                <div class="about-stats__item" id="stat-retention">
                    <span class="about-stats__number text-gradient">92%</span>
                    <p class="about-stats__label"><?php esc_html_e('Tỷ lệ khách hàng', 'yani-content'); ?><br><?php esc_html_e('Gia hạn hợp đồng', 'yani-content'); ?></p>
                </div>
                <div class="about-stats__divider" aria-hidden="true"></div>
                <div class="about-stats__item" id="stat-penalty">
                    <span class="about-stats__number text-gradient">0</span>
                    <p class="about-stats__label"><?php esc_html_e('Dự án bị phạt', 'yani-content'); ?><br><?php esc_html_e('Tác vụ thủ công', 'yani-content'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SỰ THẬT MẤT LÒNG SECTION ===== -->
    <section class="about-truth" id="about-truth">
        <div class="container">
            <div class="about-truth__header">
                <h2 class="about-truth__title">
                    <span class="about-truth__title-white"><?php esc_html_e('Sự thật', 'yani-content'); ?></span>
                    <span class="about-truth__title-gradient text-gradient"><?php esc_html_e('mất lòng', 'yani-content'); ?></span>
                </h2>
                <p class="about-truth__desc">
                    <?php esc_html_e('Bạn cần phủ chủ đề rộng, ưu tiên bài giải đáp nhanh và từ khóa dài để kéo traffic đều theo thời gian.', 'yani-content'); ?>
                </p>
            </div>

            <div class="about-truth__pills">
                <div class="about-truth__pill">
                    <span><?php esc_html_e('Traffic ảo thì nhiều, nhưng khách gọi tư vấn thì vắng như chùa Bà Đanh.', 'yani-content'); ?></span>
                </div>
                <div class="about-truth__pill">
                    <span><?php esc_html_e('Nội dung "xào nấu" lung tung, sai kiến thức chuyên môn -> Mất uy tín trầm trọng.', 'yani-content'); ?></span>
                </div>
                <div class="about-truth__pill">
                    <span><?php esc_html_e('Website thành cái "kho rác" nội dung, Google nhìn vào là muốn phạt.', 'yani-content'); ?></span>
                </div>
            </div>

            <div class="about-truth__quote-area">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/quote-left.svg" alt="" class="about-truth__quote-icon about-truth__quote-icon--left" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/quote-right.svg" alt="" class="about-truth__quote-icon about-truth__quote-icon--right" aria-hidden="true">
                <p class="about-truth__solution">
                    <?php esc_html_e('Yani Content ra đời để dẹp bỏ kiểu làm ăn chộp giật đó. Chúng tôi làm thật, ăn thật, ra số thật.', 'yani-content'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== NGUYÊN TẮC 3 KHÔNG - 3 CÓ ===== -->
    <section class="about-principle" id="about-principle">
        <div class="container">
            <div class="about-principle__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/nguyentac-bg.svg" class="about-principle__bg-svg" alt="" aria-hidden="true">

                <h3 class="about-principle__title text-gradient"><?php esc_html_e('Nguyên tắc 3 KHÔNG - 3 CÓ', 'yani-content'); ?></h3>

                <div class="about-principle__content">
                    <div class="about-principle__col about-principle__col--left">
                        <ul class="about-principle__list">
                            <li class="about-principle__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/x-icon-1.svg" alt="" class="about-principle__icon">
                                <span><strong><?php esc_html_e('Không bôi chữ tính tiền:', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('Viết dài mà lan man thì vứt. Ngắn gọn, súc tích, giải quyết vấn đề.', 'yani-content'); ?></span>
                            </li>
                            <li class="about-principle__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/x-icon-2.svg" alt="" class="about-principle__icon">
                                <span><strong><?php esc_html_e('Không viết kiểu "trả bài":', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('Đã nhận tiền là phải tâm huyết, viết như cho chính công ty mình.', 'yani-content'); ?></span>
                            </li>
                            <li class="about-principle__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/x-icon-3.svg" alt="" class="about-principle__icon">
                                <span><strong><?php esc_html_e('Không bánh vẽ:', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('Cam kết lộ trình rõ ràng, không hứa hẹn những thứ trên trời dưới biển.', 'yani-content'); ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="about-principle__divider" aria-hidden="true"></div>

                    <div class="about-principle__col about-principle__col--right">
                        <ul class="about-principle__list">
                            <li class="about-principle__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/check-icon-green-1.svg" alt="" class="about-principle__icon">
                                <span><strong><?php esc_html_e('Có chiều sâu (In-depth):', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('Đào sâu insight, nghiên cứu đối thủ kỹ càng.', 'yani-content'); ?></span>
                            </li>
                            <li class="about-principle__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/check-icon-green-2.svg" alt="" class="about-principle__icon">
                                <span><strong><?php esc_html_e('Có trách nhiệm:', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('Sai thì sửa, hỏng thì đền. Làm việc sòng phẳng.', 'yani-content'); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SỞ TRƯỜNG ===== -->
    <section class="about-expertise" id="about-expertise">
        <div class="container">
            <h2 class="about-expertise__title text-gradient"><?php esc_html_e('Sở trường của chúng tôi', 'yani-content'); ?></h2>
            <p class="about-expertise__desc">
                <?php esc_html_e('Không ôm đồm "nhạc nào cũng nhảy". Chúng tôi chỉ nhận những mảng mình thực sự giỏi và có kinh nghiệm thực chiến.', 'yani-content'); ?>
            </p>

            <div class="about-expertise__grid">
                <div class="about-expertise__card" id="expertise-construction">
                    <div class="about-expertise__card-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icon-xd-nt.svg" alt="<?php esc_attr_e('Xây dựng & Nội thất', 'yani-content'); ?>" class="about-expertise__card-icon">
                        <h4 class="about-expertise__card-title"><?php esc_html_e('Xây dựng & Nội thất', 'yani-content'); ?></h4>
                        <p class="about-expertise__card-desc"><?php esc_html_e('Am hiểu từ móng đến mái. Viết đúng thuật ngữ kỹ thuật, quy trình thi công, vật liệu. Giúp nhà thầu thể hiện cái "tầm" với chủ đầu tư.', 'yani-content'); ?></p>
                    </div>
                </div>
                <div class="about-expertise__card" id="expertise-b2b">
                    <div class="about-expertise__card-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icon-business.svg" alt="<?php esc_attr_e('Dịch vụ B2B & Công nghệ', 'yani-content'); ?>" class="about-expertise__card-icon">
                        <h4 class="about-expertise__card-title"><?php esc_html_e('Dịch vụ B2B & Công nghệ', 'yani-content'); ?></h4>
                        <p class="about-expertise__card-desc"><?php esc_html_e('Viết cho sếp đọc nên phải "khôn". Nội dung tập trung vào giải pháp, lợi ích kinh tế (ROI) và thuyết phục người ra quyết định xuống tiền.', 'yani-content'); ?></p>
                    </div>
                </div>
                <div class="about-expertise__card" id="expertise-health">
                    <div class="about-expertise__card-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icon-y-te.svg" alt="<?php esc_attr_e('Y tế & Sức khỏe', 'yani-content'); ?>" class="about-expertise__card-icon">
                        <h4 class="about-expertise__card-title"><?php esc_html_e('Y tế & Sức khỏe (YMYL)', 'yani-content'); ?></h4>
                        <p class="about-expertise__card-desc"><?php esc_html_e('Mảng này không đùa được. Viết chuẩn y khoa, có dẫn chứng nguồn tin cậy (Bộ Y Tế, PubMed), tuân thủ luật quảng cáo. An toàn tuyệt đối.', 'yani-content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== QUY TRÌNH "BAO SÀI" ===== -->
    <section class="about-process" id="about-process">
        <div class="container">
            <h2 class="about-process__title"><?php esc_html_e('Quy trình "Bao Sài"', 'yani-content'); ?></h2>
            <h3 class="about-process__subtitle text-gradient"><?php esc_html_e('Kiểm duyệt 4 lớp', 'yani-content'); ?></h3>
            <p class="about-process__desc">
                <?php esc_html_e('Không có chuyện viết xong ném đó. Bài viết đến tay bạn là bản hoàn hảo nhất, sẵn sàng lên web kiếm khách.', 'yani-content'); ?>
            </p>

            <div class="about-process__line" aria-hidden="true"></div>

            <div class="about-process__steps">
                <div class="about-process__step" id="about-step-01">
                    <div class="about-process__step-marker">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/step-line-1.svg" alt="" aria-hidden="true" class="about-process__step-line">
                    </div>
                    <span class="about-process__step-number text-gradient">01</span>
                    <h4 class="about-process__step-title"><?php esc_html_e('Nghiên cứu & Chốt Dàn ý (Outline)', 'yani-content'); ?></h4>
                    <p class="about-process__step-desc"><?php esc_html_e('Thống nhất hướng đi ngay từ đầu. Tránh tình trạng "ông nói gà, bà nói vịt".', 'yani-content'); ?></p>
                </div>
                <div class="about-process__step" id="about-step-02">
                    <div class="about-process__step-marker">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/step-line-2.svg" alt="" aria-hidden="true" class="about-process__step-line">
                    </div>
                    <span class="about-process__step-number text-gradient">02</span>
                    <h4 class="about-process__step-title"><?php esc_html_e('Viết &', 'yani-content'); ?><br><?php esc_html_e('Tối ưu hóa', 'yani-content'); ?></h4>
                    <p class="about-process__step-desc"><?php esc_html_e('Triển khai bài viết chuyên sâu, trình bày đẹp mắt, dễ đọc trên điện thoại.', 'yani-content'); ?></p>
                </div>
                <div class="about-process__step" id="about-step-03">
                    <div class="about-process__step-marker">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/step-line-3.svg" alt="" aria-hidden="true" class="about-process__step-line">
                    </div>
                    <span class="about-process__step-number text-gradient">03</span>
                    <h4 class="about-process__step-title"><?php esc_html_e('Biên tập 2 Vòng (Kỹ & Khó)', 'yani-content'); ?></h4>
                    <p class="about-process__step-desc"><?php esc_html_e('Vòng 1: SEO Specialist soi lỗi kỹ thuật. Vòng 2: Editor chuyên ngành soi kiến thức và giọng văn.', 'yani-content'); ?></p>
                </div>
                <div class="about-process__step" id="about-step-04">
                    <div class="about-process__step-marker">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/step-line-4.svg" alt="" aria-hidden="true" class="about-process__step-line">
                    </div>
                    <span class="about-process__step-number text-gradient">04</span>
                    <h4 class="about-process__step-title"><?php esc_html_e('Nghiệm thu & Bảo hành', 'yani-content'); ?></h4>
                    <p class="about-process__step-desc"><?php esc_html_e('Bàn giao file chuẩn. Hỗ trợ chỉnh sửa đến khi bạn gật đầu ưng ý mới thôi.', 'yani-content'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TIÊU CHUẨN BÀN GIAO (KPI) ===== -->
    <section class="about-kpi" id="about-kpi">
        <div class="container">
            <div class="about-kpi__header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/kpi-bar.svg" alt="" class="about-kpi__bar" aria-hidden="true">
                <h3 class="about-kpi__main-title text-gradient"><?php esc_html_e('Tiêu chuẩn bàn giao (KPI)', 'yani-content'); ?></h3>
            </div>

            <div class="about-kpi__grid">
                <div class="about-kpi__item" id="kpi-unique">
                    <h5 class="about-kpi__item-title"><?php esc_html_e('Độc nhất (Unique)', 'yani-content'); ?></h5>
                    <p class="about-kpi__item-desc"><?php esc_html_e('100% tự viết, không copy, không xào bài. Check đạo văn kỹ càng.', 'yani-content'); ?></p>
                </div>
                <div class="about-kpi__divider" aria-hidden="true"></div>
                <div class="about-kpi__item" id="kpi-intent">
                    <h5 class="about-kpi__item-title"><?php esc_html_e('Đúng ý khách (Intent)', 'yani-content'); ?></h5>
                    <p class="about-kpi__item-desc"><?php esc_html_e('Người dùng cần thông tin -> cho thông tin. Cần mua hàng -> dẫn mua hàng.', 'yani-content'); ?></p>
                </div>
                <div class="about-kpi__divider" aria-hidden="true"></div>
                <div class="about-kpi__item" id="kpi-layout">
                    <h5 class="about-kpi__item-title"><?php esc_html_e('Trình bày đẹp', 'yani-content'); ?></h5>
                    <p class="about-kpi__item-desc"><?php esc_html_e('Có mục lục, in đậm ý chính, bảng biểu so sánh rõ ràng.', 'yani-content'); ?></p>
                </div>
                <div class="about-kpi__divider" aria-hidden="true"></div>
                <div class="about-kpi__item" id="kpi-human">
                    <h5 class="about-kpi__item-title"><?php esc_html_e('Người thật viết', 'yani-content'); ?></h5>
                    <p class="about-kpi__item-desc"><?php esc_html_e('Nếu có dùng AI hỗ trợ ý tưởng, bắt buộc phải có người biên tập lại cho mượt (Human-verified).', 'yani-content'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TEAM / PROJECT OWNER SECTION ===== -->
    <section class="about-team" id="about-team">
        <div class="container">
            <div class="about-team__content">
                <div class="about-team__left">
                    <h2 class="about-team__title">
                        <?php esc_html_e('Rõ người - Rõ việc', 'yani-content'); ?><br><span class="text-gradient"><?php esc_html_e('Rõ trách nhiệm', 'yani-content'); ?></span>
                    </h2>
                    <p class="about-team__desc">
                        <?php esc_html_e('Sợ nhất làm việc với Agency mà không biết ai đang nắm dự án của mình. Tại Yani Content, mọi thứ đều minh bạch.', 'yani-content'); ?>
                    </p>
                    <p class="about-team__detail">
                        <?php esc_html_e('Mỗi dự án sẽ có một', 'yani-content'); ?>&nbsp;<strong><?php esc_html_e('Chủ trì (Project Owner)', 'yani-content'); ?></strong>&nbsp;<?php esc_html_e('đứng mũi chịu sào. Có vấn đề gì cứ "nắm đầu" người này, đảm bảo được giải quyết trong một nốt nhạc.', 'yani-content'); ?>
                    </p>
                </div>
                <div class="about-team__right">
                    <div class="about-team__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/team-image.svg" alt="<?php esc_attr_e('Đội ngũ Yani Content', 'yani-content'); ?>" class="about-team__image">
                        <div class="about-team__card-content">
                            <div class="about-team__card-header">
                                <div class="about-team__avatar">
                                    <div class="about-team__avatar-circle"></div>
                                </div>
                                <h5 class="about-team__card-name"><?php esc_html_e('Anh Minh T.', 'yani-content'); ?></h5>
                            </div>
                            <ul class="about-team__card-list">
                                <li><?php esc_html_e('Lên chiến lược nội dung theo mục tiêu doanh nghiệp', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Duyệt chất lượng bài viết trước khi bàn giao', 'yani-content'); ?></li>
                                <li><?php esc_html_e('Theo dõi và báo cáo hiệu suất định kỳ', 'yani-content'); ?></li>
                            </ul>
                            <div class="about-team__label">
                                <span class="about-team__label-line" aria-hidden="true"></span>
                                <span class="about-team__label-text">Content Lead<br><?php esc_html_e('Người chịu trách nhiệm chính', 'yani-content'); ?></span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="about-team__cta text-gradient"><?php esc_html_e('Liên hệ trao đổi ngay', 'yani-content'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BOTTOM ===== -->
    <section class="about-cta" id="about-cta">
        <div class="container">
            <div class="about-cta__card">
                <h2 class="about-cta__title-white"><?php esc_html_e('Đừng để Website', 'yani-content'); ?></h2>
                <h2 class="about-cta__title-gradient text-gradient"><?php esc_html_e('"đóng băng" nữa!', 'yani-content'); ?></h2>
                <p class="about-cta__desc">
                    <?php esc_html_e('Khách hàng đang tìm kiếm bạn trên Google mỗi ngày. Đừng để họ rơi vào tay đối thủ chỉ vì nội dung của bạn quá chán.', 'yani-content'); ?>
                </p>

                <div class="about-cta__buttons">
                    <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="btn btn-primary" id="btn-service-price"><?php esc_html_e('Xem Dịch vụ & Báo giá', 'yani-content'); ?></a>
                    <a href="#" class="btn btn-ghost" id="btn-zalo-consult"><?php esc_html_e('Chat Zalo tư vấn (Miễn phí)', 'yani-content'); ?></a>
                </div>

                <p class="about-cta__note"><?php esc_html_e('*Phản hồi nhanh trong 30 phút giờ hành chính. Làm việc cả Thứ 7.', 'yani-content'); ?></p>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
