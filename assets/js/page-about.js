/**
 * Yani Content - About Page JavaScript
 * Scroll animations and interactivity
 *
 * @package Yani_Content
 * @since 1.0.0
 */

(function () {
    'use strict';

    // ========================================
    // Scroll Reveal Animation (Intersection Observer)
    // ========================================
    function initScrollAnimations() {
        const animElements = document.querySelectorAll(
            '.about-hero__page-title, ' +
            '.about-hero__badge, ' +
            '.about-hero__desc, ' +
            '.about-hero__actions, ' +
            '.about-stats__item, ' +
            '.about-truth__header, ' +
            '.about-truth__pill, ' +
            '.about-truth__solution, ' +
            '.about-principle__wrapper, ' +
            '.about-expertise__title, ' +
            '.about-expertise__desc, ' +
            '.about-expertise__card, ' +
            '.about-process__title, ' +
            '.about-process__subtitle, ' +
            '.about-process__desc, ' +
            '.about-process__step, ' +
            '.about-kpi__header, ' +
            '.about-kpi__item, ' +
            '.about-team__left, ' +
            '.about-team__right, ' +
            '.about-team__testimonial, ' +
            '.about-cta__card'
        );

        // Add initial animation classes
        animElements.forEach(function (el) {
            el.classList.add('fade-in-up');
        });

        // Add directional animations for specific elements
        const leftElements = document.querySelectorAll('.about-team__left');
        leftElements.forEach(function (el) {
            el.classList.remove('fade-in-up');
            el.classList.add('fade-in-left');
        });

        const rightElements = document.querySelectorAll('.about-team__right, .about-team__testimonial');
        rightElements.forEach(function (el) {
            el.classList.remove('fade-in-up');
            el.classList.add('fade-in-right');
        });

        // IntersectionObserver for triggering animations
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.15,
                    rootMargin: '0px 0px -40px 0px',
                }
            );

            animElements.forEach(function (el) {
                observer.observe(el);
            });
        } else {
            // Fallback: show immediately
            animElements.forEach(function (el) {
                el.classList.add('visible');
            });
        }
    }

    // ========================================
    // Counter Animation for Stats
    // ========================================
    function animateCounters() {
        var counters = document.querySelectorAll('.about-stats__number');

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var el = entry.target;
                            var text = el.textContent.trim();
                            var numMatch = text.match(/(\d+)/);

                            if (numMatch) {
                                var target = parseInt(numMatch[1], 10);
                                var suffix = text.replace(numMatch[1], '');
                                var duration = 1500;
                                var start = 0;
                                var startTime = null;

                                function step(timestamp) {
                                    if (!startTime) startTime = timestamp;
                                    var progress = Math.min((timestamp - startTime) / duration, 1);
                                    // Ease out cubic
                                    var eased = 1 - Math.pow(1 - progress, 3);
                                    var current = Math.floor(eased * target);
                                    el.textContent = current + suffix;
                                    if (progress < 1) {
                                        requestAnimationFrame(step);
                                    } else {
                                        el.textContent = text;
                                    }
                                }

                                requestAnimationFrame(step);
                            }

                            observer.unobserve(el);
                        }
                    });
                },
                { threshold: 0.5 }
            );

            counters.forEach(function (counter) {
                observer.observe(counter);
            });
        }
    }

    // ========================================
    // Stagger animation delays for groups
    // ========================================
    function addStaggerDelays() {
        var groups = [
            { selector: '.about-stats__item', delay: 150 },
            { selector: '.about-truth__pill', delay: 200 },
            { selector: '.about-expertise__card', delay: 200 },
            { selector: '.about-process__step', delay: 200 },
            { selector: '.about-kpi__item', delay: 150 },
        ];

        groups.forEach(function (group) {
            var elements = document.querySelectorAll(group.selector);
            elements.forEach(function (el, index) {
                el.style.transitionDelay = index * group.delay + 'ms';
            });
        });
    }

    // ========================================
    // Initialize
    // ========================================
    document.addEventListener('DOMContentLoaded', function () {
        addStaggerDelays();
        initScrollAnimations();
        animateCounters();
    });
})();
