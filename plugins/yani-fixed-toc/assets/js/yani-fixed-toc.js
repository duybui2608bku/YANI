(function () {
    function initFixedToc(root) {
        var toggle = root.querySelector('.yani-fixed-toc__toggle');
        var close = root.querySelector('.yani-fixed-toc__close');
        var links = Array.prototype.slice.call(root.querySelectorAll('.yani-fixed-toc__link'));
        var headings = links
            .map(function (link) {
                var id = link.getAttribute('href').replace('#', '');
                return document.getElementById(id);
            })
            .filter(Boolean);

        function setOpen(isOpen) {
            root.classList.toggle('is-open', isOpen);
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        }

        function setActive(id) {
            links.forEach(function (link) {
                link.classList.toggle('is-active', link.getAttribute('href') === '#' + id);
            });
        }

        toggle.addEventListener('click', function () {
            setOpen(!root.classList.contains('is-open'));
        });

        close.addEventListener('click', function () {
            setOpen(false);
            toggle.focus();
        });

        links.forEach(function (link) {
            link.addEventListener('click', function (event) {
                var targetId = link.getAttribute('href').replace('#', '');
                var target = document.getElementById(targetId);

                if (!target) {
                    return;
                }

                event.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                history.pushState(null, '', '#' + targetId);
                setActive(targetId);
                setOpen(false);
            });
        });

        document.addEventListener('click', function (event) {
            if (!root.contains(event.target)) {
                setOpen(false);
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                setOpen(false);
            }
        });

        if ('IntersectionObserver' in window && headings.length) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        setActive(entry.target.id);
                    }
                });
            }, {
                rootMargin: '-20% 0px -65% 0px',
                threshold: 0.01
            });

            headings.forEach(function (heading) {
                observer.observe(heading);
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        var root = document.querySelector('[data-yani-fixed-toc]');

        if (root) {
            initFixedToc(root);
        }
    });
}());
