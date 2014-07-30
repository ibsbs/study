<?php
namespace Iduoqian;

use View;
class IndexController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.layout';
    public function showIndex()
    {
        //var_dump($this->layout);
        return View::make('iduoqian.index.index');
    }

}