(function() {
    let iconos = document.querySelectorAll(".dashboard_enlace");

    iconos.forEach(icono => {
        icono.addEventListener("mouseenter", function() {
            const nombre = document.createElement("P");
            const texto = icono.textContent;
            nombre.classList.add("dashboard_icono-nombre");
            nombre.innerText = texto;
            icono.appendChild(nombre);
        });

        icono.addEventListener("mouseleave", function() {
            const nombre = icono.querySelector(".dashboard_icono-nombre");
            if (nombre) {
                icono.removeChild(nombre);
            }
        });

    });

})()