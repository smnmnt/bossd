<?php include __DIR__ . '/../header.php'; ?>
    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h3 class="card-title"><?= $article->getName(); ?></h3>
            <h6 class="card-subtitle mb-2 text-muted"><?= $article->getAuthor()->getNickName() ?></h6>
            <p class="card-text"><?= $article->getText(); ?></p>
            <a href="./<?=$article->getId()?>/edit">Редактировать</a>
            <a href="./<?=$article->getId()?>/comments" class="text-warning">Прокомментировать</a>
            <a href="./<?=$article->getId()?>/delete" class="text-danger">Удалить</a>
        </div>
    </div>
    <?php if (!empty($comments)): ?>
        <h3 class="card-title mb-3">Комментарии</h3>
        <div class="column">
            <?php foreach ($comments as $comment): ?>
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $comment->getAuthor()->getNickName(); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text"><?= $comment->getText(); ?></p>
                        <a href="/comment/<?= $comment->getId(); ?>/edit" class="card-link text-warning">Редактировать</a>
                        <a href="/comment/<?= $comment->getId(); ?>/delete" class="card-link text-danger">Удалить</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

<?php include __DIR__ . '/../footer.php'; ?>