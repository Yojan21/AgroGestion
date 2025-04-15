(function() {

    const urlCompleta = window.location.pathname;
    const enlace = document.querySelectorAll(`a[href="${urlCompleta}"]`);

    if(enlace.length > 1) {
        enlace[1].classList.add("dashboard_enlace-activo");
    }
    else {
        enlace[0].classList.add("dashboard_enlace-activo");
    }

})();