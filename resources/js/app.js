import './bootstrap';

function matchCardHeights() {
    const groups = {};

    document.querySelectorAll('[data-match-height]').forEach((el) => {
        const key = el.getAttribute('data-match-height');
        (groups[key] ||= []).push(el);
    });

    Object.values(groups).forEach((cards) => {
        cards.forEach((card) => (card.style.minHeight = ''));
        const tallest = Math.max(...cards.map((card) => card.offsetHeight));
        cards.forEach((card) => (card.style.minHeight = `${tallest}px`));
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', matchCardHeights);
} else {
    matchCardHeights();
}

window.addEventListener('resize', () => {
    clearTimeout(window.__matchCardHeightsTimer);
    window.__matchCardHeightsTimer = setTimeout(matchCardHeights, 150);
});

function initCarousels() {
    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        const track = carousel.querySelector('[data-carousel-track]');
        const slides = Array.from(track?.children ?? []);
        const prevBtn = carousel.querySelector('[data-carousel-prev]');
        const nextBtn = carousel.querySelector('[data-carousel-next]');
        const dots = Array.from(carousel.querySelectorAll('[data-carousel-dot]'));
        const interval = parseInt(carousel.getAttribute('data-interval'), 10) || 5000;

        if (slides.length < 2) {
            return;
        }

        let current = 0;
        let timer = null;

        function render() {
            track.style.transform = `translateX(-${current * 100}%)`;
            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-orange-500', i === current);
                dot.classList.toggle('bg-zinc-300', i !== current);
            });
        }

        function goTo(index) {
            current = (index + slides.length) % slides.length;
            render();
        }

        function resetAutoplay() {
            clearInterval(timer);
            timer = setInterval(() => goTo(current + 1), interval);
        }

        prevBtn?.addEventListener('click', () => {
            goTo(current - 1);
            resetAutoplay();
        });

        nextBtn?.addEventListener('click', () => {
            goTo(current + 1);
            resetAutoplay();
        });

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                goTo(i);
                resetAutoplay();
            });
        });

        render();
        resetAutoplay();
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCarousels);
} else {
    initCarousels();
}
