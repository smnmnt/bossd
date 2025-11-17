<?php include __DIR__ . '/../header.php'; ?>

    <h1><?= $article->getName() ?></h1>

    <p><?= $article->getText() ?></p>

    <a href="./<?=$article->getId()?>/edit">Редактировать</a>
    <a href="./<?=$article->getId()?>/delete" class="text-danger">Удалить</a>

    <p>Автор: <?= $article->getAuthor()->getNickName() ?></p>

<?php include __DIR__ . '/../footer.php'; ?>