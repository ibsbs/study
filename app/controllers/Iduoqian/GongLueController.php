<?php
namespace Iduoqian;

use View;
use Article;
use DB;
use Paginator;
class GongLueController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.layout';
    public function showIndex()
    {
        $new_three_article = DB::table('article')->leftJoin('position_data', 'article.id', '=', 'position_data.sourceid')->where('position_data.fid', '1046')->orderBy('position_data.sort', 'ASC')->take(3)->get();
        //var_dump($new_three_article);
        $articles = DB::table('article')->where('state', '>=', 0)->orderBy('pubdate', 'DESC')->paginate(5);
        // var_dump($articles);die;
        //$paginator = Paginator::make($articles, 20, 5);
        //echo \IduoqianModels\Article::say(); die;
        return View::make('iduoqian.gonglue.daikuangonglue')
            ->with(
                array(
                    'articles'=>$articles, 
                    'new_three_article'=>$new_three_article
                ));
    }
}