<div class="formulario_campo">
    <label class="formulario_label" for="nombre">Nombre</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="nombre" 
        name="nombre" 
        placeholder="Nombre del cultivo" 
        value="<?php echo s($cultivo->nombre); ?>">
</div>
<div class="formulario_campo">
    <label class="formulario_label" for="descripcion">Descripción</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="descripcion" 
        name="descripcion" 
        placeholder="Ej: Cultivo de maiz"
        value="<?php echo s($cultivo->descripcion); ?>">
</div>
<div class="formulario_campo">
    <label class="formulario_label" for="cantidad">Cantidad</label>
    <input 
        class="formulario_input" 
        type="number" 
        id="cantidad" 
        name="cantidad" 
        placeholder="Ej: 1000"
        value="<?php echo s($cultivo->cantidad); ?>">
</div>