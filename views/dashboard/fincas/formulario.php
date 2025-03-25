<div class="formulario_campo">
    <label for="nombre" class="formulario_label">Nombre</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Nombre de tu finca"
        id="nombre"
        name="nombre"
        value="<?php echo $finca->nombre ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="departamento" class="formulario_label">Departamento</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Departamento"
        id="departamento"
        name="departamento"
        value="<?php echo $finca->departamento ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="municipio" class="formulario_label">Municipio</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Municipio"
        id="municipio"
        name="municipio"
        value="<?php echo $finca->municipio ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="vereda" class="formulario_label">Vereda</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Vereda"
        id="vereda"
        name="vereda"
        value="<?php echo $finca->vereda ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="extension" class="formulario_label">Extensión (hectáreas)</label>
    <input 
        type="number"
        class="formulario_input"
        placeholder="Ej. 15"
        id="extension"
        name="extension"
        value="<?php echo $finca->extension ?? ''; ?>"
    >
</div>