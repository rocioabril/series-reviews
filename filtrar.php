<?php 

include("funciones.php");

$conexion = conectar_db();

$filtro = $_GET["filtro"];

$consulta = "SELECT * FROM series WHERE titulo LIKE '$filtro%' ORDER BY titulo";

$resultado_consulta = $conexion->query($consulta);

$resultado_consulta->fetch_assoc();

echo '<div id="cards_series" class="container_cards">';

    foreach($resultado_consulta as $serie){
        echo '
        <div class="card text-bg-dark mb-3 " style="width: 15rem;">
          <img src="./Posters/'. $serie["poster"] . '" class="card-img-top" alt="poster de ' . $serie["poster"] . '">
          <div class="card-body d-flex flex-column mb-3">
            <h5 class="card-title p-2"">' . $serie["titulo"] . '</h5>
            <!--<img src="./Estrellas/4.png" width="150px">-->
            <p class="card-text p-2"">' . substr($serie["descripcion"], 0, 100)  . '...</p>
            <a href="#" class="btn btn-warning botones_vermas p-2"><b>VER MAS</b></a>
          </div>
        </div>';
        }
    
echo '</div>';

?>