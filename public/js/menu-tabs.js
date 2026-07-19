(function () {
    const mainTabList = document.getElementById('menu-main-tabs');
    if (!mainTabList) return;

    const mainTabs = mainTabList.querySelectorAll('.menu-main-tab');
    const mainPanels = {
        food: document.getElementById('panel-food'),
        drinks: document.getElementById('panel-drinks'),
    };

    const drinkTabList = document.getElementById('drinks-sub-tabs');
    const drinkTabs = drinkTabList ? drinkTabList.querySelectorAll('.menu-drink-tab') : [];
    const drinkPanels = {
        cold: document.getElementById('panel-cold'),
        hot: document.getElementById('panel-hot'),
        alcohol: document.getElementById('panel-alcohol'),
    };

    function showDrinkTab(name) {
        drinkTabs.forEach(function (tab) {
            const isActive = tab.getAttribute('data-drink-tab') === name;
            tab.classList.toggle('active', isActive);
            tab.setAttribute('aria-selected', String(isActive));
        });

        Object.keys(drinkPanels).forEach(function (key) {
            const panel = drinkPanels[key];
            if (!panel) return;
            const isActive = key === name;
            panel.classList.toggle('hidden', !isActive);
            panel.hidden = !isActive;
        });
    }

    function showMainTab(name) {
        mainTabs.forEach(function (tab) {
            const isActive = tab.getAttribute('data-main-tab') === name;
            tab.classList.toggle('active', isActive);
            tab.setAttribute('aria-selected', String(isActive));
        });

        Object.keys(mainPanels).forEach(function (key) {
            const panel = mainPanels[key];
            if (!panel) return;
            const isActive = key === name;
            panel.classList.toggle('hidden', !isActive);
            panel.hidden = !isActive;
        });
    }

    mainTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            showMainTab(this.getAttribute('data-main-tab'));
        });
    });

    drinkTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            showDrinkTab(this.getAttribute('data-drink-tab'));
        });
    });
})();
