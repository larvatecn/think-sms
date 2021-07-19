<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 */

use Overtrue\EasySms\EasySms;
use Overtrue\EasySms\Exceptions\NoGatewayAvailableException;
use Overtrue\EasySms\Exceptions\InvalidArgumentException;

if (!function_exists('sms')) {
    /**
     * 发送短信
     * @param \Overtrue\EasySms\PhoneNumber|string $mobile
     * @param string|\Overtrue\EasySms\Message $message
     * @return array|EasySms
     * @throws NoGatewayAvailableException|InvalidArgumentException
     */
    function sms()
    {
        $arguments = func_get_args();
        /** @var EasySms $sms */
        $sms = app(EasySms::class);
        if (empty($arguments)) {
            return $sms;
        }
        return $sms->send($arguments[0], $arguments[1]);
    }
}