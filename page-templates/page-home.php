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
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/spotlight-hero.svg" class="home-spotlight home-spotlight--hero" alt=""
                aria-hidden="true">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/spotlight-2.svg" class="home-spotlight home-spotlight--2" alt=""
                aria-hidden="true">

            <!-- ===== HERO SECTION ===== -->
            <section class="home-hero" id="home-hero">
                <div class="container">
                    <p class="home-hero__subtitle">GIẢI PHÁP CONTENT CHUYÊN NGHIỆP CHO DOANH NGHIỆP SME</p>

                    <h1>
                        <span class="home-hero__title-gradient">CHUYỂN HOÁ Nội dung</span><br>
                        <span class="home-hero__title-white">THÀNH Tài Sản Số Bền Vững</span>
                    </h1>

                    <p class="home-hero__desc">
                        Thay vì "đăng bài cho có", Yani tập trung xây dựng hệ thống&nbsp;nội dung số &amp; content SEO
                        chiến lược cho doanh nghiệp, bám sát hành trình khách hàng,&nbsp;giải thích đúng vấn
                        đề,&nbsp;tăng niềm tin, và&nbsp;đưa người đọc đến bước liên hệ. Phù hợp doanh nghiệp SME muốn
                        tăng trưởng dài hạn, giảm lệ thuộc quảng cáo.
                    </p>

                    <div class="home-hero__actions">
                        <a href="#home-services" class="home-hero__btn-primary" id="btn-xem-giai-phap">Xem giải pháp
                            content</a>
                        <a href="#" class="home-hero__btn-zalo" id="btn-zalo-hero">Nhắn zalo để nhận báo giá</a>
                    </div>

                    <a href="#home-pricing" class="home-hero__link-price" id="link-bang-gia">
                        Xem bảng giá và cách tính chi tiết
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-link.svg" alt="">
                    </a>
                </div>
            </section>

            <!-- ===== PARTNER SECTION (Đối tác phù hợp) ===== -->
            <section class="home-partner" id="home-partner">
                <div class="container">
                    <div class="home-partner__header">
                        <h2 class="home-partner__title-gradient">Đối tác phù hợp</h2>
                        <p class="home-partner__desc">
                            Thay vì "đăng bài cho có", Yani tập trung xây dựng hệ thống&nbsp;nội dung số &amp; content
                            SEO chiến lược cho doanh nghiệp, bám sát hành trình khách hàng,&nbsp;giải thích đúng vấn
                            đề,&nbsp;tăng niềm tin, và&nbsp;đưa người đọc đến bước liên hệ. Phù hợp doanh nghiệp SME
                            muốn tăng trưởng dài hạn, giảm lệ thuộc quảng cáo.
                        </p>
                    </div>

                    <div class="home-partner__grid">
                        <div class="home-partner__card" id="partner-construction">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-xd-nt.svg" alt="" class="home-partner__card-icon">
                            <h4 class="home-partner__card-title">Xây dựng &amp; Nội thất</h4>
                            <p class="home-partner__card-desc">Thể hiện năng lực thi công và tư duy thẩm mỹ qua từng
                                bài viết kỹ thuật.</p>
                        </div>

                        <div class="home-partner__card" id="partner-ymyl">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-y-te.svg" alt="" class="home-partner__card-icon">
                            <h4 class="home-partner__card-title">Y tế &amp; Sức khỏe (YMYL)</h4>
                            <p class="home-partner__card-desc">Tuân thủ tiêu chuẩn EEAT. Nội dung minh bạch, chính xác
                                và có trách nhiệm.</p>
                        </div>

                        <div class="home-partner__card" id="partner-b2b">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/icon-business.svg" alt="" class="home-partner__card-icon">
                            <h4 class="home-partner__card-title">B2B Services</h4>
                            <p class="home-partner__card-desc">Tuân thủ tiêu chuẩn EEAT. Nội dung minh bạch, chính xác
                                và có trách nhiệm.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== PAIN POINTS SECTION ===== -->
            <section class="home-pain" id="home-pain">
                <div class="container">
                    <div class="home-pain__header">
                        <h3 class="home-pain__title-accent">BẠN CÓ ĐANG GẶP TÌNH HUỐNG NÀY?</h3>
                        <h2 class="home-pain__title-main">CONTENT CÓ RỒI NHƯNG <span class="text-green">KHÔNG RA
                                KHÁCH?</span></h2>
                        <p class="home-pain__subtitle">Nếu bạn thấy "đúng mình", phần dưới sẽ giúp bạn chọn hướng
                            triển khai phù hợp (không cần gói dài ngay từ đầu).</p>
                    </div>

                    <!-- Row 1: narrow (503) + wide (707) -->
                    <div class="home-pain__row">
                        <div class="home-pain__card home-pain__card--narrow" id="pain-traffic">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/pain-icon-1.svg" alt="" class="home-pain__card-icon">
                            <h4 class="home-pain__card-title">Đăng bài đều nhưng traffic "mỏng"</h4>
                            <p class="home-pain__card-desc">Nội dung thiếu đúng "câu hỏi người tìm kiếm", nên khó lên
                                nhóm từ khóa mang lại nhu cầu thật.</p>
                            <a href="#" class="home-pain__card-link">
                                Xem hướng triển khai phù hợp
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                            </a>
                        </div>
                        <div class="home-pain__card home-pain__card--wide" id="pain-rank">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/pain-icon-4.svg" alt="" class="home-pain__card-icon">
                            <h4 class="home-pain__card-title">Bài lên rồi tụt / không bền</h4>
                            <p class="home-pain__card-desc">Thiếu độ sâu, thiếu cấu trúc, thiếu tín hiệu tin cậy khiến
                                bài khó giữ top khi cạnh tranh tăng.</p>
                            <a href="#" class="home-pain__card-link">
                                Tối ưu theo hướng bền vững
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- Row 2: wide (707) + narrow (503) -->
                    <div class="home-pain__row">
                        <div class="home-pain__card home-pain__card--wide" id="pain-industry">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/pain-icon-2.svg" alt="" class="home-pain__card-icon">
                            <h4 class="home-pain__card-title">Ngành khó (B2B/YMYL) nên "không dám viết đại"</h4>
                            <p class="home-pain__card-desc">Cần nội dung đúng ngữ cảnh ngành, diễn đạt rõ ràng và hạn
                                chế sai sót gây hiểu nhầm.</p>
                            <a href="#" class="home-pain__card-link">
                                Xem tiêu chuẩn nội dung
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                            </a>
                        </div>
                        <div class="home-pain__card home-pain__card--narrow" id="pain-team">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/pain-icon-3.svg" alt="" class="home-pain__card-icon">
                            <h4 class="home-pain__card-title">Team in-house thiếu thời gian /<br>thiếu chuyên môn ngành
                            </h4>
                            <p class="home-pain__card-desc">Vấn đề thường không nằm ở "viết", mà ở việc chọn đúng chủ
                                đề, đúng dàn ý, đúng tiêu chuẩn bàn giao.</p>
                            <a href="#" class="home-pain__card-link">
                                Gửi ngành để tư vấn nhanh
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="home-pain__cta-row">
                        <a href="#" class="home-pain__cta-btn" id="btn-zalo-pain">Nhắn zalo để được định hướng
                            nhanh</a>
                        <p class="home-pain__cta-hint">Gợi ý: bạn có thể bắt đầu bằng 1–3 bài test để đánh giá chất
                            lượng trước.</p>
                    </div>
                </div>
            </section>

            <!-- ===== CASE STUDY SECTION ===== -->
            <section class="home-case" id="home-case">
                <div class="container">
                    <div class="home-case__wrapper">
                        <div class="home-case__left">
                            <h2 class="home-case__label">CASE STUDY</h2>
                            <p class="home-case__title-accent">Hiệu quả&nbsp;Thực tế</p>
                            <p class="home-case__subtitle">Các case dưới đây đại diện cho mô hình triển khai và tư duy
                                tối ưu, không phải cam kết kết quả cố định.</p>
                            <p class="home-case__desc">
                                Dưới đây là ví dụ cách chúng tôi đo và tối ưu hiệu quả nội dung, tập trung vào traffic
                                chất lượng, hành vi người dùng và khả năng tạo lead, thay vì chỉ chạy theo số lượng bài
                                viết hay thứ hạng ngắn hạn.
                            </p>
                            <p class="home-case__note">(Số liệu minh họa dựa trên các dự án cùng phân khúc)</p>
                        </div>

                        <div class="home-case__right">
                            <!-- Case card 1 -->
                            <div class="home-case__card" id="case-construction" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/case-study-card-1.svg');">
                                <div class="home-case__card-info">
                                    <div class="home-case__card-company">
                                        <div>
                                            <p class="home-case__card-company-name">Construction Firm</p>
                                            <p class="home-case__card-company-desc">Dự án xây dựng</p>
                                        </div>
                                        <span class="home-case__card-stat-highlight">Growth</span>
                                    </div>
                                    <div class="home-case__card-stat-divider"></div>
                                    <div class="home-case__card-stats">
                                        <div class="home-case__card-stat">
                                            <span class="home-case__card-stat-label">MỤC TIÊU</span>
                                            <span class="home-case__card-stat-value">Tăng Organic Traffic</span>
                                        </div>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/Rectangle 27.png" class="home-case__card-arrow" alt="">
                                        <div class="home-case__card-stat">
                                            <span class="home-case__card-stat-label">KẾT QUẢ</span>
                                            <span class="home-case__card-stat-value">Traffic</span>
                                            <span class="home-case__card-big-number">X3</span>
                                        </div>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/Rectangle 27.png" class="home-case__card-arrow" alt="">
                                        <div class="home-case__card-stat">
                                            <span class="home-case__card-stat-label">TÁC ĐỘNG<br>KINH DOANH</span>
                                            <span class="home-case__card-stat-highlight">Tăng Leads chất lượng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Case card 2 -->
                            <div class="home-case__card" id="case-education" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/case-study-card-2.svg');">
                                <div class="home-case__card-info">
                                    <div class="home-case__card-company">
                                        <div>
                                            <p class="home-case__card-company-name">B2B Education</p>
                                            <p class="home-case__card-company-desc">Đào tạo Tiếng Anh</p>
                                        </div>
                                        <span class="home-case__card-stat-highlight">Niche Authority</span>
                                    </div>
                                    <div class="home-case__card-stat-divider"></div>
                                    <div class="home-case__card-stats">
                                        <div class="home-case__card-stat">
                                            <span class="home-case__card-stat-label">VẤN ĐỀ</span>
                                            <span class="home-case__card-stat-value">Traffic dậm chân tại chỗ</span>
                                        </div>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/Rectangle 27.png" class="home-case__card-arrow" alt="">
                                        <div class="home-case__card-stat">
                                            <span class="home-case__card-stat-label">GIẢI PHÁP</span>
                                            <span class="home-case__card-stat-value">Topic Cluster</span>
                                        </div>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/Rectangle 27.png" class="home-case__card-arrow" alt="">
                                        <div class="home-case__card-stat">
                                            <span class="home-case__card-stat-label">HIỆU QUẢ</span>
                                            <span class="home-case__card-stat-highlight">Phủ sóng<br>từ khóa
                                                ngành</span>
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
                        <h2 class="home-services__title">DỊCH VỤ CỐT LÕI</h2>
                        <p class="home-services__accent">GIẢI PHÁP <span class="home-services__accent-gradient">NỘI DUNG
                                CHUYÊN BIỆT</span></p>
                        <p class="home-services__desc">
                            Không phải doanh nghiệp nào cũng cần cùng một loại content.<br>
                            Chúng tôi xây dựng từng giải pháp nội dung để giải quyết đúng vấn đề SEO và<br>
                            chuyển đổi mà team marketing đang gặp phải.
                        </p>
                    </div>
                    <div class="home-services__cards">
                        <!-- Circle 1 -->
                        <div class="home-services__card" id="service-topic-cluster">
                            <h3 class="home-services__card-title">Triển khai<br>Topic Cluster</h3>
                            <p class="home-services__card-desc">Xây dựng mạng lưới nội dung bao phủ chủ đề. Giúp Google
                                hiểu bạn là chuyên gia số 1 trong ngành.</p>
                            <div class="home-services__card-feature">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt="">
                                <span>Bài Pillar chuyên sâu</span>
                            </div>
                        </div>

                        <!-- Circle 2 (Middle, Elevated) -->
                        <div class="home-services__card home-services__card--featured" id="service-eeat">
                            <span class="home-services__card-tag">Recommended</span>
                            <h3 class="home-services__card-title">Content Chuẩn EEAT</h3>
                            <p class="home-services__card-desc">Nội dung 100% Human-written. Tập trung vào trải nghiệm
                                người dùng và intent tìm kiếm thực tế.</p>
                            <div class="home-services__card-feature">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt="">
                                <span>Tối ưu Search Intent</span>
                            </div>
                        </div>

                        <!-- Circle 3 -->
                        <div class="home-services__card" id="service-audit">
                            <h3 class="home-services__card-title">Audit &amp;<br>Tối ưu Content</h3>
                            <p class="home-services__card-desc">Làm mới nội dung cũ (Content Refresh), cập nhật thông
                                tin để lấy lại thứ hạng từ đối thủ.</p>
                            <div class="home-services__card-feature">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt="">
                                <span>Bài Pillar chuyên sâu</span>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="home-services__link" id="link-chi-tiet-dv">
                        Xem chi tiết dịch vụ
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-link-service.svg" alt="">
                    </a>
                </div>
            </section>

            <!-- ===== PRICING SECTION (Ước lượng chi phí nhanh) ===== -->
            <section class="home-pricing" id="home-pricing">
                <div class="container">
                    <div class="home-pricing__header">
                        <h2 class="home-pricing__title">ƯỚC LƯỢNG CHI PHÍ NHANH</h2>
                        <p class="home-pricing__accent">CHỌN MỨC ĐẦU TƯ <span class="home-pricing__accent-gradient">THEO
                                MỤC TIÊU</span></p>
                        <p class="home-pricing__desc">
                            Thay vì hỏi "một bài bao nhiêu tiền", doanh nghiệp thường chốt theo mục tiêu:<br>
                            Duy trì – Tăng trưởng – Chuyển đổi. Bạn có thể bắt đầu nhỏ với bài test trước.
                        </p>
                    </div>

                    <div class="home-pricing__grid">
                        <!-- Maintenance -->
                        <div class="home-pricing__card" id="pricing-maintenance">
                            <p class="home-pricing__card-level">DUY TRÌ</p>
                            <h3 class="home-pricing__card-name">Maintenance</h3>
                            <p class="home-pricing__card-desc">Phù hợp đăng đều, chủ đề thông dụng, tối ưu cơ bản để giữ
                                nền nội dung.</p>
                            <div class="home-pricing__card-divider"></div>
                            <ul class="home-pricing__card-features">
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Bố cục rõ, dễ đọc</li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Không trùng lặp nội dung</li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Bàn giao nhanh theo lịch</li>
                            </ul>
                            <a href="#" class="home-pricing__card-btn home-pricing__card-btn--outline"
                                id="btn-price-maint">Xem mức giá tham khảo</a>
                        </div>

                        <!-- Growth SEO -->
                        <div class="home-pricing__card home-pricing__card--featured" id="pricing-growth">
                            <p class="home-pricing__card-level">TĂNG TRƯỞNG</p>
                            <h3 class="home-pricing__card-name">Growth SEO</h3>
                            <p class="home-pricing__card-desc">Phù hợp kéo traffic chất lượng cho blog doanh nghiệp, bài
                                dịch vụ cạnh tranh vừa.</p>
                            <div class="home-pricing__card-divider"></div>
                            <ul class="home-pricing__card-features">
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Nghiên cứu nhu cầu tìm kiếm
                                </li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Dàn ý duyệt trước (tùy bài)
                                </li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Tối ưu điều hướng người dùng
                                </li>
                            </ul>
                            <a href="#" class="home-pricing__card-btn home-pricing__card-btn--primary"
                                id="btn-price-growth">Xem bảng giá chi tiết</a>
                        </div>

                        <!-- Authority -->
                        <div class="home-pricing__card" id="pricing-authority">
                            <p class="home-pricing__card-level">CHUYỂN ĐỔI</p>
                            <h3 class="home-pricing__card-name">Authority</h3>
                            <p class="home-pricing__card-desc">Dành cho bài "đinh" cần lập luận, ví dụ sát ngành và điều
                                hướng liên hệ/mua.</p>
                            <div class="home-pricing__card-divider"></div>
                            <ul class="home-pricing__card-features">
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Góc nhìn/insight khác biệt
                                </li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Tối ưu CTA theo mục tiêu</li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/check-green.svg" alt=""> Báo giá theo phạm vi</li>
                            </ul>
                            <a href="#" class="home-pricing__card-btn home-pricing__card-btn--outline"
                                id="btn-price-auth">Nhận tư vấn mức phù hợp</a>
                        </div>
                    </div>

                    <p class="home-pricing__hint">Gợi ý để dễ chốt: bắt đầu bằng 1–3 bài test (có trả phí), nghiệm
                        thu theo checklist rõ ràng, sau đó mới mở rộng số lượng.</p>
                </div>
            </section>

            <!-- ===== CONTENT STANDARDS SECTION (Tiêu chuẩn Nội dung) ===== -->
            <section class="home-standards" id="home-standards">
                <div class="container">
                    <div class="home-standards__header">
                        <p class="home-standards__accent">TIÊU CHUẨN <span class="home-standards__accent-gradient">NỘI DUNG</span></p>
                        <p class="home-standards__desc">
                            Trong bối cảnh <span class="home-standards__desc-highlight">NỘI DUNG AI</span> ngày càng phổ biến, chúng tôi tập trung vào <strong>chất lượng, tính chính xác</strong><br>
                            <strong>và trải nghiệm người đọc</strong> để nội dung thực sự mang lại giá trị dài hạn cho doanh nghiệp.
                        </p>
                    </div>

                    <div class="home-standards__grid">
                        <div class="home-standards__card" id="standard-editing">
                            <div class="home-standards__card-left">
                                <h4 class="home-standards__card-title">BIÊN TẬP</h4>
                                <p class="home-standards__card-badge">Có kiểm duyệt &amp; nghiệm thu</p>
                            </div>
                            <div class="home-standards__card-right">
                                <p class="home-standards__card-subtitle">Biên tập đa tầng</p>
                                <p class="home-standards__card-desc">Mỗi bài viết đều được rà soát về cấu trúc SEO và nội dung chuyên môn, đảm bảo dễ đọc, đúng ngữ cảnh và phù hợp ngành.</p>
                            </div>
                        </div>

                        <div class="home-standards__card" id="standard-content">
                            <div class="home-standards__card-left">
                                <h4 class="home-standards__card-title">NỘI DUNG</h4>
                                <p class="home-standards__card-badge">Không đạo văn, không nội dung rác</p>
                            </div>
                            <div class="home-standards__card-right">
                                <p class="home-standards__card-subtitle">Tập trung Search Intent</p>
                                <p class="home-standards__card-desc">Nội dung được xây dựng dựa trên câu hỏi và nhu cầu thực tế của người tìm kiếm, tránh viết lan man hay nhồi nhét từ khóa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== PROCESS SECTION (Quy trình làm việc) ===== -->
            <section class="home-process" id="home-process">
                <div class="container">
                    <div class="home-process__header">
                        <p class="home-process__accent">QUY TRÌNH <span class="home-process__accent-gradient">LÀM VIỆC</span></p>
                        <p class="home-process__desc">
                            Chúng tôi triển khai nội dung theo quy trình rõ ràng, có người chịu trách nhiệm ở từng bước, tập<br>
                            trung vào <strong>hiệu quả SEO và khả năng tạo lead</strong>, thay vì chỉ xuất bản bài viết theo cảm tính.
                        </p>
                    </div>

                    <div class="home-process__line" aria-hidden="true"></div>

                    <div class="home-process__steps">
                        <div class="home-process__step" id="process-step-01">
                            <div class="home-process__step-marker">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/step-line-1.svg" alt="" aria-hidden="true" class="home-process__step-line">
                            </div>
                            <span class="home-process__step-number">01</span>
                            <div class="home-process__step-content">
                                <h4 class="home-process__step-title">Nghiên cứu &amp; định<br>hướng nội dung</h4>
                                <p class="home-process__step-desc">Phân tích nhu cầu tìm kiếm, đối thủ và nội dung hiện có của website để xác định chủ đề cần làm trước, tránh viết lan man hoặc trùng lặp.</p>
                            </div>
                        </div>

                        <div class="home-process__step" id="process-step-02">
                            <div class="home-process__step-marker">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/step-line-2.svg" alt="" aria-hidden="true" class="home-process__step-line">
                            </div>
                            <span class="home-process__step-number">02</span>
                            <div class="home-process__step-content">
                                <h4 class="home-process__step-title">Xây dựng bộ từ<br>khóa ưu tiên</h4>
                                <p class="home-process__step-desc">Lựa chọn từ khóa dựa trên mức độ liên quan đến dịch vụ, khả năng chuyển đổi và giai đoạn ra quyết định của người tìm kiếm.</p>
                            </div>
                        </div>

                        <div class="home-process__step" id="process-step-03">
                            <div class="home-process__step-marker">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/step-line-3.svg" alt="" aria-hidden="true" class="home-process__step-line">
                            </div>
                            <span class="home-process__step-number">03</span>
                            <div class="home-process__step-content">
                                <h4 class="home-process__step-title">Sản xuất &amp;<br>biên tập nội dung</h4>
                                <p class="home-process__step-desc">Nội dung được viết dựa trên outline rõ ràng, biên tập về chuyên môn và cấu trúc SEO, đảm bảo dễ đọc, đúng ngữ cảnh và phù hợp ngành.</p>
                            </div>
                        </div>

                        <div class="home-process__step" id="process-step-04">
                            <div class="home-process__step-marker">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/step-line-4.svg" alt="" aria-hidden="true" class="home-process__step-line">
                            </div>
                            <span class="home-process__step-number">04</span>
                            <div class="home-process__step-content">
                                <h4 class="home-process__step-title">Theo dõi, báo cáo<br>&amp; tối ưu</h4>
                                <p class="home-process__step-desc">Theo dõi hiệu quả nội dung dựa trên traffic, hành vi người dùng và tín hiệu chuyển đổi; cập nhật và tối ưu định kỳ theo dữ liệu thực tế.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== BLOG SECTION (Góc nhìn chuyên gia) ===== -->
            <section class="home-blog" id="home-blog">
                <div class="container">
                    <div class="home-blog__header">
                        <p class="home-blog__accent">GÓC NHÌN CHUYÊN GIA</p>
                        <h2 class="home-blog__title">BÀI VIẾT MỚI VỀ <span class="home-blog__title-gradient">CONTENT SEO &amp; UX</span></h2>
                        <p class="home-blog__desc">
                            Tổng hợp các phân tích ngắn, dễ áp dụng cho doanh nghiệp: chọn mức đầu<br>
                            tư nội dung, tối ưu intent, và giảm rủi ro "viết xong để đó".
                        </p>
                        <a href="#" class="home-blog__view-all" id="link-all-blog">
                            XEM TOÀN BỘ BÀI VIẾT
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                        </a>
                    </div>

                    <div class="home-blog__grid">
                        <!-- Blog card 1 -->
                        <div class="home-blog__card" id="blog-card-1">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/blog-card-img-1.svg" alt="" class="home-blog__card-img">
                            <div class="home-blog__card-body">
                                <h3 class="home-blog__card-title">Cách chọn mức giá viết bài chuẩn SEO để không "mua
                                    sai"</h3>
                                <p class="home-blog__card-desc">Checklist chọn gói theo mục tiêu: traffic – lead –
                                    branding. Tránh phí ẩn và giảm chi phí sửa lại.</p>
                                <a href="#" class="home-blog__card-link">
                                    ĐỌC BÀI
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Blog card 2 -->
                        <div class="home-blog__card" id="blog-card-2">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/blog-card-img-2.svg" alt="" class="home-blog__card-img">
                            <div class="home-blog__card-body">
                                <h3 class="home-blog__card-title">Nội dung "người thật" khác gì nội dung tổng hợp?</h3>
                                <p class="home-blog__card-desc">Dấu hiệu nhận biết bài có insight, ví dụ sát ngành và
                                    tạo tin tưởng — nhất là B2B/YMYL.</p>
                                <a href="#" class="home-blog__card-link">
                                    ĐỌC BÀI
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Blog card 3 -->
                        <div class="home-blog__card" id="blog-card-3">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/blog-card-img-3.svg" alt="" class="home-blog__card-img">
                            <div class="home-blog__card-body">
                                <h3 class="home-blog__card-title">5 thay đổi UX nhỏ giúp bài viết tăng thời gian đọc
                                </h3>
                                <p class="home-blog__card-desc">Tối ưu bố cục và điều hướng CTA giúp tăng trải nghiệm
                                    đọc cho người dùng.</p>
                                <a href="#" class="home-blog__card-link">
                                    ĐỌC BÀI
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/arrow-right-green.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== CTA SECTION ===== -->
            <section class="home-cta" id="home-cta">
                <div class="home-cta__background">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/cta-icon.svg" alt="" aria-hidden="true" class="home-cta__bg-img">
                </div>
                <div class="container">
                    <h2 class="home-cta__title-white">Đừng để Website đánh mất</h2>
                    <p class="home-cta__title-gradient">Lợi thế Cạnh tranh</p>
                    <p class="home-cta__desc">
                        Đối thủ đang xây dựng Authority mỗi ngày. Hãy bắt đầu ngay hôm nay để dẫn đầu thị trường ngách của bạn.
                    </p>

                    <div class="home-cta__actions">
                        <a href="#" class="home-cta__btn-primary" id="btn-cta-consult">Đăng ký tư vấn chiến lược</a>
                        <a href="#" class="home-cta__btn-zalo" id="btn-cta-zalo">Xem quy trình và bảng giá</a>
                    </div>
                </div>
            </section>
        </main>

<?php
get_footer();
