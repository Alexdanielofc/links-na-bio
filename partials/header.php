<!DOCTYPE html>
<?php
    $blocos = 
        [
            [
                'title' => 'Meu Youtube',
                'count' => 1204,
                'url'   => "https://youtube.com",
                'active' => true
            ],
            [
                'title' => 'GitHub',
                'count' => 1800,
                'url'   => "https://github.com/alexdanielofc",
                'active' => true
            ],
            [
                'title' => 'Instagram',
                'count' => 1204,
                'url'   => "https://instagram.com/alexdanielofc",
                'active' => false
            ]
        ];

        /** 
         * Retorna uma lista dos blocos ativos.
         *
         * @param array $blocos uma lista de blocos.
         * @return array ums lista de blocos ativos.
         */
        function blocoAtivo(array $blocos): array
        {
            $ativo = [];

            foreach ($blocos as $bloco) {
                if ($bloco['active'] === true) {
                    $ativo[] = $bloco;
                }
            }

            return $ativo;
        }

        /** 
         * Mostra o bloco na tela.
         *
         * @param array $bloco The bloco data.
         */
        function mostraBloco(array $bloco): void
        {
            echo "<a target='_blank' href='{$bloco['url']}' > {$bloco['title']} </a><br>";
            echo " {$bloco['count']} cliques.<hr>";
        }
    ?>

<html lang="pt-br">
<head>
    <?php require_once 'partials/query.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio - <?= $siteuser ?></title>
    <link rel="stylesheet" href="partials/app.css">
</head>
<body>