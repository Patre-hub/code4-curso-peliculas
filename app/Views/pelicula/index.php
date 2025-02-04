<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patre Web">    
    <title>Peliculas</title>    
  </head>
  <body>
    <h1>Listado peliculas</h1>
    <a href="/pelicula/new">nuevo</a>
    <table>
        <tr>
            <th>#</th>
            <th>titulo</th>
            <th>Descripcion</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    <?php foreach ($peliculas as $key => $row): ?>      
        <tr>
            <td><?=$row['Peli_id']?></td>
            <td><?=$row['Peli_titulo']?></td>
            <td><?=$row['Peli_descripcion']?></td>
            <td><a href="/pelicula/show/<?=$row['Peli_id']?>">Ver</a></td>
            <td><a href="/pelicula/edit/<?=$row['Peli_id']?>">Editar</a></td>
            <td>
                <form action='/pelicula/delete/<?=$row['Peli_id']?>' method='post'>
                    <button type='submit'>Eliminar</button>
                </form>                
            </td>
        </tr>
    <?php endforeach ?>
    </table>
  </body>
</html>