document.addEventListener("DOMContentLoaded", () => {
    initMobileDrawer();
    initHeaderScroll();
    initContactForm();
});

function initMobileDrawer() {
    const mobileDrawer = document.getElementById('mobile-drawer');
    const drawerOverlay = document.getElementById('drawer-overlay');
    const openMenuBtn = document.getElementById('open-menu-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');

    // Function to open drawer
    const openDrawer = () => {
        mobileDrawer.classList.add('active');
        drawerOverlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
    };

    // Function to close drawer
    const closeDrawer = () => {
        mobileDrawer.classList.remove('active');
        drawerOverlay.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    };

    // Event Listeners
    if (openMenuBtn) {
        openMenuBtn.addEventListener('click', openDrawer);
    }
    
    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', closeDrawer);
    }
    
    if (drawerOverlay) {
        // Close menu if user clicks exactly on the overlay
        drawerOverlay.addEventListener('click', closeDrawer);
    }
}

function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;
    
    // Check initial scroll position
    if (window.scrollY > 20) {
        header.classList.add('scrolled');
    }
    
    // Toggle on scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

function initContactForm() {
    const form = document.querySelector('.contact-form');
    if (!form || typeof amaContact === 'undefined') {
        return;
    }

    const messageEl = document.getElementById('contact-form-message');
    const submitBtn = form.querySelector('.btn-submit');
    const btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (!form.reportValidity()) {
            return;
        }

        const originalLabel = btnText ? btnText.textContent : '';
        if (submitBtn) {
            submitBtn.disabled = true;
        }
        if (btnText) {
            btnText.textContent = '送信中…';
        }
        if (messageEl) {
            messageEl.hidden = true;
            messageEl.textContent = '';
            messageEl.classList.remove('form-message--error', 'form-message--success');
        }

        const params = new URLSearchParams();
        params.set('action', 'ama_contact_submit');
        params.set('nonce', amaContact.nonce);
        params.append('name', form.querySelector('#name')?.value.trim() ?? '');
        params.append('email', form.querySelector('#email')?.value.trim() ?? '');
        params.append('phone', form.querySelector('#phone')?.value.trim() ?? '');
        params.append('postal', form.querySelector('#postal')?.value.trim() ?? '');
        params.append('message', form.querySelector('#message')?.value.trim() ?? '');
        if (form.querySelector('#privacy')?.checked) {
            params.append('privacy', '1');
        }

        try {
            const res = await fetch(amaContact.ajaxUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                },
                body: params.toString(),
                credentials: 'same-origin',
            });

            const data = await res.json().catch(() => ({}));

            if (data.success && messageEl) {
                messageEl.hidden = false;
                messageEl.classList.add('form-message--success');
                messageEl.textContent = data.data?.message || '送信しました。';
                form.reset();
            } else if (messageEl) {
                messageEl.hidden = false;
                messageEl.classList.add('form-message--error');
                messageEl.textContent =
                    data.data?.message || '送信に失敗しました。もう一度お試しください。';
            }
        } catch {
            if (messageEl) {
                messageEl.hidden = false;
                messageEl.classList.add('form-message--error');
                messageEl.textContent = '通信エラーが発生しました。接続を確認してください。';
            }
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
            }
            if (btnText) {
                btnText.textContent = originalLabel;
            }
        }
    });
}
