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
<form action="" method="POST" enctype="multipart/form-data">
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


        $fileTmpPath = $_FILES['poster']['tmp_name']; // carpeta y nombre temporal
        $fileName = $_FILES['poster']['name']; // nombre del archivo
        $fileSize = $_FILES['poster']['size']; // tamaño del archivo en bytes
        $fileType = $_FILES['poster']['type']; // tipo del archivo


        $fileNameCmps = explode(".", $fileName);            
        $fileExtension = strtolower(end($fileNameCmps));   
    
        // sanitizar file-name
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension; // al nombre original le por delante pone el time y aplica el md5 que lo encripta y le da un código único
        
        
        //Array de extensiones permitidas
        $allowedfileExtensions = array('jpg', 'gif', 'png');
        $max_file_size = 250000;

        if (in_array($fileExtension, $allowedfileExtensions) && $fileSize < $max_file_size) { // Compara si la extensión del array "fileExtension" está dentro de las extensiones permitidas "allowedfileExtensions"
        
            $uploadFileDir = './Posters/';                   //defino donde será  carpeta a la que vamos a mover los archivos ->"upload_files"
            $dest_path = $uploadFileDir . $newFileName;         //"dest_path" es la carpeta y el archivo donde se va a guardar
      
            if(move_uploaded_file($fileTmpPath, $dest_path)) { // Muevo los archivos de la carpeta temporal a la carpera definida
            
                
                
                $titulo = $_POST["titulo"];
                $genero = $_POST["genero"];
                $descripcion = $_POST["descripcion"];
                $poster = $newFileName;

            //conectar, escribir la consulta y consultar:

                //conectar
                $conexion = conectar_db();

                //escribir consulta
                $consulta = "INSERT INTO series(titulo, genero, descripcion, poster)
                VALUES('$titulo', '$genero', '$descripcion', '$poster')";

                //consultar
                $resultado_consulta = $conexion->query($consulta);
                
                
                
                
                header("Location: index.php");
            }
        }
    



}
  ?>
</body>
</html>