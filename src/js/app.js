function ajustarAside() {
    const aside = document.querySelector('.dashboard_sidebar');
    const footer = document.querySelector('.footer');
    const contenido = document.querySelector('.contenido');

    if (window.innerWidth < 768) { // Solo aplica en móviles
        const footerRect = footer.getBoundingClientRect();
        const asideHeight = aside.offsetHeight;

        // Calcula la posición máxima del aside
        const maxBottom = footerRect.top - asideHeight;

        // Si el aside está sobre el footer, lo ajusta
        if (maxBottom < window.innerHeight) {
            aside.style.bottom = `${window.innerHeight - footerRect.top}px`;
        } else {
            aside.style.bottom = '0'; // Lo coloca en la parte inferior de la pantalla
        }
    } else {
        aside.style.bottom = ''; // Restablece el valor en desktop/tablet
    }
}

// Ajusta el aside al cargar la página y al cambiar el tamaño de la ventana
window.addEventListener('load', ajustarAside);
window.addEventListener('resize', ajustarAside);
window.addEventListener('scroll', ajustarAside);