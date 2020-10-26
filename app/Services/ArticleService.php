<?php


namespace App\Services;
use App\Models\Article;

class ArticleService
{
    private $article;

    public function __construct($article){
        $this->article = $article;
    }

    public function getAuthor(){
        return $this->article->user;
    }

    public function setAuthor($user){
        $this->article->user_id=$user->id;
        $this->article->save();
    }

}
