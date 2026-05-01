<?php
/**
 * The footer template
 *
 * @package Yani_Content
 * @since 1.0.0
 */
?>

    <!-- ====== SITE FOOTER ====== -->
    <footer id="site-footer" class="site-footer">
        <!-- Decorative top border -->
        <div class="footer-border-top"></div>

        <div class="container">
            <!-- Footer Main Grid -->
            <div class="footer-main">
                <!-- Column 1: Brand -->
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo" aria-label="Yani Content - Trang chủ">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-footer.svg" alt="Yani Content" width="182" height="25">
                    </a>
                    <p class="footer-brand-desc">
                        Yani Content là đơn vị tiên phong trong giải pháp nội dung chuẩn EEAT. Chúng tôi giúp doanh nghiệp B2B xây dựng vị thế chuyên gia (Authority) thông qua chiến lược nội dung bền vững.
                    </p>
                </div>

                <!-- Services + About: shared row, 2 columns -->
                <div class="footer-nav-row">
                    <div class="footer-nav-col">
                        <h3 class="footer-nav-title">DỊCH VỤ MŨI NHỌN</h3>
                        <ul class="footer-nav-list" id="footer-services-list">
                            <li><a href="<?php echo esc_url(home_url('/dich-vu/content-seo-chien-luoc')); ?>">Content SEO Chiến lược</a></li>
                            <li><a href="<?php echo esc_url(home_url('/dich-vu/viet-bai-chuan-eeat')); ?>">Viết bài chuẩn EEAT</a></li>
                            <li><a href="<?php echo esc_url(home_url('/dich-vu/audit-toi-uu-noi-dung')); ?>">Audit &amp; Tối ưu nội dung</a></li>
                            <li><a href="<?php echo esc_url(home_url('/dich-vu/content-marketing-b2b')); ?>">Content Marketing B2B</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav-col">
                        <h3 class="footer-nav-title">VỀ CHÚNG TÔI</h3>
                        <ul class="footer-nav-list" id="footer-about-list">
                            <li><a href="<?php echo esc_url(home_url('/ve-chung-toi#triet-ly')); ?>">Triết lý nội dung</a></li>
                            <li><a href="<?php echo esc_url(home_url('/thu-vien-tri-thuc')); ?>">Thư viện tri thức</a></li>
                            <li><a href="<?php echo esc_url(home_url('/lien-he')); ?>">Yêu cầu báo giá</a></li>
                            <li><a href="<?php echo esc_url(home_url('/chinh-sach-bao-mat')); ?>">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 4: Contact -->
                <div class="footer-nav-col footer-contact-col">
                    <h3 class="footer-nav-title">KẾT NỐI NGAY</h3>
                    <ul class="footer-contact-list" id="footer-contact-list">
                        <li>
                            <a href="mailto:yanicontent@gmail.com">yanicontent@gmail.com</a>
                        </li>
                        <li>
                            <a href="tel:0902623078">0902.623.078 (Zalo)</a>
                        </li>
                        <li>
                            <span>Thành phố Hồ Chí Minh</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; <?php echo date('Y'); ?> Yani Content Master. All rights reserved.</p>
                </div>
                <div class="footer-legal">
                    <p>MST: 0123456789</p>
                    <p>Giấy phép số: 123/GP-BTTTT cấp bởi Bộ Thông tin và Truyền thông.</p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
