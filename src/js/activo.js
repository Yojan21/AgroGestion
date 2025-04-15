(function() {

    const urlCompleta = window.location.pathname;
    const enlace = document.querySelectorAll(`a[href="${urlCompleta}"]`);

    if(enlace.length > 1) {
        enlace.forEach(function(elemento) {
            if(elemento.href.includes("dashboard/")) {
                console.log("Enlace encontrado en el dashboard");                enlace[1].classList.add("dashboard_enlace-activo");
            }
        });
    }
    else {

        if(enlace[0].href.includes("dashboard/")) {
            enlace[0].classList.add("dashboard_enlace-activo");
        }
    }
    

})();