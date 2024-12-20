document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.headerContainer');
    
    if (!header) return;

    let lastScrollTop = 0;
    let isHeaderVisible = true;
    const headerHeight = header.offsetHeight;

    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // Check if we're scrolling down and hide the header
        if (currentScroll > lastScrollTop && currentScroll > headerHeight) {
            if (isHeaderVisible) {
                header.style.transform = 'translateY(-100%)'; // Hide header
                header.style.opacity = '0';
                isHeaderVisible = false;
            }
        } 
        // Check if we're scrolling up and show the header
        else if (currentScroll < lastScrollTop) {
            if (!isHeaderVisible) {
                header.style.transform = 'translateY(0)'; // Show header
                header.style.opacity = '1';
                isHeaderVisible = true;
            }
        }

        // Update the last scroll position for comparison
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });

    // Add the toggle functionality for the hamburger menu
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navMenu');

    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
});
