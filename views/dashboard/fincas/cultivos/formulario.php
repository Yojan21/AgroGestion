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
    <label class="formulario_label" for="descripcion">Variedad</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="descripcion" 
        name="descripcion" 
        placeholder="Ej: Caturra"
        value="<?php echo s($cultivo->descripcion); ?>">
</div>