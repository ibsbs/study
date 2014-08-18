<?php
namespace Iduoqian;

use View;
use Input;
use App;
use Redis;
class SearchController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.layout';
    public function search()
    {

        $redis = Redis::connection('default');
        $persons = array(array('name'=>'yangbo', 'age'=>32));
        $persons = json_encode($persons);
        $redis->set('abcname', '1');
        $redis->set('abcbb', '2');
        $redis->set('bbc', '3');
        //$value = $redis->setex('persons', 13, $persons);
        //$value = $redis->hset('persons','one', $persons);
        //$value = $redis->hset('persons','two', $persons);
        //$redis->command('set', array($persons));
        //$redis->hdel('persons', 'one');
        //$value = json_decode($redis->get('persons'), true);
        $value = $redis->del('abcbb');
        var_dump($redis->get('abcbb'));
        $redis->rpush('person','aaaa');
        $redis->rpush('person','bbbb');
        //$value = $redis->lrange('person', 1,1);
        //$redis->command('get', array(0,3));
        var_dump($value);
        //echo $value;die;
       
        return View::make('iduoqian.search.search');
    }
}