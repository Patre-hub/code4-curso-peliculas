<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patre Web">    
    <title>Crear cateoria</title>    
  </head>
  <body>
    <form action='/categoria/create' method='post'>    
    <?= view('categoria/_form',['operacion'=>'Crear'])?>
    </form>
  </body>
</html>