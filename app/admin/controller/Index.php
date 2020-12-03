<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;

class Index
{
    public function index()
    {
        View::assign('title', '用户登录');
        return View::fetch();
    }

    public function hello()
    {
        return 'hello';
    }
}
