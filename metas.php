<?php

include_once('config/database.php');
$sql = 'SELECT * FROM meta';

?>
<h1 class="center-align">Metas de vida</h1>
<h3 class="green-text">Agregar una meta</h3>
<div class="row">
    <form id="formMeta">
        <div class="input-field col s12 m4">
            <input id="meta" name="nombre" type="text" class="validate">
            <label for="meta">Meta</label>
        </div>
        <div class="input-field col s12 m4">
            <input id="descripcion" type="text" class="validate">
            <label for="descripcion">Descripcion</label>
        </div>
        <div class="input-field col s12 m4">
            <button type="button" class="waves-effect waves-light btn" id="agregaMeta">Agregar meta
                <i class="material-icons right">send</i></button>
        </div>
    </form>
</div>
<div class="row">
    <?php foreach ($conexion->query($sql) as $row) { ?>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/pattern.jpg">
                </div>
                <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echo $row['nombre'] ?>
                    <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"> <?php echo $row['nombre'] ?>
                    <i class="material-icons right">close</i></span>
                    <p> <?php echo $row['descripcion'] ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>