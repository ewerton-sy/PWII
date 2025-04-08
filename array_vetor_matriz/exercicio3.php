<?php

$etec = [
    'Desenvolvimento de Sistemas:' => [
        'Programação Mobile.' => [
        'Módulo I.', 
        'Módulo II.'
    ],
        'Programação Web.' => [
            'Módulo I.',
            'Módulo II.',
            'Módulo III.',
            'Módulo IV.'
        ],
        'Técnicas Avançadas de Programação de Algoritmos. <br>' => [],
        'Inglês.' => [
            'Módulo I.',
            'Módulo II.',
            'Módulo III.',
        ]
    ],
    'Administração:' => [
        'Recursos Humanos.' => [
            'Módulo I.',
            'Módulo II.'
        ],
        'Gestão de Pessoas.' => [],
        'Teoria da Administração.' => [],
        'Inglês:' => [
            'Módulo I'
        ]
    ]
  
];

foreach ($etec as $area => $materias) {
    echo '<hr> Área: '. $area. '<br>';
    foreach ($materias as $materia => $modulos) {
        echo '<br> Matéria: ' . $materia . '<br>' ;
        foreach ($modulos as $modulo) {
            echo '<ul> <li>' . $modulo . '</li> </ul>';
        }
    }
}
?>
