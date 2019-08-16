<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\abstractFactory\pseudo\Application;
use app\models\abstractFactory\pseudo\GUIFactoryInterface;
use app\models\abstractFactory\pseudo\MacFactory;
use app\models\abstractFactory\pseudo\WinFactory;
use yii\web\Controller;

/**
 * Приложение выбирает тип конкретной фабрики и создаёт её
 * динамически, исходя из конфигурации или окружения
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class AbstractFactoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionWin(): void
    {
        $factory = new WinFactory();
        $this->appReader($factory);
    }

    public function actionMac(): void
    {
        $factory = new MacFactory();
        $this->appReader($factory);
    }

    private function appReader(GUIFactoryInterface $factory): void
    {
        $app = new Application($factory);
        $app->createUI();
        $app->paint();
    }
}
