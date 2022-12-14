

<style>

    body{
        background-color: #000 !important;
        color: white;
    }


    .container_cards{
        display: flex;
        flex-wrap: wrap;
        /*gap: 30px;*/
        justify-content: center;
    }

    .container_buscador_series{
        /*background: red;
        border: 5px solid pink;*/
    }
    .botones_vermas{
        color: #222529;
    }

    .card-title{
        font-size: 1.5em;
        font-weight: bold;
    }

    .card_serie{
        width: 15rem;
        margin: 15px;
    }

    .card_serie { transition: all .2s ease-in-out; }
    .card_serie:hover { 
        transform: scale(1.03); 
        cursor: pointer;
    }
    
</style>
    <div class="container_buscador_series d-flex p-2 m-5">


        <!-- Inicio buscador -->
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100 buscador">
                <div class="searchbar">
                <input class="search_input" type="text" name="filtro" placeholder="Buscar..."  onkeyup="filtrar()"  id='filtro'>
                <a href='#' class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
        <!-- Fin buscador -->

        <!-- Inicio de filtro por género -->
        <div class="d-flex flex-direction: row">
            <h5 class="justify-content-end">Busca por genero</h5>
            <select class="form-select text-light bg-dark justify-content-end" name="genero" id="genero" onchange="filtrarGenero();"> 
                <option value="todas">Ver todos</option>
                <option value="drama">Drama</option>
                <option value="comedia">Comedia</option>
                <option value="terror/misterio">Terror/Misterio</option>
                <option value="fantasia">Fantasia</option>
                <option value="ciencia_ficcion">Ciencia Ficción</option>
            </select>
        </div>
    <!-- Fin de filtro por género -->
    
    </div>
    
    
<?php 
    

$conexion = conectar_db();//esto esta en archivo funciones.php


//2- Hacer la consulta

$consulta = "SELECT * FROM series ORDER BY titulo";

$resultado_consulta = $conexion->query($consulta);

$resultado_consulta->fetch_assoc();


    echo '<div id="cards_series" class="container_cards" >';

    foreach($resultado_consulta as $serie){
        echo '
        <a href="serie.php?id_series=' . $serie["id_series"] . '" id="ver_mas" style="color:white;text-decoration:none;">
        <div class="card text-bg-dark mb-3 card_serie">

          <img src="./Posters/'. $serie["poster"] . '" class="card-img-top img_cards img-responsive" alt="poster de ' . $serie["poster"] . '">
          <div class="card-body d-flex flex-column mb-3">
            <h5 class="card-title p-2"">' . $serie["titulo"] . '</h5>
            <!--<img src="./Estrellas/4.png" width="150px">-->
            <p class="card-text p-2"">' . substr($serie["descripcion"], 0, 70)  . '...</p>
            <button class="btn btn-warning botones_vermas p-2"><b>VER MAS</b></button>
          </div>
        </div>
        </a>';
        
        }
    
echo '</div>';
 
?>
<div class="d-flex flex-column m-5 align-items-center gap-4">
    <h3 class="">¿No encuentras la serie que buscas?</h3>
    <a href="add_serie.php" class="btn btn-warning botones_vermas p-3 btn-lg"><b>AGREGALA</b></a>
</div>
<script src="./scripts.js"></script>
