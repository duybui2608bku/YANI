/**
 * Page Service - JavaScript
 * FAQ accordion and interactions
 *
 * @package Yani_Content
 * @since 1.0.0
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        initFaqAccordion();
        initScrollAnimations();
    });

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.service-faq__item');

        faqItems.forEach(function (item) {
            const question = item.querySelector('.service-faq__question');

            question.addEventListener('click', function () {
                const isOpen = item.classList.contains('service-faq__item--open');
                const toggle = item.querySelector('.service-faq__toggle');
                const imgDir = (typeof yaniData !== 'undefined' && yaniData.themeUrl)
                    ? yaniData.themeUrl + '/assets/images/service/'
                    : '';

                // Close all
                faqItems.forEach(function (otherItem) {
                    if (otherItem !== item) {
                        otherItem.classList.remove('service-faq__item--open');
                        const otherQuestion = otherItem.querySelector('.service-faq__question');
                        otherQuestion.setAttribute('aria-expanded', 'false');
                        const otherToggle = otherItem.querySelector('.service-faq__toggle');
                        if (otherToggle && imgDir) {
                            otherToggle.src = imgDir + 'faq-toggle.svg';
                        }
                    }
                });

                // Toggle current
                if (isOpen) {
                    item.classList.remove('service-faq__item--open');
                    question.setAttribute('aria-expanded', 'false');
                    if (toggle && imgDir) {
                        toggle.src = imgDir + 'faq-toggle.svg';
                    }
                } else {
                    item.classList.add('service-faq__item--open');
                    question.setAttribute('aria-expanded', 'true');
                    if (toggle && imgDir) {
                        toggle.src = imgDir + 'faq-toggle-open.svg';
                    }
                }
            });
        });
    }

    /**
     * Scroll-triggered fade-in animations
     */
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll(
            '.service-packages__card, ' +
            '.service-problems__card, ' +
            '.service-features__card, ' +
            '.service-testimonials__card, ' +
            '.service-commitment__card, ' +
            '.service-faq__item, ' +
            '.service-comparison__table-row'
        );

        if (!animatedElements.length) return;

        // Add initial hidden state
        animatedElements.forEach(function (el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(function (el) {
            observer.observe(el);
        });
    }
})();
