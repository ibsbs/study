<?php
namespace Iduoqian;

use \View;
class IndexController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.master';
    public function showIndex()
    {
        $this->layout->content = View::make('iduoqian.index.index');
    }
}