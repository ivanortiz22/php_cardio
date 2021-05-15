<?php
//valores

function greet($name){
    return "hola ,$name";
}

echo greet('ivan');

//referencia
$course='php';
echo "<br>";
function path($course){
  $course='laravel';
  echo $course;
  echo "<br>";
}

 path($course);
 echo $course;
 echo "<br>";

 function nombre($name1= 'ivan'){
    return "hola ,$name1";
}

echo nombre();
echo nombre('josue');

