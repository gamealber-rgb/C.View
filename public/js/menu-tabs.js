(function () {
    const tabList = document.getElementById('menu-tabs');
    if (!tabList) return;

    const tabs = tabList.querySelectorAll('.menu-tab');
    const panels = {
        food: document.getElementById('panel-food'),
        drinks: document.getElementById('panel-drinks'),
    };

    function showTab(name) {
        tabs.forEach(function (tab) {
            const isActive = tab.getAttribute('data-tab') === name;
            tab.classList.toggle('active', isActive);
            tab.setAttribute('aria-selected', String(isActive));
        });

        Object.keys(panels).forEach(function (key) {
            const panel = panels[key];
            if (!panel) return;
            const isActive = key === name;
            panel.classList.toggle('hidden', !isActive);
            panel.hidden = !isActive;
        });
    }

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            showTab(this.getAttribute('data-tab'));
        });
    });
})();
