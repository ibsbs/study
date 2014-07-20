<?php
class Post extends Eloquent
{
    protected $table = 'posts';
    protected $timestamp = true;   // updated_at deleted_at 更新时间 删除时间自动更新
    public function user()
    {
        return $this->belongsTo('User');
    }
}