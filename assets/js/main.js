/**
 * Yani Content Theme - Main JavaScript
 *
 * @package Yani_Content
 * @since 1.0.0
 */

(function () {
    'use strict';

    /**
     * DOM Ready
     */
    document.addEventListener('DOMContentLoaded', function () {
        initHeader();
        initFaqAccordion();
        initContactForm();
    });

    /**
     * Site Header: mobile toggle, scroll effect, keyboard support
     */
    function initHeader() {
        var header = document.getElementById('site-header');
        var toggle = document.getElementById('header-menu-toggle');
        var mobileMenu = document.getElementById('header-mobile-menu');

        if (!header || !toggle || !mobileMenu) return;

        // Mobile menu toggle
        toggle.addEventListener('click', function () {
            var isOpen = toggle.getAttribute('aria-expanded') === 'true';

            if (isOpen) {
                closeMobileMenu(toggle, mobileMenu);
            } else {
                openMobileMenu(toggle, mobileMenu);
            }
        });

        // Close on ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
                closeMobileMenu(toggle, mobileMenu);
                toggle.focus();
            }
        });

        // Close when clicking a mobile nav link
        var mobileLinks = mobileMenu.querySelectorAll('.header-mobile-nav__link');
        mobileLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                closeMobileMenu(toggle, mobileMenu);
            });
        });

        // Auto-close mobile menu on resize to desktop
        window.addEventListener('resize', function () {
            if (window.innerWidth > 991 && toggle.getAttribute('aria-expanded') === 'true') {
                closeMobileMenu(toggle, mobileMenu);
            }
        });

        // Scroll effect: add class when scrolled
        var scrollThreshold = 20;
        window.addEventListener('scroll', function () {
            if (window.scrollY > scrollThreshold) {
                header.classList.add('header--scrolled');
            } else {
                header.classList.remove('header--scrolled');
            }
        }, { passive: true });
    }

    function openMobileMenu(toggle, menu) {
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Đóng menu');
        menu.setAttribute('aria-hidden', 'false');
        menu.classList.add('mobile-menu--open');
        document.body.classList.add('mobile-menu-active');
    }

    function closeMobileMenu(toggle, menu) {
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Mở menu');
        menu.setAttribute('aria-hidden', 'true');
        menu.classList.remove('mobile-menu--open');
        document.body.classList.remove('mobile-menu-active');
    }

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.faq-item');

        if (!faqItems.length) return;

        // SVG icons for toggle states
        const openIcon = '<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="27.5" cy="27.5" r="27" fill="none" stroke="url(#grad-border-open)" stroke-width="0.5"/><path d="M20.81 31.04L27.5 24.35L34.19 31.04" stroke="#5EE0B6" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/><defs><linearGradient id="grad-border-open" x1="0" y1="0" x2="55" y2="55" gradientUnits="userSpaceOnUse"><stop stop-color="#C7D7D1"/><stop offset="0.91" stop-color="#69716E"/></linearGradient></defs></svg>';

        const closedIcon = '<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.25" y="0.25" width="54.5" height="54.5" rx="27.25" fill="url(#grad-bg-closed)" stroke="url(#grad-border-closed)" stroke-width="0.5"/><path d="M20.81 23.96L27.5 30.65L34.19 23.96" stroke="#5EE0B6" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/><defs><linearGradient id="grad-bg-closed" x1="8" y1="4" x2="46" y2="50" gradientUnits="userSpaceOnUse"><stop stop-color="rgba(22,54,41,0)" offset="0.09"/><stop stop-color="rgba(15,42,32,1)" offset="0.91"/></linearGradient><linearGradient id="grad-border-closed" x1="0" y1="0" x2="55" y2="55" gradientUnits="userSpaceOnUse"><stop stop-color="#C7D7D1"/><stop offset="0.91" stop-color="#69716E"/></linearGradient></defs></svg>';

        faqItems.forEach(function (item) {
            const header = item.querySelector('.faq-item__header');
            const toggle = item.querySelector('.faq-item__toggle');

            if (!header) return;

            header.addEventListener('click', function () {
                const isOpen = item.classList.contains('faq-item--open');

                // Close all items
                faqItems.forEach(function (otherItem) {
                    otherItem.classList.remove('faq-item--open');
                    var otherHeader = otherItem.querySelector('.faq-item__header');
                    var otherToggle = otherItem.querySelector('.faq-item__toggle');
                    if (otherHeader) otherHeader.setAttribute('aria-expanded', 'false');
                    if (otherToggle) otherToggle.innerHTML = closedIcon;
                });

                // Toggle current item
                if (!isOpen) {
                    item.classList.add('faq-item--open');
                    header.setAttribute('aria-expanded', 'true');
                    if (toggle) toggle.innerHTML = openIcon;
                }
            });

            // Keyboard support
            header.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    header.click();
                }
            });
        });
    }

    /**
     * Contact Form AJAX Handler
     */
    function initContactForm() {
        const form = document.getElementById('yani-contact-form');
        if (!form) return;

        const submitBtn = form.querySelector('#btn-submit-form');
        const messageEl = document.getElementById('form-message');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Validate
            const fullname = form.querySelector('#contact-fullname');
            const email = form.querySelector('#contact-email');
            const phone = form.querySelector('#contact-phone');

            if (!fullname.value.trim() || !email.value.trim() || !phone.value.trim()) {
                showMessage(messageEl, 'Vui lòng điền đầy đủ các trường bắt buộc (*).', 'error');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value.trim())) {
                showMessage(messageEl, 'Email không hợp lệ. Vui lòng kiểm tra lại.', 'error');
                return;
            }

            // Disable submit button
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Đang gửi...</span>';

            // Prepare form data
            var formData = new FormData(form);
            formData.append('action', 'yani_contact_form');
            formData.append('nonce', typeof yaniData !== 'undefined' ? yaniData.nonce : '');

            // AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', typeof yaniData !== 'undefined' ? yaniData.ajaxUrl : '/wp-admin/admin-ajax.php');

            xhr.onload = function () {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Gửi yêu cầu ngay</span>';

                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        showMessage(messageEl, response.data.message, 'success');
                        form.reset();
                    } else {
                        showMessage(messageEl, response.data.message || 'Có lỗi xảy ra.', 'error');
                    }
                } catch (err) {
                    showMessage(messageEl, 'Có lỗi xảy ra. Vui lòng thử lại sau.', 'error');
                }
            };

            xhr.onerror = function () {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Gửi yêu cầu ngay</span>';
                showMessage(messageEl, 'Lỗi kết nối. Vui lòng thử lại sau.', 'error');
            };

            xhr.send(formData);
        });
    }

    /**
     * Show form message
     */
    function showMessage(el, msg, type) {
        if (!el) return;
        el.className = 'form-message form-message--' + type;
        el.textContent = msg;
        el.style.display = 'block';

        // Auto hide after 5 seconds
        setTimeout(function () {
            el.style.display = 'none';
        }, 5000);
    }

})();
