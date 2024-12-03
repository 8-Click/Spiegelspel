document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.headerContainer');

    if (!header) return;

    let lastScrollTop = 0;
    let isHeaderVisible = true;
    const headerHeight = header.offsetHeight;

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop && currentScroll > headerHeight) {
            if (isHeaderVisible) {
                header.style.transform = 'translateY(-100%)';
                header.style.opacity = '0';
                isHeaderVisible = false;
            }
        } else if (currentScroll < lastScrollTop) {
            if (!isHeaderVisible) {
                header.style.transform = 'translateY(0)';
                header.style.opacity = '1';
                isHeaderVisible = true;
            }
        }

        lastScrollTop = Math.max(currentScroll, 0); // Ensure lastScrollTop is non-negative
    });
});
