<?php

namespace mbd\sitetoolkit;

use craft\base\Plugin as BasePlugin;
use craft\web\View;
use yii\base\Event;

class Plugin extends BasePlugin
{
    public function init(): void
    {
        parent::init();

        $templatePath = dirname($this->getBasePath()) . DIRECTORY_SEPARATOR . 'templates';

        Event::on(
            View::class,
            View::EVENT_REGISTER_SITE_TEMPLATE_ROOTS,
            function ($event) use ($templatePath): void {
                $event->roots['site-toolkit'] = $templatePath;
            }
        );

        Event::on(
            View::class,
            View::EVENT_REGISTER_CP_TEMPLATE_ROOTS,
            function ($event) use ($templatePath): void {
                $event->roots['site-toolkit'] = $templatePath;
            }
        );
    }
}
