(function() {
    let boton = document.querySelector("#boton");
    let navegacion = document.querySelector("#navegacion_principal");

    const modal = document.createElement("DIV");
    modal.classList.add("modal");
    boton.addEventListener("click",abrirModal);

    function abrirModal() {
        document.body.classList.add('body-modal-open');
        navegacion.classList.add("open");

        modal.appendChild(navegacion);
        modal.classList.add("modal-open");

        const closeBtn = document.createElement("BUTTON");
        closeBtn.innerText = "X";
        closeBtn.classList.add("btn_cerrar");
        closeBtn.onclick = cerrarModal;

        modal.appendChild(closeBtn);
        modal.classList.remove("fadeOut");

        document.body.appendChild(modal);
    }

    function cerrarModal() {
        document.body.classList.remove('body-modal-open');
        modal.classList.add('fadeOut');
        navegacion.classList.remove("open");
        setTimeout(() => {
            modal.classList.remove("modal-open");
            document.body.removeChild(modal);
            document.body.classList.remove('body-modal-open');
        }, 500);
        modal.remove();
        location.reload();
    }

})();