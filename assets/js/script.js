// Navbar Scroll Effect
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('nav-scrolled');
        navbar.classList.remove('py-6');
    } else {
        navbar.classList.remove('nav-scrolled');
        navbar.classList.add('py-6');
    }
});

// Intersection Observer para Animações
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, observerOptions);

document.querySelectorAll('.reveal').forEach(el => {
    observer.observe(el);
});

// Menu mobile
const mobileBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', () => {
        const open = mobileMenu.classList.toggle('hidden') === false;
        mobileBtn.setAttribute('aria-expanded', String(open));
        if (open) navbar.classList.add('nav-scrolled');
    });
}

// Conversão: cliques no WhatsApp (configure "whatsapp_click" como evento-chave no GA4)
document.querySelectorAll('[data-wa]').forEach(el => {
    el.addEventListener('click', () => {
        if (typeof gtag === 'function') {
            gtag('event', 'whatsapp_click', { location: el.dataset.wa, page: location.pathname });
        }
    });
});

// FAQ (acordeão) - elementos com [data-faq]
document.querySelectorAll('[data-faq] > button').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.parentElement;
        const wasOpen = item.classList.contains('open');
        document.querySelectorAll('[data-faq].open').forEach(i => i.classList.remove('open'));
        if (!wasOpen) item.classList.add('open');
        btn.setAttribute('aria-expanded', String(!wasOpen));
    });
});
