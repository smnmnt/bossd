<?php include __DIR__ . '/../header.php'; ?>
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-3"><?= htmlspecialchars($article->getName()); ?></h3>
            <h6 class="card-subtitle mb-3 text-muted">Автор: <?= htmlspecialchars($article->getAuthor()->getNickName()) ?></h6>
            <p class="card-text mb-4"><?= nl2br(htmlspecialchars($article->getText())); ?></p>
            <div class="btn-group" role="group">
                <a href="./<?=$article->getId()?>/edit" class="btn btn-dark btn-sm">Редактировать</a>
                <a href="./<?=$article->getId()?>/comments" class="btn btn-dark btn-sm">Прокомментировать</a>
                <a href="./<?=$article->getId()?>/delete" class="btn btn-danger btn-sm">Удалить</a>
            </div>
        </div>
    </div>
    <?php if (!empty($comments)): ?>
        <h3 class="mb-4">Комментарии</h3>
        <div class="row">
            <?php foreach ($comments as $comment): ?>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><?= htmlspecialchars($comment->getAuthor()->getNickName()); ?></h5>
                            <p class="card-text mb-3"><?= nl2br(htmlspecialchars($comment->getText())); ?></p>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="/comment/<?= $comment->getId(); ?>/edit" class="btn btn-dark">Редактировать</a>
                                <a href="/comment/<?= $comment->getId(); ?>/delete" class="btn btn-danger">Удалить</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

<?php include __DIR__ . '/../footer.php'; ?>