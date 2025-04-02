<!-- 
 Crie um array para um zoológico contendo informações como:
 Nome do Animal, Raça, Espécie, Cor, Peso, Idade, Foto.
 Exiba todos os animais utilizando um foreach.
 4 Animais 
 -->


<?php 
  $animais = [
    'animal_1' => [
        'nome' => 'Leão',
        'raça' => 'Atlas',
        'especie' => 'Africano',
        'peso' => '186Kg',
        'idade' => '14 Anos',
        'foto' => 'https://conteudo.imguol.com.br/c/noticias/2014/08/31/31ago2014---possivel-leao-do-atlas-em-cativeiro-em-zoologico-de-liubliana-na-eslovenia-em-foto-de-2011-1409484273270_615x470.jpg'
    ],
    'animal_2' => [
        'nome' => 'Macaco',
        'raça' => 'Macaco-Prego',
        'especie' => 'Sapajus apella',
        'peso' => '3,6Kg',
        'idade' => '26 Anos',
        'foto' => 'https://s2.glbimg.com/91F_gAZAS4dyL9XT3PUmU_j0Oxo=/s.glbimg.com/jo/g1/f/original/2015/01/30/264.jpg'
    ],
    'animal_3' => [
        'nome' => 'Tucano',
        'raça' => 'tucano-de-bico-verde',
        'especie' => 'Ramphastos dicolorus',
        'peso' => '288g',
        'idade' => '15 Anos',
        'foto' => 'https://protecaoanimal.curitiba.pr.gov.br/images/animais-silvestres/vertebrados/aves/52.Ramphastos-dicolorus_3_Sergio-Morato-n-46.jpg'
    ],
    'animal_4' => [
        'nome' => 'Onça',
        'raça' => 'Onça-pintada',
        'especie' => 'Panthera onca',
        'peso' => '75Kg',
        'idade' => '20 anos',
        'foto' => 'https://static.escolakids.uol.com.br/conteudo_legenda/0384f1f47699cf19534388ebb7a6adfb.jpg'
    ],

    
];

foreach ($animais as $animais) {
    echo 'Aluno: ' . $animais['nome'] . '<br>';  
    echo 'Raça: ' . $animais['raça'] . '<br>';  
    echo 'Espécie: ' . $animais['especie'] . '<br>';  
    echo 'Peso: ' . $animais['peso'] . '<br>';  
    echo 'Idade: ' . $animais['idade'] . '<br>';  
    echo 'Foto:<br> <img src="'  . $animais['foto'] . '">';
    echo '<hr>';
  };
?>