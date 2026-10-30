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
