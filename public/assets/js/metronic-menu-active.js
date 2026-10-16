document.addEventListener('DOMContentLoaded', () => {
    const currentUrl = new URL(window.location.href);
    const menus = [
        document.getElementById('#kt_app_sidebar_menu'),
        document.getElementById('kt_app_header_menu'),
    ].filter(Boolean);
    let activeSidebarLink = null;

    menus.forEach((menu) => {
        const isHeaderMenu = menu.id === 'kt_app_header_menu';

        menu.querySelectorAll('.menu-item').forEach((item) => {
            item.classList.remove('here', 'show', 'menu-here-bg');
        });

        menu.querySelectorAll('a[href]').forEach((link) => {
            if (link.matches('[data-bs-toggle="tab"]') || link.getAttribute('href') === '#') {
                return;
            }

            const targetUrl = new URL(link.href, document.baseURI);

            if (targetUrl.origin !== currentUrl.origin || targetUrl.hash) {
                return;
            }

            link.classList.remove('active');

            if (targetUrl.pathname !== currentUrl.pathname) {
                return;
            }

            link.classList.add('active');

            if (menu.id === '#kt_app_sidebar_menu') {
                activeSidebarLink = link;
            }

            let menuItem = link.closest('.menu-item');

            while (menuItem && menu.contains(menuItem)) {
                menuItem.classList.add('here', 'show');

                if (isHeaderMenu) {
                    menuItem.classList.add('menu-here-bg');
                }

                menuItem = menuItem.parentElement.closest('.menu-item');
            }
        });
    });

    if (activeSidebarLink) {
        activeSidebarLink.parentElement.closest('.collapse')?.classList.add('show');

        window.setTimeout(() => {
            const scrollContainer = document.getElementById('kt_app_sidebar_menu_scroll');

            if (!scrollContainer) {
                return;
            }

            const itemRect = activeSidebarLink.getBoundingClientRect();
            const containerRect = scrollContainer.getBoundingClientRect();
            const centeredScrollTop = scrollContainer.scrollTop
                + itemRect.top
                - containerRect.top
                - (scrollContainer.clientHeight - itemRect.height) / 2;

            scrollContainer.scrollTo({
                top: Math.max(0, centeredScrollTop),
                behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
            });
        }, 300);
    }
});
