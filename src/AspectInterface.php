<?php
/**
 * Created by PhpStorm.
 * User: zhangxiaoxiao
 */

namespace gaoolp\Aop;

interface AspectInterface
{
    /**
     * 前置通知
     * @param $params
     * @param $class
     * @param $method
     */
    public static function beforeAdvice(&$params, $class, $method): void;

    /**
     * 后置通知
     * @param $res
     * @param $params
     * @param $class
     * @param $method
     */
    public static function afterAdvice(&$res, $params, $class, $method): void;

    /**
     * 异常处理
     * @param $throwable
     * @param $params
     * @param $class
     * @param $method
     */
    public static function exceptionHandler($throwable, $params, $class, $method): void;
}