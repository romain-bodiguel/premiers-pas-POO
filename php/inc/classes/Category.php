<?php

class Category
{
    public $name;
    private $testProp;

    public function __construct($name = "")
    {
        $this->name = $name;
        $this->testProp = "Hello ma prop privé";
    }

    public function getArticles($articles = [])
    {
        $articlesList = [];

        foreach ($articles as $indexArticle => $article) {
            if ($article->category == $this->name) {
                $articlesList[$indexArticle] = $article ;
            }
        }

        return $articlesList;
    }

    private function calculVal() {
        
    }
}