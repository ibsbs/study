<?php
namespace Iduoqian;

use View;
class GongLueController extends \BaseController
{
    public function showIndex()
    {
        return View::make('iduoqian.gonglue.daikuangonglue');
    }
}