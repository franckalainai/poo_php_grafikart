<?php
namespace App\Table;
use \App\App;

class Article extends Table{

    public static function getLast(){
        return self::query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre as category 
        FROM articles 
        LEFT JOIN categories 
            on category_id = categories.id");
    }

    public static function lastByCategory($category_id){
        return self::query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre as category 
        FROM articles 
        LEFT JOIN categories 
            on category_id = categories.id
        WHERE category_id = ?
        ", [$category_id]);
    }

    public function getUrl(){
        return 'index.php?p=article&id=' .$this->id;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 50) . '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
        return $html;
    }
}