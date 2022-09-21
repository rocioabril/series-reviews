<header class="row navbar" >
    <div class="col-1">
        <img class="logo" src="./img/logo.png" alt="logo" title="logo">
    </div>
    <div class="col-9">
        <ul class="menu_superior">
            <li class="menu_sup_item">
                <a href="index.php">Inicio</a>
            </li>
            <li class="menu_sup_item">
                <a href="./serie.php">Series</a>
            </li>
            <li class="menu_sup_item">
                <a href="">Opiniones</a>
            </li>

        </ul>
    </div>
    <div class="col-2 sesion">
        <?php
        if (isset($_SESSION["usuario"])) {
            echo "<b>Hola, " . $_SESSION["usuario"] . "</b><br>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
        ?>
            <!-- Button trigger modal -->
            <a href="login.php" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <button type="button" class="btn btn-outline-warning">Iniciar Sesión
            </button></a>
        <?php }
        ?>
            
    </div>

</header>

<?php include("login.php"); ?>