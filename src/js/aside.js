(function() {
    function ajustarAside() {
        const aside = document.querySelector('.dashboard_sidebar');
        const footer = document.querySelector('.footer');
        const contenido = document.querySelector('.contenido');

        // Si alguno de los elementos no existe, detén la ejecución
        if (!aside || !footer || !contenido) return;

        if (window.innerWidth < 768) {
            const footerRect = footer.getBoundingClientRect();
            const asideHeight = aside.offsetHeight;
            const maxBottom = footerRect.top - asideHeight;

            if (maxBottom < window.innerHeight) {
                aside.style.bottom = `${window.innerHeight - footerRect.top}px`;
            } else {
                aside.style.bottom = '0'; // Solo se ejecuta si aside existe
            }
        } else {
            aside.style.bottom = '';
        }
    }

    window.addEventListener('load', ajustarAside);
    window.addEventListener('resize', ajustarAside);
    window.addEventListener('scroll', ajustarAside);
})();
