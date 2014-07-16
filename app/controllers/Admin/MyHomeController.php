<?php  
namespace Admin;

use Response;
class MyHomeController extends \Controller
{
    public function getName($name, $id) 
    {
        return '后台名字' . $name . '---' . $id;//. $id;
    }
    public function getId($id)
    {
        return $id;
    }

    public function getResponse() 
    {
        $contents = '<html><head></head><body>我很好啊</body></html>';
        $statusCode = 400;
        $content_type = 'UTF-8';
        $response = Response::make($contents, $statusCode);
        $response->headers('Content-Type', $content_type);
        return $response;
       
    }

    public function getResponseNew()
    {
        $content_type = 'gbk';
        return Response::view('hello')->header('Content-Type', $content_type);
    }
}