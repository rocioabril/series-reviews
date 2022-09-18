<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Document</title>
  <style>


    body html{
      height: 100%;
      margin: 0 auto;
    }


.background-series{
    margin: 100px 0 0 0;

    padding: 0;
  
    background-image: url("9.jpg");
        /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(8px);

    /* Full height */
    height: 700px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 5;

    }

  .background-black{
      width: 100%;
      height: 100%;
      position: absolute;
      margin-top: 98px;
      background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6561975131849616) 50%, rgba(0,0,0,1) 100%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 5;
      padding: 50px 0 0 0;
    }

    .info-serie {
      position: absolute;
      top: 50%;
      transform: translate(50%, -50%);
      z-index: 5;
      width: 50%;
      display: flex;
      justify-content: center;
      gap: 20px 20px;
      padding-top: 100px;
    }

    .info-serie-derecha{
      color: white;
      width: 300px;
    }

    .info-serie-izquierda{
      width: 250px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    @media (max-width: 1000px) {
    .info-serie {
    flex-direction: column;
    margin-top: 250px;
  }
}
    .botones{
      display: flex;
      flex-direction: column;
      align-items: stretch;
      gap: 5px;
    }

    .descripcion{
      font-size: 16px;

    }

    .poster-serie{
      border-radius: 25px;

    }
    .contenedorComentarios{
      width: 100%;
      border-radius: 25px;
      margin: 50px auto;
      box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.2);
    }

    .form1 {
      margin: 30px;
      display: flex;
      flex-direction: column;
    }

    #nuevoComentario{
      border: none;
      background-color: #eee;
      border-radius: 5px;
      height: 80px;
    }

    #nuevo_comentar {
      width: 500px;
      border: none;
      background-color: #eee;
      border-radius: 5px;
    }


    #add_item:hover {
      cursor: pointer;
    }

    .contenedor_lista{
      margin: 0;
      background-color: black;
      width: 100 vh;
      height: 100px;
    }

    #lista {
      width: 100%;
      margin: 30px auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
      list-style-type: none;
      padding: 0px;
      background: black;

    }

    .items {
      background-color: rgb(245, 245, 245);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.1)
    }

    .close {
      float: right;
      color: #c3c1c2;
    }

    .close:hover {
      cursor: pointer;
    }

    .iconoLog {
      width: 100px;
      height: auto;
      border-radius: 50%;
    }

    .footerResena {
      display: flex;
      justify-content: space-between;
      padding: 10px;
    }

    .footerResena button{
      border: none;
    }

    #agregarComentario{
      margin: 80px
    }
  </style>
</head>

  <main>
    <div class="background-series"></div>
    <div class="background-black"></div>
    <div class="info-serie">
      <div class="info-serie-izquierda">
        <img src="9.jpg" alt="Poster de la serie" class="poster-serie img-responsive">
        <div class="botones">
              <!-- Button trigger modal -->
          <a href="valorar.php"  data-bs-toggle="modal" data-bs-target="#valorarModal" class="btn btn-warning m-1">
                Puntuar
          </a>
              <!-- End button trigger modal -->
          <button type="submit" class="btn btn-warning  m-1">Agregar a mi lista</button>
          <?php include("valorar.php"); ?>
        </div>
      </div>
      <div class="info-serie-derecha">
        <h1 class="titulo-serie">The Walking Dead</h1>
        <p class="descripcion">Serie de televisión estadounidense de horror posapocalíptico de AMC basada en la serie
            de cómics homónima de Robert Kirkman, Tony Moore y Charlie Adlard. La serie presenta un gran elenco como
            sobrevivientes de un apocalipsis zombi, tratando de mantenerse con vida bajo la amenaza casi constante de
            ataques de los zombis sin conciencia, coloquialmente conocidos como «caminantes». Sin embargo, con la caída de la humanidad, estos sobrevivientes también enfrentan conflictos con otros sobrevivientes que han formado grupos y comunidades con sus propios conjuntos de leyes y morales.</p>
      </div>
    </div>
    <div class="contenedor_lista">
      <ul id="lista">
        <!--Aca irian los comentarios, dentro de un ul-->
      </ul>
    </div>
    </form>
  </main>
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

      
      //que cuando cliqueo en comentar se me abra un textarea con un boton, que a ese boton le de enviar y se ponga el comentario arriba del textarea
    //sacar borde del input para escribir reseña, va solo en la reseña y los comentarios ya hechos.
    //cuanto tenga listo el input de reseña y funcione dandole click a enviar y generando la reseña hechos
    //que clickeando en comentar me abra un input para comentar que dandole enviar se ponga.
</script>






</html>