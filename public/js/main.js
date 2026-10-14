document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector("[data-hero-slider]");

    if (!slider) {
        return;
    }

    const slides = Array.from(
        slider.querySelectorAll("[data-hero-slide]")
    );

    if (slides.length < 2) {
        return;
    }

    const activeIndex = slides.findIndex(function (slide) {
        return slide.classList.contains("is-active");
    });

    if (activeIndex < 0 || activeIndex >= slides.length - 1) {
        return;
    }

    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if (prefersReducedMotion) {
        return;
    }

    window.setTimeout(function () {
        slides[activeIndex].classList.remove("is-active");
        slides[activeIndex].setAttribute("aria-hidden", "true");

        const nextSlide = slides[activeIndex + 1];

        nextSlide.classList.add("is-active");
        nextSlide.setAttribute("aria-hidden", "false");
    }, 4500);
});