document.addEventListener("DOMContentLoaded", () => {
    // Initialize Mobile Drawer JS
    initMobileDrawer();
    initHeaderScroll();
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
