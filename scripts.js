

function filtrarGenero(){
    let genero = document.getElementById("genero").value;

    var ajax_url = "./filtrarGenero.php"; //ruta del archivo que será lanzado
    
    var ajax_request = new XMLHttpRequest();//clase. creo un objeto de esa clase
    
    // Definimos una función a ejecutar cuándo la solicitud Ajax tiene alguna información
    ajax_request.onreadystatechange = function() {//cuando cambie de estado, salta una funcion que mira si el estado de conexion esta way
    
    // si el readyState es 4, proseguir
    if (ajax_request.readyState == 4 ) {
    
            // Analizaos el responseText que contendrá el JSON enviado desde el servidor
            var response = ajax_request.responseText;
            document.getElementById("cards_series").innerHTML = response;
    }
}
    
     // Definimos como queremos realizar la comunicación
    ajax_request.open( "GET", ajax_url + "?genero=" + genero);
               
    //Enviamos la solictud con los parámetros que habíamos definido
    ajax_request.send();
}

function reordenar_titulo(){
    console.log("Hola")
    orden = document.getElementById("titulo").dataset.orden;

    var ajax_url = "./reordenar.php"; //ruta del archivo que será lanzado
    
    var ajax_request = new XMLHttpRequest();//clase. creo un objeto de esa clase
    
    // Definimos una función a ejecutar cuándo la solicitud Ajax tiene alguna información
    ajax_request.onreadystatechange = function() {//cuando cambie de estado, salta una funcion que mira si el estado de conexion esta way
    
    // si el readyState es 4, proseguir
    if (ajax_request.readyState == 4 ) {
    
            // Analizaos el responseText que contendrá el JSON enviado desde el servidor
            var response = ajax_request.responseText;
            document.getElementById("cards_series").innerHTML = response;

            if(orden == "ASC"){
                new_orden = "DESC";
            } else { new_orden = "ASC"; }
            document.getElementById("titulo").dataset.orden = new_orden;
    }
}
    
     // Definimos como queremos realizar la comunicación
    ajax_request.open( "GET", ajax_url + "?orden=" + orden);
               
    //Enviamos la solictud con los parámetros que habíamos definido
    ajax_request.send();

}

function filtrar(){
    filtro = document.getElementById("filtro").value;
    console.log(filtro);

    var ajax_url = "./filtrar.php"; //ruta del archivo que será lanzado
    
    var ajax_request = new XMLHttpRequest();//clase. creo un objeto de esa clase
    
    // Definimos una función a ejecutar cuándo la solicitud Ajax tiene alguna información
    ajax_request.onreadystatechange = function() {//cuando cambie de estado, salta una funcion que mira si el estado de conexion esta way
    
    // si el readyState es 4, proseguir
    if (ajax_request.readyState == 4 ) {
    
            // Analizaos el responseText que contendrá el JSON enviado desde el servidor
            var response = ajax_request.responseText;
            document.getElementById("cards_series").innerHTML = response;
    }
}
    
     // Definimos como queremos realizar la comunicación
    ajax_request.open( "GET", ajax_url + "?filtro=" + filtro);
               
    //Enviamos la solictud con los parámetros que habíamos definido
    ajax_request.send();
}

function reordenar_titulo(){
    console.log("Hola")
    orden = document.getElementById("titulo").dataset.orden;

    var ajax_url = "./reordenar.php"; //ruta del archivo que será lanzado
    
    var ajax_request = new XMLHttpRequest();//clase. creo un objeto de esa clase
    
    // Definimos una función a ejecutar cuándo la solicitud Ajax tiene alguna información
    ajax_request.onreadystatechange = function() {//cuando cambie de estado, salta una funcion que mira si el estado de conexion esta way
    
    // si el readyState es 4, proseguir
    if (ajax_request.readyState == 4 ) {
    
            // Analizaos el responseText que contendrá el JSON enviado desde el servidor
            var response = ajax_request.responseText;
            document.getElementById("cards_series").innerHTML = response;

            if(orden == "ASC"){
                new_orden = "DESC";
            } else { new_orden = "ASC"; }
            document.getElementById("titulo").dataset.orden = new_orden;
    }
}
    
     // Definimos como queremos realizar la comunicación
    ajax_request.open( "GET", ajax_url + "?orden=" + orden);
               
    //Enviamos la solictud con los parámetros que habíamos definido
    ajax_request.send();
}