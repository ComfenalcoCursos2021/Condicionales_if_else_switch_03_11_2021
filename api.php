<?php
    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *');
    extract(json_decode(file_get_contents("php://input"), true));

    switch ($numero) {
        case 3: case 2: case 1:
            print_r("Hola soy el un numero valido");
            print_r(":)");
            break;
        case "Miguel":
            print_r("Hola usuario como estas");
            break;
        case 5:
            print_r("Hola soy e numero 5");
           break;
        default:
            print_r("El dato enviado no tiene opcion");
            break;
    }
    
    print_r("\n");




    if($numero >= 1 && $numero <= 5){
        if($numero==3){
            print_r(<<<MENSAJE
                El numero enviado cumple la condicion :)
            MENSAJE);
        }
    }else if($numero>=20){
        print_r(<<<MENSAJE
        El numero enviado cumple la condicion es mayor a 20
    MENSAJE);
    }else if($numero==10){
        print_r(<<<MENSAJE
        El numero enviado cumple la condicion y es igual a 10
    MENSAJE);
    }else{
        print_r(<<<MENSAJE
            El numero enviado no cumple la condicion :(
        MENSAJE);
    }



    // $MensajeIF = function() use($numero){
    //     return <<<MENSAJE
    //         El numero enviado cumple la condicion :) :p $numero
    //     MENSAJE;
    // };
    // $RESPUESTA = (string) 
    // ($numero >= 1 && $numero <= 5) ?
    //     ($numero==3) ? $MensajeIF() : null
    //     :(($numero>=20) ? "El numero enviado cumple la condicion es mayor a 20"
    //     :(($numero==10) ? "El numero enviado cumple la condicion y es igual a 10"
    //         :"El numero enviado no cumple la condicion :("
    //     )
    // );
    // print_r($RESPUESTA);
    
    // print_r(
    //     (false) ? "Hola soy la condicion correcta" 
    //         : "Hola soy la condicion incorrecta :("
    // );  

    
    

?>