<?php include __DIR__ . '/../header.php'; ?>
    <form class="row" method="post">
        <div class="mb-3">
            <label for="FormControlText" class="form-label">Комментарий</label>
            <textarea class="form-control" id="FormControlText" name="FormControlText" rows="3"><?= $comment->getText() ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-dark mb-3">Подтвердить</button>
        </div>
    </form>
<?php include __DIR__ . '/../footer.php'; ?>