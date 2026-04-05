<?php
/**
 * Template Name: Đề Xuất Chiến Lược
 *
 * Strategy proposal page template matching Figma design
 *
 * @package Yani_Content
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main strategy-page">

    <!-- ===== HERO SECTION ===== -->
    <section class="strategy-hero" id="strategy-hero">
        <div class="container">
            <div class="strategy-hero__logo">
                <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/logo-header.svg" alt="Yani Content">
            </div>

            <p class="strategy-hero__badge">GIẢI PHÁP TĂNG TRƯỞNG NỘI DUNG BỀN VỮNG</p>

            <h1 class="strategy-hero__title">ĐỀ XUẤT CHIẾN LƯỢC NỘI DUNG</h1>

            <p class="strategy-hero__desc">
                Phù hợp với doanh nghiệp B2B/SME cần xây dựng tài sản số thay vì chỉ tăng số lượng bài viết.
            </p>
        </div>
    </section>

    <!-- ===== 01 - TỔNG QUAN ĐỀ XUẤT ===== -->
    <section class="strategy-overview" id="strategy-overview">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">01</span>
                <h2 class="strategy-section-header__title">TỔNG QUAN ĐỀ XUẤT</h2>
            </div>

            <div class="strategy-overview__info-grid">
                <div class="strategy-overview__info-item" id="info-khach-hang">
                    <div class="strategy-overview__info-label">KHÁCH HÀNG</div>
                    <div class="strategy-overview__info-value">Nhập tên doanh nghiệp...</div>
                </div>
                <div class="strategy-overview__info-item" id="info-website">
                    <div class="strategy-overview__info-label">WEBSITE</div>
                    <div class="strategy-overview__info-value">www.yourwebsite.com</div>
                </div>
                <div class="strategy-overview__info-item" id="info-nganh-nghe">
                    <div class="strategy-overview__info-label">NGÀNH NGHỀ</div>
                    <div class="strategy-overview__info-value">Ví dụ: Xây dựng, B2B,...</div>
                </div>
                <div class="strategy-overview__info-item" id="info-thoi-gian">
                    <div class="strategy-overview__info-label">THỜI GIAN ĐỀ XUẤT</div>
                    <div class="strategy-overview__info-value">Ví dụ: Tháng 03/2026...</div>
                </div>
            </div>

            <div class="strategy-overview__quote">
                <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/quote-icon-left.svg" alt=""
                    class="strategy-overview__quote-icon strategy-overview__quote-icon--left" aria-hidden="true">
                <p class="strategy-overview__quote-text">
                    Yani Content đề xuất triển khai hệ thống nội dung chuẩn SEO theo hành trình khách hàng B2B,
                    tập trung vào đúng nhu cầu tìm kiếm thực tế, từ đó giúp website tăng độ tin cậy và hỗ trợ
                    đội sales tạo thêm khách hàng tiềm năng trong lộ trình 6–12 tháng
                </p>
                <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/quote-icon-right.svg" alt=""
                    class="strategy-overview__quote-icon strategy-overview__quote-icon--right" aria-hidden="true">
            </div>

            <div class="strategy-overview__objective-card" id="overview-objective">
                <span class="strategy-overview__objective-label">Mục tiêu dự án</span>
                <div class="strategy-overview__objective-items">
                    <div class="strategy-overview__objective-row">
                        <div class="strategy-overview__objective-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/check-circle.svg" alt="">
                            <span>Cấu trúc rõ ràng</span>
                        </div>
                        <div class="strategy-overview__objective-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/check-circle.svg" alt="">
                            <span>Đúng nhóm mục tiêu</span>
                        </div>
                    </div>
                    <div class="strategy-overview__objective-row">
                        <div class="strategy-overview__objective-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/check-circle.svg" alt="">
                            <span>Tăng tỷ lệ liên hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 02 - HIỆN TRẠNG & VẤN ĐỀ ===== -->
    <section class="strategy-status" id="strategy-status">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">02</span>
                <h2 class="strategy-section-header__title">HIỆN TRẠNG & VẤN ĐỀ</h2>
            </div>

            <div class="strategy-status__grid">
                <div class="strategy-status__item" id="status-traffic">
                    <div class="strategy-status__item-label">TRAFFIC HIỆN TẠI<br>(SỐ LIỆU / CHƯA CÓ DỮ LIỆU)</div>
                    <div class="strategy-status__item-value">...</div>
                </div>
                <div class="strategy-status__item" id="status-baiviet">
                    <div class="strategy-status__item-label">SỐ LƯỢNG BÀI VIẾT HIỆN CÓ</div>
                    <div class="strategy-status__item-value">...</div>
                </div>
                <div class="strategy-status__item" id="status-tinhtrang">
                    <div class="strategy-status__item-label">TÌNH TRẠNG NỘI DUNG HIỆN TẠI</div>
                    <div class="strategy-status__item-value">...</div>
                </div>
            </div>

            <div class="strategy-status__risk-card" id="status-risk">
                <span class="strategy-status__risk-label">Rủi ro thường gặp khi làm content</span>
                <div class="strategy-status__risk-list">
                    <div class="strategy-status__risk-item">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/bullet-list-icon.svg" alt="">
                        <span>Nội dung tập trung từ khóa nhưng chưa tạo chuyển đổi</span>
                    </div>
                    <div class="strategy-status__risk-item">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/bullet-list-icon.svg" alt="">
                        <span>Bài viết thiếu chiều sâu chuyên môn</span>
                    </div>
                    <div class="strategy-status__risk-item">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/bullet-list-icon.svg" alt="">
                        <span>Chủ đề triển khai rời rạc, khó xây uy tín ngành</span>
                    </div>
                    <div class="strategy-status__risk-item">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/bullet-list-icon.svg" alt="">
                        <span>Website có nhiều bài nhưng ít phát sinh khách liên hệ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 03 - PHƯƠNG PHÁP TRIỂN KHAI ===== -->
    <section class="strategy-method" id="strategy-method">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">03</span>
                <h2 class="strategy-section-header__title">PHƯƠNG PHÁP TRIỂN KHAI</h2>
            </div>

            <div class="strategy-method__pillars">
                <div class="strategy-method__pillar" id="pillar-search-intent">
                    <span class="strategy-method__pillar-tag">TRỤ CỘT 1</span>
                    <h3 class="strategy-method__pillar-title">Search Intent</h3>
                    <p class="strategy-method__pillar-desc">Mỗi chủ đề được phân tích theo mục đích tìm kiếm
                        (tìm hiểu, so sánh, ra quyết định).</p>
                </div>

                <div class="strategy-method__pillar" id="pillar-topic-cluster">
                    <span class="strategy-method__pillar-tag">TRỤ CỘT 2</span>
                    <h3 class="strategy-method__pillar-title">Topic Cluster</h3>
                    <p class="strategy-method__pillar-desc">Tổ chức theo cấu trúc: Pillar, cụm bài liên quan,
                        liên kết nội bộ ngữ nghĩa.</p>
                </div>

                <div class="strategy-method__pillar" id="pillar-kiem-duyet">
                    <span class="strategy-method__pillar-tag">TRỤ CỘT 3</span>
                    <h3 class="strategy-method__pillar-title">Kiểm duyệt 4 lớp</h3>
                    <p class="strategy-method__pillar-desc">Quy trình nghiêm ngặt:<br>
                        Nghiên cứu -> Viết & tối ưu -> Biên tập 2 vòng -> Nghiệm thu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 04 - PHẠM VI CÔNG VIỆC ===== -->
    <section class="strategy-scope" id="strategy-scope">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">04</span>
                <h2 class="strategy-section-header__title">PHẠM VI CÔNG VIỆC</h2>
            </div>

            <p class="strategy-scope__package-label">Gói đề xuất: ...&nbsp;</p>

            <div class="strategy-scope__table" id="scope-table">
                <div class="strategy-scope__table-header">
                    <span class="strategy-scope__table-header-cell">HẠNG MỤC</span>
                    <span class="strategy-scope__table-header-cell">KHỐI LƯỢNG</span>
                    <span class="strategy-scope__table-header-cell">BAO GỒM</span>
                    <span class="strategy-scope__table-header-cell">KHÔNG BAO GỒM</span>
                </div>

                <div class="strategy-scope__table-row">
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--label" data-label="HẠNG MỤC">RESEARCH TỪ KHÓA</span>
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--muted" data-label="KHỐI LƯỢNG">...</span>
                    <span class="strategy-scope__table-cell" data-label="BAO GỒM">RESEARCH TỪ KHÓA</span>
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--strikethrough" data-label="KHÔNG BAO GỒM">Seo technical tổng thể</span>
                </div>

                <div class="strategy-scope__table-row">
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--label" data-label="HẠNG MỤC">VIẾT BÀI SEO</span>
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--muted" data-label="KHỐI LƯỢNG">... bài/tháng</span>
                    <span class="strategy-scope__table-cell" data-label="BAO GỒM">1.500–3.000+ TỪ/BÀI</span>
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--strikethrough" data-label="KHÔNG BAO GỒM">Thiết kế banner</span>
                </div>

                <div class="strategy-scope__table-row">
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--label" data-label="HẠNG MỤC">TỐI ƯU ONPAGE</span>
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--muted" data-label="KHỐI LƯỢNG">Bao gồm</span>
                    <span class="strategy-scope__table-cell" data-label="BAO GỒM">TITLE, META, HEADING, INTERNAL LINK</span>
                    <span class="strategy-scope__table-cell strategy-scope__table-cell--strikethrough" data-label="KHÔNG BAO GỒM">Seo technical tổng thể</span>
                </div>
            </div>

            <div class="strategy-scope__notes">
                <p>Phạm vi dịch vụ trên tập trung vào Content chiến lược và tối ưu onpage nội dung, không bao
                    gồm SEO technical tổng thể hoặc hoạt động backlink.</p>
                <p>Số vòng chỉnh sửa miễn phí: 2</p>
            </div>
        </div>
    </section>

    <!-- ===== 05 - QUY TRÌNH DỰ KIẾN ===== -->
    <section class="strategy-timeline" id="strategy-timeline">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">05</span>
                <h2 class="strategy-section-header__title">QUY TRÌNH DỰ KIẾN</h2>
            </div>

            <div class="strategy-timeline__content">
                <div class="strategy-timeline__block" id="timeline-week1">
                    <div class="strategy-timeline__week-label">Tuần 1</div>
                    <p class="strategy-timeline__week-desc">Nghiên cứu & đề xuất chủ đề, Gửi dàn ý.</p>
                </div>
                <div class="strategy-timeline__block" id="timeline-week2-4">
                    <div class="strategy-timeline__week-label">Tuần<br>2-4</div>
                    <p class="strategy-timeline__week-desc">Viết & tối ưu nội dung, Biên tập, Bàn giao theo batch.</p>
                </div>
            </div>

            <div class="strategy-timeline__report">
                <div class="strategy-timeline__report-item" id="timeline-report">
                    <div class="strategy-timeline__report-label">CHU KỲ BÁO CÁO</div>
                    <div class="strategy-timeline__report-value">Hàng tuần/Hàng tháng...</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 06 - TIÊU CHUẨN BÀN GIAO ===== -->
    <section class="strategy-delivery" id="strategy-delivery">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">06</span>
                <h2 class="strategy-section-header__title">TIÊU CHUẨN BÀN GIAO</h2>
            </div>

            <div class="strategy-delivery__card">
                <div class="strategy-delivery__columns">
                    <div class="strategy-delivery__column-list">
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-left.svg" alt="">
                            <span>NỘI DUNG ĐỘC QUYỀN (UNIQUE ≥ 95%)</span>
                        </div>
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-left.svg" alt="">
                            <span>BÁM ĐÚNG NHU CẦU TÌM KIẾM</span>
                        </div>
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-left.svg" alt="">
                            <span>CẤU TRÚC SEO RÕ RÀNG (H1–H3)</span>
                        </div>
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-left.svg" alt="">
                            <span>TỐI ƯU TRẢI NGHIỆM DESKTOP & MOBILE</span>
                        </div>
                    </div>
                    <div class="strategy-delivery__column-list">
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-right.svg" alt="">
                            <span>BIÊN TẬP TỐI THIỂU 2 VÒNG</span>
                        </div>
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-right.svg" alt="">
                            <span>VĂN PHONG PHÙ HỢP B2B</span>
                        </div>
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-right.svg" alt="">
                            <span>HỖ TRỢ CHỈNH SỬA TRONG PHẠM VI</span>
                        </div>
                        <div class="strategy-delivery__column-item">
                            <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/delivery-checklist-right.svg" alt="">
                            <span>KIỂM TRA THEO CHECKLIST NGHIỆM THU</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 07 - KỲ VỌNG HIỆU QUẢ SAU 3-6 THÁNG ===== -->
    <section class="strategy-expect" id="strategy-expect">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">07</span>
                <h2 class="strategy-section-header__title">KỲ VỌNG HIỆU QUẢ SAU 3–6 THÁNG</h2>
            </div>

            <div class="strategy-expect__grid">
                <div class="strategy-expect__item" id="expect-1">
                    <p class="strategy-expect__item-text">Tăng độ phủ từ khóa theo cụm chủ đề</p>
                    <div class="strategy-expect__item-icon">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/icon-network.svg" alt="">
                    </div>
                </div>
                <div class="strategy-expect__item" id="expect-2">
                    <p class="strategy-expect__item-text">Tăng thời gian người dùng ở lại trang</p>
                    <div class="strategy-expect__item-icon">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/icon-user-time.svg" alt="">
                    </div>
                </div>
                <div class="strategy-expect__item" id="expect-3">
                    <p class="strategy-expect__item-text">Tăng lượng truy cập organic đúng tệp</p>
                    <div class="strategy-expect__item-icon">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/icon-target-user.svg" alt="">
                    </div>
                </div>
                <div class="strategy-expect__item" id="expect-4">
                    <p class="strategy-expect__item-text">Hỗ trợ đội sales trong quá trình tư vấn khách hàng</p>
                    <div class="strategy-expect__item-icon">
                        <img src="<?php echo YANI_THEME_URI; ?>/assets/images/strategy/icon-headphone.svg" alt="">
                    </div>
                </div>
            </div>

            <p class="strategy-expect__note">LƯU Ý:&nbsp;HIỆU QUẢ SEO PHỤ THUỘC VÀO MỨC ĐỘ CẠNH TRANH NGÀNH, NỀN TẢNG WEBSITE HIỆN TẠI VÀ NGÂN SÁCH TRIỂN KHAI TỔNG THỂ.</p>
        </div>
    </section>

    <!-- ===== 08 & 09 - BÁO GIÁ & ĐẦU MỐI ===== -->
    <section class="strategy-pricing" id="strategy-pricing">
        <div class="container">
            <div class="strategy-pricing__divider" aria-hidden="true"></div>

            <div class="strategy-pricing__header-row">
                <div class="strategy-pricing__number-block">
                    <span class="strategy-pricing__number-big">08</span>
                </div>
                <h2 class="strategy-pricing__section-title">BÁO GIÁ & ĐỀ XUẤT<br>TRIỂN KHAI</h2>
                <div style="flex:1"></div>
                <div class="strategy-pricing__number-block">
                    <span class="strategy-pricing__number-big">09</span>
                </div>
                <h2 class="strategy-pricing__section-title">ĐẦU MỐI<br>PHỤ TRÁCH</h2>
            </div>

            <div class="strategy-pricing__boxes">
                <div class="strategy-pricing__box" id="pricing-box-left">
                    <div class="strategy-pricing__contact-item">
                        <div class="strategy-pricing__box-label">GÓI PHÙ HỢP</div>
                        <div class="strategy-pricing__box-value">...</div>
                    </div>
                    <div class="strategy-pricing__contact-item">
                        <div class="strategy-pricing__box-label">NGÂN SÁCH (VNĐ/THÁNG)</div>
                        <div class="strategy-pricing__box-value">0.000.000</div>
                    </div>
                    <div class="strategy-pricing__contact-item" style="border-bottom: none;">
                        <div class="strategy-pricing__box-label">THỜI GIAN TỐI THIỂU KHUYẾN NGHỊ</div>
                        <div class="strategy-pricing__box-value">3–6 tháng</div>
                    </div>
                </div>
                <div class="strategy-pricing__box" id="pricing-box-right">
                    <div class="strategy-pricing__contact-item">
                        <div class="strategy-pricing__box-label">PROJECT OWNER</div>
                        <div class="strategy-pricing__box-value">...</div>
                    </div>
                    <div class="strategy-pricing__contact-item">
                        <div class="strategy-pricing__box-label">SĐT / ZALO</div>
                        <div class="strategy-pricing__box-value">...</div>
                    </div>
                    <div class="strategy-pricing__contact-item" style="border-bottom: none;">
                        <div class="strategy-pricing__box-label">EMAIL</div>
                        <div class="strategy-pricing__box-value">...</div>
                    </div>
                </div>
            </div>

            <p class="strategy-next__note" style="margin-top:0; margin-bottom: 24px;">Nếu doanh nghiệp cần điều chỉnh phạm vi hoặc nhận bản đề xuất chi tiết hơn theo ngành, Yani Content sẵn sàng trao đổi thêm.</p>
        </div>
    </section>

    <!-- ===== 10 - BƯỚC TIẾP THEO ===== -->
    <section class="strategy-next" id="strategy-next">
        <div class="container">
            <div class="strategy-section-header">
                <span class="strategy-section-header__number">10</span>
                <h2 class="strategy-section-header__title">BƯỚC<br>TIẾP THEO</h2>
            </div>

            <div class="strategy-next__content">
                <div class="strategy-next__left">
                    <div class="strategy-next__launch-badge">
                        <div class="strategy-next__launch-label-top">KHỞI ĐỘNG TRONG</div>
                        <div class="strategy-next__launch-number"><span>03</span></div>
                        <div class="strategy-next__launch-label-bottom">NGÀY SAU KÝ KẾT.</div>
                    </div>
                </div>

                <a href="#" class="strategy-next__cta-btn" id="btn-approve">PHÊ DUYỆT ĐỀ XUẤT (IN PDF)</a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
