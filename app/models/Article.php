<?php
class Article extends Eloquent
{
    protected $table = 'article';
    public $timestamps = false;
    /**
     * 最新的$number条消息
     * @date    2014-08-06
     * @author  yangbo
     * @param   int  $number  消息数
     * @return  array 返回消息数组
     * 
     */
    public  static function showRightNews($number='10')
    {
        $news = DB::table('article')->where('state', '>=', 0)->orderBy('pubdate', 'DESC')->limit($number)->get();
        return $news;
    }
}