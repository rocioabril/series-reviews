<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content contenedor_login">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-9">
    <section class="formulario_login">
        <form action="" method="POST">
            <div class="form-group m-3">
                <label for="user">Nombre de usuario</label>
                <input type="test" class="form-control" id="user" name="user"  placeholder="Tu nombre de usuario">
                <small id="userHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group m-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>

            
        </form>
        <?php
        //como saber si se ha enviado el formulario y es donde se almacenan los resultados 
        if ($_POST) {
            //para indicar que el formulario se ha enviado$usuario
            #echo "El formulario se ha enviado";
            $usuario = $_POST ["user"];
            $password = $_POST["password"];

            //esto es para comprobar si se guardan los datos de nombre y contraseña
            #echo "$usuario - $password";

            if ($usuario == "user" && $password == "1234") {
                $_SESSION["usuario"] = "user";
                $_SESSION["password"] = "1234";

                /*Me lleva a la pagina de inicio */
                header("Location: index.php");
                
            }
            else {
               echo "Hay un error en sus datos";
            }
        }
        ?>
      <div class="d-flex m-3 justify-content-stretch">
        <button type="submit" class="btn btn-warning">Entrar</button>
      </div>
    </section>
</div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        ¿Aun no tienes cuenta?
        <a href="registrarse.php" class="text-warning" data-bs-toggle="modal" data-bs-target="#signupModal">
                Registrate
        </a>

       
      </div>
    </div>
  </div>
</div>
<!-- fin del modal -->
<?php include("registrarse.php"); ?>
