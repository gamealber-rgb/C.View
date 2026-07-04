(function () {
    const filter = document.getElementById('floor-filter');
    if (!filter) return;

    const cards = document.querySelectorAll('.room-card');
    const emptyState = document.getElementById('rooms-empty');
    const buttons = filter.querySelectorAll('.floor-filter-btn');

    function applyFilter(floor) {
        let visibleCount = 0;

        cards.forEach(function (card) {
            const cardFloor = card.getAttribute('data-floor');
            const show = floor === 'all' || cardFloor === floor;
            card.classList.toggle('hidden', !show);
            if (show) visibleCount++;
        });

        if (emptyState) {
            emptyState.classList.toggle('hidden', visibleCount > 0);
        }
    }

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const floor = this.getAttribute('data-floor');

            buttons.forEach(function (b) {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });

            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            applyFilter(floor);
        });
    });
})();
