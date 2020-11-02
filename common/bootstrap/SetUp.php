<?php

namespace common\bootstrap;

use yii\base\BootstrapInterface;
use yii\base\ErrorHandler;
use yii\mail\MailerInterface;
use yii\caching\Cache;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app): void
    {
        $container = \Yii::$container;

        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });


        $container->setSingleton(ErrorHandler::class, function () use ($app) {
            return $app->errorHandler;
        });

        $container->setSingleton(Cache::class, function () use ($app) {
            return $app->cache;
        });

    }
}
