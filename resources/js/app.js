// Mobile nav toggle
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('nav-toggle');
    const menu = document.getElementById('nav-menu');
    if (btn && menu) {
        btn.addEventListener('click', () => menu.classList.toggle('hidden'));
    }

    // Back to top
    const btt = document.getElementById('back-to-top');
    if (btt) {
        window.addEventListener('scroll', () => {
            const show = window.scrollY > 300;
            btt.classList.toggle('opacity-0', !show);
            btt.classList.toggle('pointer-events-none', !show);
        });
        btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }
    const targets = document.querySelectorAll(
        'section > .container > *, .grid > *, .space-y-5 > *, .space-y-10 > *'
    );
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(el => {
            if (el.isIntersecting) {
                el.target.classList.add('visible');
                observer.unobserve(el.target);
            }
        });
    }, { threshold: 0.1 });

    targets.forEach((el, i) => {
        el.classList.add('reveal');
        el.style.transitionDelay = `${(i % 6) * 80}ms`;
        observer.observe(el);
    });
});
