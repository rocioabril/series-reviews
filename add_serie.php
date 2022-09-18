<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Añadir Serie</title>
</head>
<body>
<form action="" method="POST">
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input name="titulo" type="text"  class="form-control">
    </div>

    <div class="mb-3">
        <label for="genero" class="form-label">Género</label>
        <select name="genero" class="form-control">
            <option value="-1" checked>Elige un género</option>
            <option value="fantasia">Fantasía</option>
            <option value="ciencia_ficcion">Ciencia Ficción</option>
            <option value="terror/misterio">Terror/Misterio</option>
            <option value="drama">Drama</option>
            <option value="comedia">Comedia</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Escribe una breve sinopsis</label>
        <br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    </div>

    <div>
        <label>Imagen</label>
        <br>
        <input type="file" name="poster">
    </div>
    <br>

    <input type="submit" class=" btn btn-primary" value="Agregar película">
  </div>

  <?php 

include("funciones.php");
//Tomamos los valores del formulario:

if($_POST){

    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $descripcion = $_POST["descripcion"];
    $poster = $_POST["poster"];

//conectar, escribir la consulta y consultar:

    //conectar
    $conexion = conectar_db();

    //escribir consulta
    $consulta = "INSERT INTO series(titulo, genero, descripcion, poster)
    VALUES('$titulo', '$genero', '$descripcion', '$poster')";

    //consultar
    $resultado_consulta = $conexion->query($consulta);

    header("Location: seriesCards.php");

}
  ?>
</body>
</html>