<div class="alert alert-secondary pt-3 pb-3" role="alert">
    <h1><?= $h1 ?></h1>
    <span><?= $desc ?></span>
</div>
<div class="card">
    <div class="card-header">
        <span>Используемый контроллер: <code><?= $nameMethod ?></code></span>
    </div>
    <div class="card-body pl-5 pr-5">
        <?php if (count($articles) > 0): ?>
            <?php foreach ($articles as $article): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <small class="form-text text-muted">
                            Опубликовано: <?= $article['published_at'] ?>
                        </small>
                        <small class="form-text text-muted">
                            Обновленно: <?= $article['updated_at'] ?>
                        </small>
                        <h2 class="card-title"><?= $article['title'] ?></h2>
                        <p class="card-text"><?= $article['excerpt'] ?></p>
                        <a href="/article/<?= $article['id'] ?>" class="btn btn-lg btn-outline-dark w-100">
                            Открыть статью
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-warning m-0" role="alert">
                <strong>Статьи не найдены!</strong><br/>
                Создайте статью через форму на сайте либо загрузить дамп, который находиться в директории: <code>docs/mysql-dump </code>
            </div>
        <?php endif; ?>
    </div>
</div>