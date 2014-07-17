<?php
namespace Admin;

use \User;
use \Hash;
class UserController extends \Controller
{
    public function anyCreate()
    {
        $user = new User;
        $user->username = 'yangbo';
        $user->password = Hash::make('aabbccdd');
        $user->save();
        return "创建成功. 密码长度" . strlen($user->password);

    }
}