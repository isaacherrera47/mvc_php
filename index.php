<?php
include('header.php');
include_once('config/database.php');
$sql = 'SELECT * FROM meta';

?>
<h1 class="center-align">Metas de vida</h1>
<h3 class="green-text">Agregar una meta</h3>
<div class="row">
    <form id="formMeta">
        <div class="input-field col s12 m4">
            <input required id="nombre" name="nombre" type="text" class="validate">
            <label for="nombre">Meta</label>
        </div>
        <div class="input-field col s12 m4">
            <input required id="descripcion" name="descripcion" type="text" class="validate">
            <label for="descripcion">Descripcion</label>
        </div>
        <div class="input-field col s12 m4">
            <button type="button" class="waves-effect waves-light btn" id="agregaMeta">Agregar meta
                <i class="material-icons right">send</i></button>
        </div>
    </form>
</div>
<div id="containerMeta" class="row">
    <?php foreach ($conexion->query($sql) as $row) { ?>
        <div class="col s12 m2">
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
                <div class="card-action">
                    <a class="modal-trigger actualizaMeta" data-id="<?php echo $row['id'] ?>" href="#modalMeta">Actualizar</a>
                    <a class="red-text darken-4 borraMeta" data-id="<?php echo $row['id'] ?>" href="#">Borrar</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div id="modalMeta" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Actualizar elemento</h4>
        <form id="modalForm" class="container">
            <div class="input-field col s12">
                <input id="nombreModal" name="nombreModal" type="text" class="validate">
                <label for="nombreModal">Meta</label>
            </div>
            <div class="input-field col s12">
                <input id="descripcionModal" type="text" class="validate">
                <label for="descripcionModal">Descripcion</label>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Actualizar</a>
    </div>
</div>
<?php include('footer.php'); ?>

