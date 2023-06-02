<?php

namespace gaoolp\Aop\Example;

use gaoolp\Aop\AspectInterface;

class TestAspect implements AspectInterface
{
    /**
     * 前置通知
     * @param $params
     * @param $method
     * @return mixed|void
     */
    public static function beforeAdvice(&$params, $class, $method): void
    {
        var_dump('beforeAdvice');
    }

    /**
     * 后置通知
     * @param $res
     * @param $params
     * @param $method
     * @return mixed|void
     */
    public static function afterAdvice(&$res, $params, $class, $method): void
    {
        var_dump('afterAdvice');
    }

    public static function exceptionHandler($throwable, $params, $class, $method): void
    {
        // TODO: Implement exceptionHandler() method.
    }
}