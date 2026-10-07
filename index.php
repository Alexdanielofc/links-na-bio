<?php
    require_once 'partials/query.php';
    require_once 'partials/header.php';

    $blocourl = $_POST['url'] ?? '';
    $blocotitle = $_POST['title'] ?? '';

    if ($blocotitle !== '' && $blocourl !== '') {
        $blocos[] = [
            'title' => $blocotitle,
            'count' => 0,
            'url'   => $blocourl,
            'active' => true
        ];
    }
?>

<h2> Olá, <?= $siteuser ?> </h2>

<div class="container">
    <?php foreach (blocoAtivo($blocos) as $bloco): ?>
        <?php require 'partials/cards.php'; ?>
    <?php endforeach; ?>
</div>

<?php 

?>

<?php
    require_once 'partials/footer.php';
?>