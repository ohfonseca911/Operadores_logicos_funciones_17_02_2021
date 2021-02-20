<?php
    $arg1 = (int) 5;
    $arg2 = (int) 0;
    $arg3 = (string) '*';

    function validarZero($p1, $p2, $p3){
        if($p2!==0 && $p3!=="*"){
            return $p1 / $p2;
        }else if($p2!==0 && $p3!=="/"){
            return $p1 * $p2;
        }else{
            return <<<FIN
        Por favor ingrese un numero mayor a 0
FIN;
        }
    }

    function calculadora($p1, $p2, $p3){
        if($p3=="+"){
            return $p1 + $p2;
        }else if($p3=="-"){
            return $p1 - $p2;
        }else if($p3=="*"){
            return validarZero($p1,$p2,$p3);
        }else if($p3=="/"){
            return validarZero($p1,$p2,$p3);
        }else{
            return <<<FIN
            La opcion enviada no se encuentra disponible
FIN;
        }
    }
    $res = (array) calculadora($arg1, $arg2, $arg3);
    var_dump($res);

    // Condicional if-elseif-else
        $edad = (int) 18;
        if($edad==18){
            $mensaje = (string) <<<FIN
            Muestrame la cedula
    FIN;
            print_r($mensaje);
        }else if($edad>18){
            $mensaje = (string) <<<FIN
            Puedes pasar al antro
    FIN;
            print_r($mensaje);
        }else if($edad>=10 && $edad<=17){
            $mensaje = (string) <<<FIN
            Eres menor de edad, no te es posible ingresar aún
    FIN;
            print_r($mensaje);
        }else if($edad<=9 && $edad>=1){
            $mensaje = (string) <<<FIN
            Hora no permitida para estar en calle a tu edad
    FIN;
            print_r($mensaje);
        }else{
            $mensaje = (string) <<<FIN
            BUUUU!
    FIN;
            print_r($mensaje);
        }

    $a = (bool) false;
    $b = (bool) true;

    // Operador logico Y ( and, &&)
    var_dump($a and $b);
    var_dump($a && $b);

    // Operador logico O ( or, ||)
    var_dump($a or $b);
    var_dump($a || $b);

    // Operador logico XOR (!)
    var_dump(!$a);

    // Ejemplo
    var_dump(  !(  !(true) && (false) ) || !( !( !(true) &&  (false && true) ) ) );
?>