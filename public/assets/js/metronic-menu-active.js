document.addEventListener('DOMContentLoaded', () => {
    const currentUrl = new URL(window.location.href);
    const menus = [
        document.getElementById('kt_app_sidebar_menu'),
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
            if (menu.id === 'kt_app_sidebar_menu') {
                activeSidebarLink = link;
            }

            let menuItem = link.closest('.menu-item');

            while (menuItem && menu.contains(menuItem)) {
                if (isHeaderMenu) {
                    menuItem.classList.add('here', 'menu-here-bg');

                    const parentMenuItem = menuItem.parentElement.closest('.menu-item');

                    // Expand active nested groups (such as eCommerce > Sales)
                    // while leaving top-level dropdowns closed over the page.
                    if (parentMenuItem && menuItem.querySelector(':scope > .menu-sub')) {
                        menuItem.classList.add('show');
                    }
                } else {
                    menuItem.classList.add('here', 'show');
                }

                menuItem = menuItem.parentElement.closest('.menu-item');
            }
        });

    });

    const headerMenu = document.getElementById('kt_app_header_menu');
    const pagesMenu = headerMenu?.querySelector('.menu-item > .menu-sub #kt_app_header_menu_pages_pages')
        ?.closest('.menu-active-bg');

    if (pagesMenu) {
        const tabContent = pagesMenu.querySelector('.tab-content');
        const pagesTabs = pagesMenu.querySelectorAll('.nav-link[data-bs-toggle="tab"][data-bs-target]');
        const pagesPanes = tabContent?.querySelectorAll('.tab-pane') ?? [];
        const routeMatchedPane = [...pagesPanes].find((pane) => pane.querySelector('.menu-link.active'));
        const initiallyActiveTab = [...pagesTabs].find((tab) => tab.classList.contains('active'));
        const activePane = routeMatchedPane
            ?? [...pagesPanes].find((pane) => `#${pane.id}` === initiallyActiveTab?.dataset.bsTarget)
            ?? pagesPanes[0];

        pagesTabs.forEach((tab) => {
            const isActive = activePane && tab.dataset.bsTarget === `#${activePane.id}`;
            tab.classList.toggle('active', Boolean(isActive));
            tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });

        pagesPanes.forEach((pane) => {
            pane.classList.toggle('active', pane === activePane);
        });
    }

    if (activeSidebarLink) {
        activeSidebarLink.parentElement.closest('.collapse')?.classList.add('show');

        const scrollActiveSidebarLink = () => {
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
            const targetScrollTop = Math.max(
                0,
                Math.min(centeredScrollTop, scrollContainer.scrollHeight - scrollContainer.clientHeight),
            );

            if (Math.abs(scrollContainer.scrollTop - targetScrollTop) < 2) {
                return;
            }

            scrollContainer.scrollTo({
                top: targetScrollTop,
                behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
            });
        };

        // Wait for the menu's expanded state to affect layout before scrolling.
        requestAnimationFrame(() => requestAnimationFrame(scrollActiveSidebarLink));
    }
});
