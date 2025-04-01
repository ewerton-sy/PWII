<?php
    /**
     * Crie um array contendo 4 alunos com: nome, rm, foto, telefone.
     * Exiba todos os alunos uitlizando um foreach.
     */

     $alunos = [
        [
            'nome' => 'Salsicha',
            'rm' => '20251020167',
            'foto' =>'https://www.pensarcontemporaneo.com/content/uploads/2023/01/image-1-1068x722.jpg'
        ],

        [
            'nome' => 'Ary Ramos',
            'rm' => '20256010129',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmMEVSWliJf70QzBFplyKPSsrLHdegL5iqA&s'
        ],

        [
            'nome' => 'Paulo',
            'rm' => '20254080260',
            'foto' => 'https://img.freepik.com/fotos-gratis/retrato-de-homem-olhando-na-frente-dele_23-2148422271.jpg'
        ],

        [
            'nome' => 'Erica',
            'rm' => '20255060147',
            'foto' => 'https://pt.visafoto.com/img/source355x388.jpg'
        ]

        ];

        foreach ($alunos as $key => $aluno) {
            echo 'Nome:' . $aluno['nome'] . '<br>';  
            echo 'placa:' . $aluno['rm'] . '<br>';  
            echo '<img src="'  . $aluno['foto'] . '"> <br>';
          };
?>