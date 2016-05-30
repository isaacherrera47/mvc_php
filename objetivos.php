<?php
include('header.php');
include_once('config/database.php');
$sql = 'SELECT * FROM objetivo';

?>
    <h1 class="center-align">Objetivos de vida</h1>
    <h3 class="green-text">Agregar un objetivo</h3>
    <div class="row">
        <form id="formObjetivo">
            <div class="input-field col s12 m6">
                <input required id="detalle" name="detalle" type="text" class="validate">
                <label for="detalle">Detalle de objetivo</label>
            </div>
            <div class="input-field col s12 m6">
                <button type="submit" class="waves-effect waves-light btn" id="agregaObjetivo">Agregar objetivo
                    <i class="material-icons right">send</i></button>
            </div>
        </form>
    </div>
    <div class="row">
        <h4 class="center-align">Lista de objetivos</h4>
        <table class="striped">
            <thead>
            <tr>
                <th>Detalles</th>
                <th>Operaciones</th>
            </tr>
            </thead>
            <tbody id="containerObjetivo">
            <?php foreach ($conexion->query($sql) as $row) { ?>
                <tr>
                    <td><?php echo $row['detalle'] ?></td>
                    <td>
                        <a class="btn-flat red-text waves-effect waves-red borraObjetivo" data-id="<?php echo $row['id'] ?>" href="#">Borrar</a>
                        <a class="btn-flat waves-effect waves-green actualizaObjetivo" data-id="<?php echo $row['id'] ?>" href="#modalObjetivo">Actualizar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div id="modalObjetivo" class="modal">
        <div class="modal-content">
            <h4 class="center-align">Actualizar elemento</h4>
            <form id="modalForm" class="container">
                <div class="input-field col s12">
                    <input id="detalleModal" name="detalle" type="text" class="validate">
                    <label for="detalleModal">Meta</label>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Actualizar</a>
        </div>
    </div>

<?php include('footer.php'); ?>