<?php
//$post = App\App::getDB()->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

//use App\Table\Article;
//use App\Table\Categorie;
$post = App\Table\Article::find($_GET['id']);
if($post === false){
    \App\App::notFound();
}
$categorie = App\Table\Categorie::find($post->category_id);
?>

<h1><?= $post->titre; ?></h1>
<p><em><?= $categorie->titre; ?></em></p>
<p><?= $post->contenu; ?></p>