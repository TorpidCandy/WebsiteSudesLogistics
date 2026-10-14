document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector("[data-hero-slider]");

    if (!slider) {
        return;
    }

    const slides = Array.from(slider.querySelectorAll("[data-hero-slide]"));
    const indicators = Array.from(slider.querySelectorAll("[data-hero-indicator]"));
    const previousButton = slider.querySelector("[data-hero-prev]");
    const nextButton = slider.querySelector("[data-hero-next]");

    if (slides.length < 2) {
        return;
    }

    let activeIndex = slides.findIndex(function (slide) {
        return slide.classList.contains("is-active");
    });

    if (activeIndex < 0) {
        activeIndex = 0;
    }

    let autoplayTimer = null;
    let userInteracted = false;

    function renderActiveSlide(nextIndex) {
        if (nextIndex < 0 || nextIndex >= slides.length) {
            return;
        }

        activeIndex = nextIndex;

        slides.forEach(function (slide, index) {
            const isActive = index === activeIndex;

            slide.classList.toggle("is-active", isActive);
            slide.setAttribute("aria-hidden", String(!isActive));
        });

        indicators.forEach(function (indicator, index) {
            const isActive = index === activeIndex;

            indicator.classList.toggle("is-active", isActive);
            indicator.setAttribute("aria-pressed", String(isActive));
        });

        previousButton.disabled = activeIndex === 0;
        nextButton.disabled = activeIndex === slides.length - 1;
    }

    function stopAutoplay() {
        userInteracted = true;

        if (autoplayTimer !== null) {
            window.clearTimeout(autoplayTimer);
            autoplayTimer = null;
        }
    }

    function scheduleNextSlide() {
        const prefersReducedMotion = window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches;

        if (
            prefersReducedMotion ||
            userInteracted ||
            activeIndex >= slides.length - 1
        ) {
            return;
        }

        autoplayTimer = window.setTimeout(function () {
            autoplayTimer = null;
            renderActiveSlide(activeIndex + 1);
            scheduleNextSlide();
        }, 4500);
    }

    previousButton.addEventListener("click", function () {
        stopAutoplay();
        renderActiveSlide(activeIndex - 1);
    });

    nextButton.addEventListener("click", function () {
        stopAutoplay();
        renderActiveSlide(activeIndex + 1);
    });

    indicators.forEach(function (indicator) {
        indicator.addEventListener("click", function () {
            stopAutoplay();
            renderActiveSlide(Number(indicator.dataset.heroIndicator));
        });
    });

    renderActiveSlide(activeIndex);
    scheduleNextSlide();
});