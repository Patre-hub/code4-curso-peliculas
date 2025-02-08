<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patre Web">    
    <title>Categorias</title>    
  </head>
  <body>
    <h1>Listado cateorias</h1>
    <a href="/categoria/new">nuevo</a>
    <table>
        <tr>
            <th>#</th>
            <th>titulo</th>            
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    <?php foreach ($categorias as $key => $row): ?>      
        <tr>
            <td><?=$row['Catego_id']?></td>
            <td><?=$row['Catego_titulo']?></td>            
            <td><a href="/categoria/show/<?=$row['Catego_id']?>">Ver</a></td>
            <td><a href="/categoria/edit/<?=$row['Catego_id']?>">Editar</a></td>
            <td>
                <form action='/categoria/delete/<?=$row['Catego_id']?>' method='post'>
                    <button type='submit'>Eliminar</button>
                </form>                
            </td>
        </tr>
    <?php endforeach ?>
    </table>
  </body>
</html>