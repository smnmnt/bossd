<?php include __DIR__ . '/../header.php'; ?>

<?php if (empty($articles)): ?>
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Пока нет статей</h4>
        <p>Статьи еще не добавлены. Будьте первым, кто добавит статью!</p>
        <hr>
        <p class="mb-0">
            <a href="/article/add" class="btn btn-dark">Добавить статью</a>
        </p>
    </div>
<?php else: ?>
    <?php foreach ($articles as $article): ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">
                    <a href="/article/<?= $article->getId() ?>" class="text-decoration-none text-dark">
                        <?= htmlspecialchars($article->getName()) ?>
                    </a>
                </h2>
                <p class="card-text text-muted mb-3">
                    <?= htmlspecialchars(mb_substr($article->getText(), 0, 200)) ?>
                    <?php if (mb_strlen($article->getText()) > 200): ?>
                        ...
                    <?php endif; ?>
                </p>
                <a href="/article/<?= $article->getId() ?>" class="btn btn-dark btn-sm">Читать далее →</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php include __DIR__ . '/../footer.php'; ?>
