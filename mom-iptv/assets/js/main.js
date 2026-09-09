/**
 * Mom IPTV Theme - Main JavaScript
 * Handles: Mobile nav, Pricing tabs, Reviews carousel, FAQ accordion, Scroll animations
 */

(function () {
    'use strict';

    // ============================================
    // MOBILE NAV TOGGLE
    // ============================================
    const burgerBtn = document.getElementById('burger-btn');
    const mobileNav = document.getElementById('mobile-nav');
    const header    = document.getElementById('site-header');

    if (burgerBtn && mobileNav) {
        burgerBtn.addEventListener('click', () => {
            const isOpen = mobileNav.classList.toggle('open');
            burgerBtn.setAttribute('aria-expanded', String(isOpen));
            mobileNav.setAttribute('aria-hidden',   String(!isOpen));
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close on link click
        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('open');
                burgerBtn.setAttribute('aria-expanded', 'false');
                mobileNav.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            });
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!header.contains(e.target) && mobileNav.classList.contains('open')) {
                mobileNav.classList.remove('open');
                burgerBtn.setAttribute('aria-expanded', 'false');
                mobileNav.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        });
    }

    // ============================================
    // PRICING: DEVICE TABS + CURRENCY SWITCHER
    // ============================================
    const deviceTabs    = document.querySelectorAll('.device-tab');
    const currencyBtns  = document.querySelectorAll('.currency-btn');
    const planRows      = document.querySelectorAll('.plan-row');
    const planCtaBtn    = document.getElementById('pricing-cta-btn');

    let selectedDevices  = 1;
    let selectedCurrency = 'usd';

    const currencySymbols = { usd: '$', eur: '€', gbp: '£' };

    function updatePricing() {
        planRows.forEach(row => {
            const months      = parseInt(row.dataset.months, 10);
            const rawPrice    = parseFloat(row.dataset[selectedCurrency]);
            const symbol      = currencySymbols[selectedCurrency];
            const totalPrice  = rawPrice * selectedDevices;
            const perMonth    = months > 1 ? (totalPrice / months).toFixed(2) : null;

            const priceEl = row.querySelector('[data-price]');
            const perEl   = row.querySelector('[data-per]');

            if (priceEl) priceEl.textContent = symbol + totalPrice.toFixed(2);
            if (perEl)   perEl.textContent   = perMonth ? symbol + perMonth + '/month' : '';

            // Update href
            const base = row.dataset.subscribeBase;
            if (base) {
                row.href = `${base}?months=${months}&devices=${selectedDevices}&currency=${selectedCurrency}`;
            }
        });

        if (planCtaBtn) {
            const base = planRows[3]?.dataset?.subscribeBase;
            if (base) planCtaBtn.href = `${base}?months=12&devices=${selectedDevices}&currency=${selectedCurrency}`;
        }
    }

    // Device tab clicks
    deviceTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            deviceTabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');
            selectedDevices = parseInt(tab.dataset.devices, 10);
            updatePricing();
        });
    });

    // Currency button clicks
    currencyBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            currencyBtns.forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-checked', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-checked', 'true');
            selectedCurrency = btn.dataset.currency;
            updatePricing();
        });
    });

    // ============================================
    // REVIEWS CAROUSEL
    // ============================================
    const carousel    = document.getElementById('review-carousel');
    const prevBtn     = document.getElementById('review-prev');
    const nextBtn     = document.getElementById('review-next');

    if (carousel && prevBtn && nextBtn) {
        const slides    = carousel.querySelectorAll('.review-slide');
        let currentIdx  = 0;

        function getSlidesVisible() {
            if (window.innerWidth < 640) return 1;
            if (window.innerWidth < 900) return 2;
            return 3;
        }

        function updateCarousel() {
            const visible   = getSlidesVisible();
            const total     = slides.length;
            const maxIdx    = total - visible;
            currentIdx      = Math.max(0, Math.min(currentIdx, maxIdx));

            const slideWidth  = slides[0].offsetWidth;
            const gap         = 20; // 1.25rem gap
            const offset      = currentIdx * (slideWidth + gap);

            carousel.style.transform = `translateX(-${offset}px)`;

            prevBtn.disabled = currentIdx <= 0;
            nextBtn.disabled = currentIdx >= maxIdx;
        }

        prevBtn.addEventListener('click', () => { currentIdx--; updateCarousel(); });
        nextBtn.addEventListener('click', () => { currentIdx++; updateCarousel(); });

        window.addEventListener('resize', () => {
            currentIdx = 0;
            updateCarousel();
        });

        updateCarousel();

        // Touch/swipe support
        let touchStartX = 0;
        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        carousel.addEventListener('touchend', (e) => {
            const delta = touchStartX - e.changedTouches[0].screenX;
            if (Math.abs(delta) > 50) {
                if (delta > 0) { currentIdx++; } else { currentIdx--; }
                updateCarousel();
            }
        });
    }

    // ============================================
    // FAQ ACCORDION
    // ============================================
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-question');
        if (!btn) return;

        btn.addEventListener('click', () => {
            const isOpen  = item.classList.contains('open');

            // Close all others
            faqItems.forEach(fi => {
                fi.classList.remove('open');
                const fb = fi.querySelector('.faq-question');
                if (fb) fb.setAttribute('aria-expanded', 'false');
            });

            // Toggle current
            if (!isOpen) {
                item.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });

    // ============================================
    // INSTALLATION GUIDE TABS
    // ============================================
    const guideDeviceTabs = document.querySelectorAll('.guide-device-tab');

    guideDeviceTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            guideDeviceTabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');

            // Hide all guide panels
            document.querySelectorAll('[id^="guide-"]').forEach(panel => {
                panel.style.display = 'none';
            });

            // Show selected panel
            const target = document.getElementById('guide-' + tab.dataset.guideDevice);
            if (target) target.style.display = 'block';
        });
    });

    // ============================================
    // SCROLL ANIMATIONS (Intersection Observer)
    // ============================================
    if ('IntersectionObserver' in window) {
        const revealElements = document.querySelectorAll('.reveal');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    // Stagger children within the same parent
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, i * 80);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => observer.observe(el));
    } else {
        // Fallback: show all
        document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
    }

    // ============================================
    // SMOOTH ANCHOR SCROLLING
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (href.length > 1) {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('.site-header')?.offsetHeight || 72;
                    const top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 16;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            }
        });
    });

    // ============================================
    // HEADER SCROLL EFFECT
    // ============================================
    const siteHeader = document.getElementById('site-header');
    if (siteHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                siteHeader.style.boxShadow = '0 4px 24px rgba(0,0,0,0.4)';
            } else {
                siteHeader.style.boxShadow = 'none';
            }
        }, { passive: true });
    }

    // ============================================
    // PLAN ROW HOVER ARROW COLOR
    // ============================================
    planRows.forEach(row => {
        row.addEventListener('mouseenter', () => {
            const arrow = row.querySelector('.plan-arrow');
            if (arrow) arrow.style.stroke = 'var(--brand-cyan)';
        });
        row.addEventListener('mouseleave', () => {
            const arrow = row.querySelector('.plan-arrow');
            if (arrow) arrow.style.stroke = '';
        });
    });

})();
