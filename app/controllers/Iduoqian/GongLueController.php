<?php
namespace Iduoqian;

use View;
use Article;
use DB;
use Paginator;
use Input;
class GongLueController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.layout';
    public function showIndex()
    {
        $cid = Input::get('cid');
        if (empty($cid)) {           
            //var_dump($new_three_article);
            $articles = DB::table('article')
                ->where('state', '>=', 0)
                ->orderBy('pubdate', 'DESC')
                ->paginate(5);
        } else {
            $articles = DB::table('article')
                            ->leftJoin('inarticle', 'article.id', '=', 'inarticle.inid')
                            ->where('article.state', '>=', '0')
                            ->where('article.cid', '=', $cid)
                            ->select('article.*')
                            ->orderBy('pubdate', 'DESC')
                            ->paginate(5);

        }
        //var_dump($articles);
        $new_three_article = DB::table('article')->leftJoin('position_data', 'article.id', '=', 'position_data.sourceid')->where('position_data.fid', '1046')->orderBy('position_data.sort', 'ASC')->take(3)->get();
        $news = Article::showRightNews(8);
        //var_dump($news);
        return View::make('iduoqian.gonglue.daikuangonglue')
            ->with(
                array(
                    'news'              => $news,
                    'articles'          =>$articles, 
                    'new_three_article' =>$new_three_article,
                    'cid'               => $cid
                ));
    }

    public function showRightNews($number='10')
    {
        $news = DB::table('article')->where('state', '>=', 0)->orderBy('pubdate', 'DESC')->limit($number)->get();
        return $news;
        return View::make('iduoqian.hot_consult')
                ->with(array(
                    'news' => $news,
                ));

    }
}