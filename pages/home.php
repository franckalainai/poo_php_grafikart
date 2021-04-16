<div class="row">
    <div class="col-sm-8">
        <?php foreach(App\Table\Article::getLast() as $post): ?>
            <h2><a href="<?= $post->url ?>"><?= $post->titre ?></a></h2>
            <p><em><?= $post->category; ?></em></p>
                <p><?=  $post->extrait ?></p>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
            <ul>
                <?php foreach(\App\Table\Categorie::all() as $category): ?>
                    <li><a href="<?= $category->url; ?>"><?= $category->titre; ?></a></li>
                <?php endforeach; ?>
            </ul>
    </div>
</div>