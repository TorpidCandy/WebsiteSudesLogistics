/* DOM readiness — tất cả khởi tạo nằm trong listener này */

document.addEventListener("DOMContentLoaded", function () {

    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* Hero slider */

    const heroElement = document.querySelector("[data-hero-slider]");

    function syncHeroAccessibility(swiper) {
        swiper.slides.forEach(function (slide, index) {
            slide.setAttribute("aria-hidden", String(index !== swiper.activeIndex));
        });
    }

    if (window.Swiper && heroElement) {
        const heroSwiper = new Swiper(heroElement, {
            effect: "fade",
            speed: prefersReducedMotion ? 0 : 2600,
            loop: false,
            slidesPerView: 1,
            slidesPerGroup: 1,
            fadeEffect: {
                crossFade: true
            },
            autoplay: prefersReducedMotion ? false : {
                delay: 4500,
                disableOnInteraction: true,
                stopOnLastSlide: true
            },
            on: {
                init: syncHeroAccessibility,
                slideChange: syncHeroAccessibility
            }
        });

        syncHeroAccessibility(heroSwiper);
    }

    /* Navigation carousel */

    const navigationElement = document.querySelector("[data-nav-slider]");

    function syncNavigationButtons(swiper) {
        const previousButton = document.querySelector("[data-nav-prev]");
        const nextButton = document.querySelector("[data-nav-next]");

        if (previousButton) {
            previousButton.disabled = swiper.isLocked || swiper.isBeginning;
        }

        if (nextButton) {
            nextButton.disabled = swiper.isLocked || swiper.isEnd;
        }
    }

    if (window.Swiper && navigationElement) {
        const navigationSwiper = new Swiper(navigationElement, {
            slidesPerView: "auto",
            slidesPerGroup: 1,
            speed: 450,
            loop: false,
            watchOverflow: true,
            navigation: {
                prevEl: "[data-nav-prev]",
                nextEl: "[data-nav-next]"
            },
            on: {
                init: syncNavigationButtons,
                slideChange: syncNavigationButtons,
                resize: syncNavigationButtons,
                lock: syncNavigationButtons,
                unlock: syncNavigationButtons,
                update: syncNavigationButtons
            }
        });

        const navigationCollapse = document.querySelector("#sudesNavbar");

        if (navigationCollapse) {
            navigationCollapse.addEventListener("shown.bs.collapse", function () {
                navigationSwiper.update();
                syncNavigationButtons(navigationSwiper);
            });
        }

        syncNavigationButtons(navigationSwiper);
    }

    /* Dropdown behavior */

    const siteNavigation = document.querySelector(".site-navigation");
    const dropdownPanel = document.querySelector("[data-nav-dropdown-panel]");
    const dropdownTriggers = Array.from(
        document.querySelectorAll("[data-nav-dropdown-trigger]")
    );
    const dropdownContents = dropdownPanel
        ? Array.from(dropdownPanel.querySelectorAll("[data-nav-dropdown-content]"))
        : [];

    let dropdownCloseTimer = null;

    function scheduleDropdownClose() {
        window.clearTimeout(dropdownCloseTimer);

        dropdownCloseTimer = window.setTimeout(function () {
            if (dropdownPanel) {
                dropdownPanel.classList.remove("is-open");
                dropdownPanel.setAttribute("aria-hidden", "true");
            }

            dropdownTriggers.forEach(function (trigger) {
                trigger.setAttribute("aria-expanded", "false");
            });

            dropdownCloseTimer = window.setTimeout(function () {
                dropdownContents.forEach(function (content) {
                    content.hidden = true;
                });
            }, 280);
        }, 160);
    }

    function openDropdown(trigger) {
        if (!siteNavigation || !dropdownPanel) {
            return;
        }

        window.clearTimeout(dropdownCloseTimer);

        const key = trigger.dataset.navDropdownTrigger;

        dropdownContents.forEach(function (content) {
            content.hidden = content.dataset.navDropdownContent !== key;
        });

        dropdownTriggers.forEach(function (item) {
            item.setAttribute("aria-expanded", String(item === trigger));
        });

        const navigationRect = siteNavigation.getBoundingClientRect();
        const triggerRect = trigger.getBoundingClientRect();
        const maximumLeft = Math.max(
            0,
            siteNavigation.clientWidth - dropdownPanel.offsetWidth - 8
        );
        const preferredLeft = triggerRect.left - navigationRect.left;

        dropdownPanel.style.left = `${Math.min(
            Math.max(0, preferredLeft),
            maximumLeft
        )}px`;

        dropdownPanel.setAttribute("aria-hidden", "false");
        dropdownPanel.classList.add("is-open");
    }

    dropdownTriggers.forEach(function (trigger) {
        trigger.addEventListener("mouseenter", function () {
            openDropdown(trigger);
        });

        trigger.addEventListener("focus", function () {
            openDropdown(trigger);
        });

        trigger.addEventListener("click", function () {
            openDropdown(trigger);
        });

        trigger.addEventListener("mouseleave", scheduleDropdownClose);

        trigger.addEventListener("focusout", function (event) {
            if (!dropdownPanel || !dropdownPanel.contains(event.relatedTarget)) {
                scheduleDropdownClose();
            }
        });

        trigger.addEventListener("keydown", function (event) {
            if (event.key === "Escape") {
                scheduleDropdownClose();
                trigger.focus();
            }
        });
    });

    if (dropdownPanel) {
        dropdownPanel.addEventListener("mouseenter", function () {
            window.clearTimeout(dropdownCloseTimer);
        });

        dropdownPanel.addEventListener("focusin", function () {
            window.clearTimeout(dropdownCloseTimer);
        });

        dropdownPanel.addEventListener("mouseleave", scheduleDropdownClose);

        dropdownPanel.addEventListener("focusout", function (event) {
            if (!dropdownPanel.contains(event.relatedTarget)) {
                scheduleDropdownClose();
            }
        });
    }

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            scheduleDropdownClose();
        }
    });

    document.addEventListener("pointerdown", function (event) {
        if (
            siteNavigation &&
            !siteNavigation.contains(event.target) &&
            dropdownPanel &&
            !dropdownPanel.contains(event.target)
        ) {
            scheduleDropdownClose();
        }
    });

    /* Search panel */

    const searchWrap = document.querySelector(".site-search-wrap");
    const searchTrigger = document.querySelector("[data-search-trigger]");

    if (searchWrap && searchTrigger) {
        function setSearchExpanded(expanded) {
            searchTrigger.setAttribute("aria-expanded", String(expanded));
        }

        searchWrap.addEventListener("mouseenter", function () {
            setSearchExpanded(true);
        });

        searchWrap.addEventListener("mouseleave", function () {
            if (!searchWrap.contains(document.activeElement)) {
                setSearchExpanded(false);
            }
        });

        searchWrap.addEventListener("focusin", function () {
            setSearchExpanded(true);
        });

        searchWrap.addEventListener("focusout", function (event) {
            if (
                !searchWrap.contains(event.relatedTarget) &&
                !searchWrap.matches(":hover")
            ) {
                setSearchExpanded(false);
            }
        });
    }

    /* Customer testimonial slider */

    const testimonialsElement = document.querySelector("[data-testimonials-slider]");

    if (window.Swiper && testimonialsElement) {
        new Swiper(testimonialsElement, {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 18,
            speed: prefersReducedMotion ? 0 : 500,
            watchOverflow: true,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24
                }
            },
            pagination: {
                el: "[data-testimonials-pagination]",
                clickable: true
            }
        });
    }

    /* AOS — initialize only when motion is allowed */

    if (window.AOS && !prefersReducedMotion) {
        AOS.init({
            duration: 700,
            easing: "ease-out-cubic",
            once: true,
            offset: 60,
            mirror: false
        });
        document.body.classList.add("aos-ready");
    }

    /* Back-to-top */

    const backToTop = document.querySelector("[data-back-to-top]");

    if (backToTop) {
        function syncBackToTop() {
            const visible = window.scrollY > 360;

            backToTop.classList.toggle("is-visible", visible);
            backToTop.setAttribute("aria-hidden", String(!visible));
            backToTop.tabIndex = visible ? 0 : -1;
        }

        backToTop.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: prefersReducedMotion ? "auto" : "smooth"
            });
        });

        window.addEventListener("scroll", syncBackToTop, { passive: true });
        syncBackToTop();
    }

});