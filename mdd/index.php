<?php
echo'un texto de una linea 
varias lineas
comilla simple \' dddddd \\ adkjdjkd
$variable <br>';

$name = 'ivan';
echo " mi nombres es $name <br>";


$cursos = [
    'backend' => [


        'php',
        'laravel'
    ]
    ];

    echo "{$cursos ['backend'][0]} <br>";
    //cuando deseas expresar el resultado de variales
    //complejas utilizas llaves
    //y doble commilla


    class user
    {

        public  $name = 'ivan ';


    }
    $user = new user ;
    echo " $user->name quiere aprender php {$cursos ['backend'][0]} <br>";
    //cuando una estructura de datos es compleja
    //utilizamos las llavves para escapar

    $techar ='italo';
    $italo='profesor de php ';
    echo "$techar es ${$techar} <br>";



    function getTeacher() {

        return 'teacher';
    }
    $teacher = 'ivan';
    echo "{${getTeacher()}} ensena php ";
    //esta manera aprendemos a utiliza comillas simple y doblres , temas variable variable
    