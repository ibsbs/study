<?php
namespace Iduoqian;

use View;
class GongLueController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.layout';
    public function showIndex()
    {
        return View::make('iduoqian.gonglue.daikuangonglue');
    }
}