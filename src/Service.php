<?php

declare(strict_types=1);

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
}