<?php
    /**
     * Crie um array contendo 4 alunos com: nome, rm, foto, telefone.
     * Exiba todos os alunos uitlizando um foreach.
     */

     $alunos = [
        
        'aluno1' =>[
            'nome' => 'Salsicha',
            'rm' => '20251020167',
            'foto' =>'https://www.outerspace.com.br/wp-content/uploads/2019/01/salsicha.jpg'
        ],

        'aluno2' => [
            'nome' => 'Ary Ramos',
            'rm' => '20256010129',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmMEVSWliJf70QzBFplyKPSsrLHdegL5iqA&s'
       ],

    
        'aluno3' => [
            'nome' => 'Paulo',
            'rm' => '20254080260',
            'foto' => 'https://img.freepik.com/fotos-gratis/retrato-de-homem-olhando-na-frente-dele_23-2148422271.jpg'
        ],

        'aluno4' => [
            'nome' => 'Erica',
            'rm' => '20255060147',
            'foto' => 'https://pt.visafoto.com/img/source355x388.jpg'
        ]

        ];

        foreach ($alunos as $aluno) {
            echo '<br>Aluno: ' . $aluno['nome'] . '<br>';  
            echo 'RM: ' . $aluno['rm'] . '<br>';  
            echo 'Foto:<br> <img src="'  . $aluno['foto'] . '"> <br>';
          };
?>