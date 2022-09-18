

<!--Estilo valoración-->
<style>
#form {
    display: block;
    width: 250px;
    margin: 0 auto;
    height: 50px;
    border: 1px solid #d9d9d9;
  }
  
  #form p {
    display: block;
    text-align: center;
    font-size: 20px;
  }
  
  #form label {
    font-size: 20px;
  }
  .title-valorar{
    display: block;
    text-align: center;
    font-size: 20px;
  }
  
  input[type="radio"] {
    display: none;
  }
  
  label {
    color: grey;
  }
  
  .clasificacion {
    direction: rtl;
    unicode-bidi: bidi-override;
  }
  
  label:hover,
  label:hover ~ label {
    color: orange;
  }
  
  input[type="radio"]:checked ~ label {
    color: orange;
  }

  .modal-backdrop
{
display:none;
visibility:hidden; 
position:relative
}

    </style>
    <!--FIN Estilo valoración-->
    </head>

<!-- Modal Valoracion -->
<div class="modal posicion" tabindex="-1" id="valorarModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" class="title-valorar">Valorar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Estrellas -->
        <form id="form" class="needs-validation">
        <p class="clasificacion" id="clasificacion">
        <input id="radio1" type="radio" name="estrellas" value="5" onclick="verificarEstaChequeado()"><!--
        --><label for="radio1">★</label><!--
        --><input id="radio2" type="radio" name="estrellas" value="4" onclick="verificarEstaChequeado()"><!--
        --><label for="radio2">★</label><!--
        --><input id="radio3" type="radio" name="estrellas" value="3" onclick="verificarEstaChequeado()"><!--
        --><label for="radio3">★</label><!--
        --><input id="radio4" type="radio" name="estrellas" value="2" onclick="verificarEstaChequeado()"><!--
        --><label for="radio4">★</label><!--
        --><input id="radio5" type="radio" name="estrellas" value="1" onclick="verificarEstaChequeado()"><!--
        --><label for="radio5">★</label>
        </p>
        </form>
      <!-- Estrellas -->
        <p>Comentario:</p>
        <textarea id="resena" name="resena" rows="4" cols="50"></textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning m-2 disabled" id="enviarResena" data-bs-dismiss="modal" aria-label="Close">Enviar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $("valorarModal").modal("show");
</script>
<!-- Fin Modal Valoracion -->