<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 */

namespace larva\sms;

use Overtrue\EasySms\EasySms;

/**
 * 短信服务
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Service extends \think\Service
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EasySms::class, function () {
            return new EasySms($this->app->config->get('sms'));
        });
    }

    public function boot(): void
    {

    }
}