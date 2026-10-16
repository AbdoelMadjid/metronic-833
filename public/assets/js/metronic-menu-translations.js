    let translations = window.metronicMenuTranslations ?? {};
    const menuTextNodes = new Map();
    let currentLocale = document.documentElement.lang;

    const isNavigationNode = (node) => {
        const element = node.nodeType === Node.TEXT_NODE ? node.parentElement : node;

        return Boolean(element?.closest('#kt_app_sidebar_menu, #kt_app_header_menu'));
    };

    const translateTextNode = (node) => {
        if (node.nodeType !== Node.TEXT_NODE || !isNavigationNode(node)) {
            return;
        }

        if (!menuTextNodes.has(node)) {
            menuTextNodes.set(node, node.nodeValue);
        }

        const originalText = menuTextNodes.get(node);
        const dictionary = translations;
        const label = originalText.trim().replace(/\s+/g, ' ');
        const translatedLabel = dictionary[label]
            ?? label.split(/(\s+)/).map((word) => dictionary[word] ?? word).join('');
        const leadingWhitespace = originalText.match(/^\s*/)?.[0] ?? '';
        const trailingWhitespace = originalText.match(/\s*$/)?.[0] ?? '';
        const translatedText = leadingWhitespace + translatedLabel + trailingWhitespace;

        if (node.nodeValue !== translatedText) {
            node.nodeValue = translatedText;
        }
    };

    const translateTree = (node) => {
        if (node.nodeType === Node.TEXT_NODE) {
            translateTextNode(node);

            return;
        }

        const textWalker = document.createTreeWalker(node, NodeFilter.SHOW_TEXT);
        let textNode;

        while ((textNode = textWalker.nextNode())) {
            translateTextNode(textNode);
        }
    };

    const translateObserver = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            mutation.addedNodes.forEach(translateTree);
        });
    });

    translateObserver.observe(document.documentElement, { childList: true, subtree: true });

    const applyLocale = (locale, localeTranslations) => {
        currentLocale = locale;
        translations = localeTranslations ?? {};
        document.documentElement.lang = locale;

        menuTextNodes.forEach((_, node) => {
            translateTextNode(node);
        });

        const selectedOption = document.querySelector('[data-language-option="' + locale + '"]');
        const currentFlag = document.querySelector('[data-language-current-flag]');

        if (selectedOption && currentFlag) {
            currentFlag.src = selectedOption.dataset.languageFlag;
            currentFlag.alt = selectedOption.dataset.languageName;
        }

        document.querySelectorAll('[data-language-option]').forEach((option) => {
            option.classList.toggle('active', option.dataset.languageOption === locale);
        });
    };

    translateTree(document.documentElement);

    document.addEventListener('submit', async (event) => {
        const form = event.target.closest('#kt_header_language_toggle ~ .menu form');

        if (!form) {
            return;
        }

        event.preventDefault();

        const submitButton = form.querySelector('[data-language-option]');

        if (!submitButton) {
            return;
        }

        submitButton.disabled = true;

        try {
            const formData = new FormData(form);
            formData.set('locale', submitButton.value);

            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    Accept: 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
                credentials: 'same-origin',
            });

            if (!response.ok) {
                throw new Error('Language could not be changed.');
            }

            const result = await response.json();
            applyLocale(result.locale, result.translations);
        } catch {
            const localeInput = document.createElement('input');
            localeInput.type = 'hidden';
            localeInput.name = 'locale';
            localeInput.value = submitButton.value;
            form.append(localeInput);
            form.submit();
        } finally {
            submitButton.disabled = false;
        }
    });
