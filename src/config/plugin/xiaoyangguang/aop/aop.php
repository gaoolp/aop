<?php
//定义切入方法区分大小写
use app\controller\Index;
use gaoolp\Aop\Example\TestAspect;

return [
    //测试的时候打开下面注释
//    TestAspect::class => [
//        Index::class => [
//            'index',
//        ],
//    ],
];
