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
            <input id="detalle" name="detalle" type="text" class="validate">
            <label for="detalle">Detalle de objetivo</label>
        </div>
        <div class="input-field col s12 m6">
            <button type="button" class="waves-effect waves-light btn" id="agregaObjetivo">Agregar objetivo
                <i class="material-icons right">send</i></button>
        </div>
    </form>
</div>
<div class="row">
    <h4 class="center-align">Lista de objetivos</h4>
    <table>
        <thead>
            <tr>
                <th>Detalles</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Isaac</td>
                <td><a href="#">Borrar</a><a href="">Actualizar</a></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>