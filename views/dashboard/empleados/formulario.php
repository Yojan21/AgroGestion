<div class="formulario_campo">
    <label for="nombre" class="formulario_label">Nombre</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Nombre de tu empleado"
        id="nombre"
        name="nombre"
        value="<?php echo $empleado->nombre ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="cedula" class="formulario_label">Cédula</label>
    <input 
        type="number"
        class="formulario_input"
        placeholder="Cédula"
        id="cedula"
        name="cedula"
        value="<?php echo $empleado->cedula ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="telefono" class="formulario_label">Teléfono</label>
    <input 
        type="tel"
        class="formulario_input"
        placeholder="Teléfono"
        id="telefono"
        name="telefono"
        value="<?php echo $empleado->telefono ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="cuenta" class="formulario_label">Tipo de cuenta</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Ej. Ahorros"
        id="cuenta"
        name="cuenta"
        value="<?php echo $empleado->cuenta ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="banco" class="formulario_label">Banco</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Ej. Bancolombia"
        id="banco"
        name="banco"
        value="<?php echo $empleado->banco ?? ''; ?>"
    >
</div>

<div class="formulario_campo">
    <label for="numero" class="formulario_label">Número de cuenta</label>
    <input 
        type="text"
        class="formulario_input"
        placeholder="Número de cuenta"
        id="numero"
        name="numero"
        value="<?php echo $empleado->numero ?? ''; ?>"
    >
</div>