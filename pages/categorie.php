<?php
use App\Table\Categorie;
use App\Table\Article;

$categorie = Categorie::find($_GET['id']);
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();

?>

<h1><?= $categorie->titre ?></h1>
