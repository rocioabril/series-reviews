<?php session_start();?>

<!-- FUNCIONES -->
<?php include("funciones.php");?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <!-- aqui ya hemos separado el css del index.php para ponerlo en la carpeta css, 
    esto es lo que hay que poner para que se refleje en la carpeta css. eliminamos la etiqueta style -->
    <link rel = "stylesheet" href = "./css/estilos.css">
    <link rel = "stylesheet" href = "./css/serie.css">
    

</head>

<body>
    <!-- Header -->

    <div class="container-fluid">

    <?php  ?>
    <?php
    
    include("header.php");


    if($_GET){
      $id_series = $_GET["id_series"];
    }

    $conexion = conectar_db();
    
    $consulta = "SELECT * FROM series WHERE id_series = '$id_series'";
    
    $consulta_serie = $conexion->query($consulta);

    $consulta_serie->fetch_assoc();
    
    foreach($consulta_serie as $serie){
      $titulo = $serie['titulo'];
      $poster = $serie['poster'];
      $descripcion = $serie['descripcion'];

      echo "
          <main>
            <div style='background-image:url(\"./Posters/$poster\");height:700px;background-position:center;background-repeat:no-repeat;background-size:cover;z-index:5;' class='background-series'></div>
            <div class='background-black'></div>
            <div class='info-serie'>
              <div class='info-serie-izquierda'>
                <img src='./Posters/$poster' alt='Poster de la serie' class='poster-serie img-responsive'>
                <div class='botones'>
                      <!-- Button trigger modal -->
                  <a href='valorar.php'  data-bs-toggle='modal' data-bs-target='#valorarModal' class='btn btn-warning m-1'>
                        <b>Puntuar</b>
                  </a>
                      <!-- End button trigger modal -->
                  <button type='submit' class='btn btn-warning  m-1'><b>Agregar a mi lista</b></button>";
                  include('valorar.php');
                echo "</div>
              </div>
              <div class='info-serie-derecha'>
                <h1 class='titulo-serie'>$titulo</h1>
                <!-- <img src='./Estrellas/4.png'width='150px'> -->
                <p class='descripcion'>$descripcion</p>
              </div>
            </div>
            <div class='contenedor_lista'>
              <ul id='lista'>
                <!--Aca irian los comentarios, dentro de un ul-->
              </ul>
            </div>
          </main>";

    }
    ?>
   

    <!-- Inicio del pie -->
    <?php //include("footer.php");?>
    <!-- Fin del pie -->

    </div>


    <script>
  let currentReviewId = 0;
  //////////////////////////////////////////////////////////////
  ////////CREO RESEÑAS QUE SE OBTIENEN CON EL MODAL/////////////
  //////////////////////////////////////////////////////////////

document.getElementById("enviarResena").addEventListener("click", agregarResena)

function obtenerValorEstrellas() {
  let valorEstrella = 0;
  estrellas = document.getElementsByName("estrellas");
  const campo = document.getElementById("clasificacion");

  for(var i=0; i < estrellas.length; i++){

    if(estrellas[i].checked){
      indice_seleccionado = i;//guardo el indice del chequeado

      valorEstrella = estrellas[indice_seleccionado].value;//guardo el valor
      console.log(valorEstrella);
    } 
  }

  return valorEstrella;
}

function verificarEstaChequeado() {
  const valorEstrella = obtenerValorEstrellas();
  if (valorEstrella != 0) {
    document.getElementById("enviarResena").className = "btn btn-warning m-2";
  }
}

function agregarResena() {
  const valorEstrella = obtenerValorEstrellas();
  //leer el valor del input y guardarlo
  elemento = document.getElementById("resena").value;

  if (valorEstrella != 0) {//si se califico con una cantidad de estrellas 
    
    //lo añado al ul
    document.getElementById("lista").insertAdjacentHTML("beforeend", `
      <li>
        <div style="display:inline-flex; align-items: center; gap: 30px; margin-top: 70px;" id="nombre_usuario">
          <img src="iconoLog.jpg" class="iconoLog" alt="">
          <h3>User123</h3>
        </div>
        <div class="items">
          <div class='close'>x</div>
          <img src='Estrellas/${valorEstrella}.png' alt='' width='70' height='auto'>
          <div>${elemento}</div>
          <br>
        </div>
      </li>
    `);
  
    //y limpio el input
    document.getElementById("resena").value = "";
  }

  var close = document.getElementsByClassName("close");
  var user_name = document.getElementById("nombre_usuario");
  for (var i = 0; i < close.length; i++) {
    close[i].onclick = function () {
      var li = this.parentElement;
      li.remove();
      user_name.remove();
    }
  }

  currentReviewId++;
}

  //////////////////////////////////////////////////////////////
  ////Fin de --- CREO RESEÑAS QUE SE OBTIENEN CON EL MODAL//////
  //////////////////////////////////////////////////////////////

</script>
</body>
</html>


<?php ?>