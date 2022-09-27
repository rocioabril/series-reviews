<!-- Modal -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-9">
    <section class="formulario_login">
        <form action="" method="POST" class="needs-validation">
            <div class="form-group m-3">
                <label for="usuarioRegistro">Nombre de usuario</label>
                <input type="test" class="form-control" id="usuarioRegistro" name="usuarioRegistro"  placeholder="Elije tu nombre de usuario" required>
                <div class="invalid-feedback">Este campo no puede permanecer vacío</div>
                <div class="invalid-feedback2">Este nombre de usuario ya existe</div>
            </div>
            <div class="form-group m-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="passwordRegistro" name="passwordRegistro" placeholder="Crea una contraseña con 6 a 12 caracteres" required>
                <div class="invalid-feedback">Tu contraseña debe tener entre 6 y 12 caracteres</div>
            </div>
            <div class="form-group m-3">
              <button class="btn btn-warning m-2" type="submit" name="enviar" id="enviar">Crear cuenta</button>
            </div>
        </form>

    </section>
</div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        ¿Ya tienes cuenta?
        <a href="registrarse.php" class="text-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Entra a tu cuenta
        </a>
       
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById("enviar").addEventListener("click", verificar);

        function verificar(){
            verificar_nombre();
            verificar_user();
            verificar_password();
        }

        function verificar_nombre() {
            return verificarEstaVacio("nombreRegistro");
        }
        
        function verificar_user() {
            return verificarEstaVacio("usuarioRegistro");
        }

        function verificar_password() {
          const campo = document.getElementById("passwordRegistro");
            const valor = campo.value;
            if(valor.length < 6 || valor.length > 12 ) {
              campo.className = "form-control is-invalid";
            } else {
              campo.className = "form-control is-valid";
            }
        }


        function verificarEstaVacio(id) {
            // Recoger el valor
            const campo = document.getElementById(id);
            const valor = campo.value;

            // Comprobar si está vacío
            if (valor == "") {
                campo.className = "form-control is-invalid";
            }else{campo.className = "form-control is-valid";
          } 
        }

</script>

</body>

</html>
<!-- fin del modal -->


<?php 

    include("functions.php");

    if($_POST){
      $usuario = $_POST['usuarioRegistro'];
      $password = $_POST['passwordRegistro'];

    $conexion = conectar_db();

    //pido los usuarios que tengan el mismo nombre de usuario que el que me han puesto en el formulario y los guardo en una variable
    $sql = "SELECT * FROM usuario WHERE nombre_usuario = '$usuario'"; 

    $result = $conexion->query($sql);
    $numResult = $result->num_rows;


    //verifico que exista el usuario
    if($numResult > 0){
        echo "Ya existe un usuario con ese nombre";
        //que me avise que ya existe el nombre de usuario y me pida que ponga otro
    } 

    else {
        $sql = "INSERT INTO usuarios (nombre_usuario, password_usuario)
        VALUES ( '$usuario', '$password')";
        //que se imprima en pantalla que ya creaste tu cuenta y que inicies sesion
    }

    $result = $conexion->query($sql);

    }

?>
