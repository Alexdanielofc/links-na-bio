<h3> + ADICIONAR LINK</h3>

<?php
    require_once 'partials/query.php';
    require_once 'partials/header.php';
?>

<h1>Formulário</h1>

<form method= "post" action="index.php" class="form1">
    <div>
        <label for="title">Título do bloco:</label>
        <input type="text" name="title" id="title" placeholder="Digite o título do bloco" required>
    </div>    
    <div>
        <label for="url">URL do bloco:</label>
        <input type="text" name="url" id="url" placeholder="Digite a URL do bloco" required>
    </div>
    <button type="submit" class="btn1">Cadastrar</button>
</form>