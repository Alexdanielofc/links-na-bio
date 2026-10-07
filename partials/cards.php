
<?php 
/** @var array $bloco */ 

$statuscard = 'bloco-active';
if($bloco['active'] === false) {
    $statuscard = 'bloco-inactive';
}
?>

<div class="bloco <?= $statuscard ?>">
    <a target='_blank' 
    href='<?= $bloco['url'] ?>'>
        <?= $bloco['title'] ?>
    </a>
    <br>
    <?= $bloco['count'] ?> cliques.
</div>