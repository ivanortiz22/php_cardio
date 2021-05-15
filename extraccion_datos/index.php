<?php

//$data = 'estudio php';
//echo $data[0];
//$post ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, libero rerum? Vero alias laudantium blanditiis dignissimos quaerat dolor error, doloremque corporis molestiae dolore ipsa, quod similique perferendis ipsum, incidunt nulla.";
//$extract = substr ($post,0,20);
//echo "$extract ... [ver mas]";
/*
$data ='javascript,php,larabel';
$tags= explode(',',$data);
echo "<pre>";
var_dump($tags);
//convierte un string en array 
*/
//$corses =['javascript','php','laravel'];
//echo implode(',',$corses);
//convierte un array en string separado por coma
// con implode y explde lo que decimos 
//crea un elemento y separalo del otro eelemento interponienfdo una coma

$courses = '     cursos de php';
$courses =  trim($courses);

echo "<pre>";
echo "quiero aprender $courses,y otro texto";

//trim elimina espacios de los datos qu  tiene guardado como string la variable
