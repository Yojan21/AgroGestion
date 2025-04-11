<div class="formulario_campo">
    <label class="formulario_label" for="nombre">Nombre</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="nombre" 
        name="nombre" 
        placeholder="Nombre del lote" 
        value="<?php echo s($lote->nombre); ?>">
</div>
<div class="formulario_campo">
    <label class="formulario_label" for="descripcion">Descripción</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="descripcion" 
        name="descripcion" 
        placeholder="Ej: Lote ubicado entre las fincas de Pedro y Pablo"
        value="<?php echo s($lote->descripcion); ?>">
</div>