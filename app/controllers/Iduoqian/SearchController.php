<?php
namespace Iduoqian;

use View;
class SearchController extends \BaseController
{
    protected $layout = 'iduoqian.layouts.layout';
    public function search()
    {
        
        return View::make('iduoqian.search.search');
    }
}