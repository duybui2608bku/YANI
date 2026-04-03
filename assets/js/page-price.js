/**
 * Yani Content - Price Page JavaScript
 */
(function () {
    'use strict';

    // FAQ Toggle
    document.querySelectorAll('.price-faq__question').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = this.closest('.price-faq__item');
            var isOpen = item.classList.contains('price-faq__item--open');

            // Close all
            document.querySelectorAll('.price-faq__item--open').forEach(function (openItem) {
                openItem.classList.remove('price-faq__item--open');
                openItem.querySelector('.price-faq__question').setAttribute('aria-expanded', 'false');
            });

            // Toggle current
            if (!isOpen) {
                item.classList.add('price-faq__item--open');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });

    // Smooth scroll for TOC links
    document.querySelectorAll('.price-toc__item').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Intersection Observer for fade-in animations
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.price-summary__card, .price-invest__card, .price-includes__card, .price-choose__block, .price-faq__item').forEach(function (el) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Add visible class styles
    var style = document.createElement('style');
    style.textContent = '.is-visible { opacity: 1 !important; transform: translateY(0) !important; }';
    document.head.appendChild(style);
})();
