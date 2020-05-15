<?php

declare(strict_types=1);

namespace app\insomnia;

use yii\base\Module as BaseModule;

/**
 * Class Module
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
final class Module extends BaseModule
{
    /**
     * @inheritdoc
     */
    public $name = 'Модуль insomnia';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\insomnia\controllers';

    /**
     * @inheritdoc
     */
    public $layout = 'main';
}
