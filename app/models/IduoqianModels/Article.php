<?php
namespace IduoqianModels;

class Article extends \Eloquent
{
    protected $table = 'article';
    public $timestamps = false;
    public static function say()
    {
        return 'haha yangbo';
    }
}