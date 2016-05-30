<?php

function getCard($nombre, $descripcion, $id)
{
    return '<div class="col s12 m2">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/pattern.jpg">
                </div>
                <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">' . $nombre . '
                    <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"> ' . $nombre . '
                    <i class="material-icons right">close</i></span>
                    <p>' . $descripcion . '</p>
                </div>
                <div class="card-action">
                    <a class="actualizaMeta" data-id="'.$id.'" href="#modalMeta">Actualizar</a>
                    <a class="red-text darken-4 borraMeta" data-id="'.$id.'" href="#">Borrar</a>
                </div>
            </div>
        </div>';
}

function getRow($detalles,$id) 
{
    return '<tr>
                <td>'.$detalles.'</td>
                <td>
                    <a class="btn-flat red-text waves-effect waves-red borraObjetivo" data-id="'.$id.'" href="#">Borrar</a>
                    <a class="btn-flat waves-effect waves-green actualizaObjetivo" data-id="'.$id.'" href="#modalObjetivo">Actualizar</a>
                </td>
            </tr>';
}
