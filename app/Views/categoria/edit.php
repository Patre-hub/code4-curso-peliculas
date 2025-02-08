<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patre Web">    
    <title>Actualizar categoria</title>    
  </head>
  <body>
    <form action='/categoria/update/<?=$categoria["Catego_id"]?>' method='post'>    
      <?= view('categoria/_form',['operacion'=>'Actualizar'])?>
    </form>
  </body>
</html>