<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patre Web">    
    <title>Actualizar pelicula</title>    
  </head>
  <body>
    <form action='/pelicula/update/<?=$pelicula["Peli_id"]?>' method='post'>    
      <?= view('pelicula/_form',['operacion'=>'Actualizar'])?>
    </form>
  </body>
</html>