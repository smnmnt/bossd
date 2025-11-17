<?php include __DIR__ . '/../header.php'; ?>
    <form class="row" method="post">
        <div class="mb-3">
            <label for="FormControlName" class="form-label">Наименование статьи</label>
            <input type="text" class="form-control" id="FormControlName" name="FormControlName" placeholder="Наименование статьи" value="<?= $article->getName() ?>">
        </div>
        <div class="mb-3">
            <label for="FormControlText" class="form-label">Текст статьи</label>
            <textarea class="form-control" id="FormControlText" name="FormControlText" rows="3"><?= $article->getText() ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Подтвердить</button>
        </div>

        <p>Автор: <?= $article->getAuthor()->getNickName() ?></p>
    </form>
<?php include __DIR__ . '/../footer.php'; ?>