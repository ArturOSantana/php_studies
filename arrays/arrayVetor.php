<?php
/*  ARRAYS E VETORES  */

$lista_nomes = array('João', 'Maria', 'José', 'Ana');

echo "Acessa o elemento na posição 2 do array: ";
echo $lista_nomes[2]; // Acessa o elemento na posição 2 do array
echo '<br>';
echo '<hr>';

echo "mostra o array: ";
print_r($lista_nomes); // Exibe todo o array
echo '<br>';
echo '<hr>';

echo 'Mostrar o tipo, tamanho e valores do array: ';
var_dump($lista_nomes); // Mostra o tipo, tamanho e valores do array
echo '<br>';
echo '<hr>';

echo 'Percorre o array com foreach, ele vai pegar cada elemento do array e colocar na variável $nome: ';
foreach ($lista_nomes as $nome) {
    echo $nome . '<br>';
}
echo '<br>';
echo '<hr>';

echo 'Junta os elementos do array em uma string, separando por vírgula: ';
echo implode(', ', $lista_nomes); // Junta os elementos do array em uma string, separando por vírgula
echo '<br>';
echo '<hr>';

// Adiciona um novo elemento ao array
echo 'Adiciona um novo elemento ao array: ';
echo '$lista_nomes[] = Pedro;';
echo '<br>';
$lista_nomes[] = 'Pedro';
print_r($lista_nomes); // Exibe todo o array
echo '<br>';
echo '<hr>';




/* Arrays associativos */
$idades = array('João' => 25, 'Maria' => 30, 'José' => 22);

print_r($idades); // Exibe todo o array associativo
echo '<br>';
echo "nomes: ";
foreach ($idades as $nome => $idade) {
    echo $nome . ' ';
}
echo '<br>';
echo "idades: ";
foreach ($idades as $nome => $idade) {
    echo $idade . ' ';
}
echo '<br>';
echo '<hr>';

//Pesquisa de Array 
echo 'Pesquisa de Array';
echo '<br>'; 

$frutas = ['banana', 'maçã', 'laranja', 'uva'];
echo '<hr>';
echo in_array('maçã', $frutas); // Retorna true se 'maçã' estiver no array $frutas

if (in_array('banana', $frutas)) {
    echo "A fruta banana está na lista.";
} else {
    echo "A fruta banana não está na lista.";
}

echo '<br>';
echo '<hr>';

echo array_search('laranja', $frutas); // Retorna o índice de 'laranja' no array $frutas

echo '<br>';
echo '<hr>';




?>