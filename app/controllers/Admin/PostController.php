<?php
namespace Admin;

use \Post;
use \View;
class PostController extends \Controller
{
    public function getCreate($id)
    {
        $post = new Post();
        $post->title = 'hello world';
        $post->content = '文章内容';
        $post->user_id = $id;
        $post->save();

        return '添加文章成功';
    }

    public function anyUpdate($id)
    {
        $post = Post::find($id);
        $post->content = "这是第{$id}篇文章的内容";
        $post->save();

        return '已经修改成功';
    }

    public function anyDelete()
    {
        $post = Post::find(4);
        $post->delete();

        return '删除成功';
    }
    public function getShow($id=1)
    {
        $post = Post::find($id);
        echo '<pre>';
        print_r($post->toArray());
        echo '</pre>';
        die;
        return View::make('admin.post-detail')->withPost($post);
    }

    public function getList()
    {
        //$posts = Post::get();
        $posts = Post::with('user')->get();
        return View::make('admin.post-list')->withPosts($posts);
    }


}