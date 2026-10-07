<?php
    require_once 'partials/query.php';
    require_once 'partials/header.php';
?>

<h1>Tela de Admin</h1>

<h2><?= $siteuser ?> </h2>

<?php include('partials/form.php'); ?>

<?php foreach ($blocos as $bloco): ?>
    <?php require 'partials/cards.php'; ?>
<?php endforeach; ?>

<?php require_once 'partials/footer.php'; ?>