<div class="formulario_campo">
    <label class="formulario_label" for="nombre">Nombre</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="nombre" 
        name="nombre" 
        placeholder="Ej. Ganado Hembra" 
        value="<?php echo s($animal->nombre); ?>">
</div>
<div class="formulario_campo">
    <label class="formulario_label" for="raza">Raza</label>
    <input 
        class="formulario_input" 
        type="text" 
        id="raza" 
        name="raza" 
        placeholder="Ej: Brahman"
        value="<?php echo s($animal->raza); ?>">
</div>