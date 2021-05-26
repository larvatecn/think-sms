<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 */

namespace larva\sms;

use Overtrue\EasySms\EasySms;

/**
 * SMS 门面
 * @mixin EasySms
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Sms extends \think\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return EasySms::class;
    }
}