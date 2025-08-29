<?php
/* NOMES */ 
$registro=array(
    array('nome'=>'Ana', 'idade'=>20),
    array('nome'=>'Beatriz', 'idade'=>25),
    array('nome'=>'Carla', 'idade'=>30),
    array('nome'=>'Daniela', 'idade'=>35),
    array('nome'=>'Eliana', 'idade'=>40)  
);

echo '<h2> LACO DE REPETIÇÃO EM ARRAYS MULTIDIMENSIONAIS </h2>';
echo '<hr>';
echo '<h3> LACO com WHILE </h3>';

/* LACO com While */

$laco_while = 0;

while($laco_while < count($registro)){
    echo '<pre>';
    print_r ($registro[$laco_while]['nome'])."<br>";
    print_r ($registro[$laco_while]['idade'])."<br>";
    echo '</pre>';
    $laco_while++;
}


echo '<hr>';
echo '<h3> LACO com FOR </h3>';

/* LACO com For */

for($laco_f=0; $laco_f < count($registro); $laco_f++){
    echo '<pre>';
    print_r ($registro[$laco_f]['nome'])."<br>";
    print_r ($registro[$laco_f]['idade'])."<br>";
    echo '</pre>';
}


/* laco com do while */

echo '<hr>';
echo '<h3> LACO com DO WHILE </h3>';

$laco = 0;

do{
    echo '<pre>';
    print_r ($registro[$laco]['nome'])."<br>";
    print_r ($registro[$laco]['idade'])."<br>";
    echo '</pre>';
    $laco++;
}while($laco < count($registro));


?>