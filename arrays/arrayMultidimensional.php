<?php
/* ARRAYS MULTIDIMENSIONAIS  */

$carros = [
    ['Toyota', 'Vermelho', 2020],
    ['Honda', 'Azul', 2019],
    ['Ford', 'Preto', 2021]
];

echo "Acessa o elemento na posição [1][0] do array (Honda): ";
echo $carros[1][0]; // Acessa o elemento na posição [1]
echo '<br>';
echo '<hr>';

/* array associativo multidimensional */


$pessoas = array( 
    'nomes' => array('João', 'Maria', 'José'),
    'idades' => array(25, 30, 22),
    'cidades' => array('São Paulo', 'Rio de Janeiro', 'Belo Horizonte'  
)
);
echo '<br>';
echo '<hr>';

print_r($pessoas); // Exibe todo o array associativo multidimensional
echo '<br>';
echo '<hr>';
echo "Acessa o elemento na posição ['nomes'][1] do array (Maria): ";
echo $pessoas['nomes'][1]; // Acessa o elemento na posição ['nomes'][1]
echo '<br>';

echo '<br>';
echo '<hr>';

$lista_coisas = [
    'frutas' => ['Banana', 'Maçã', 'Laranja'],
    'pessoas' => ['João', 'Maria', 'José'],
];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo in_array('João', $lista_coisas['pessoas']); // Verifica se 'Maçã' está no array de frutas



?>