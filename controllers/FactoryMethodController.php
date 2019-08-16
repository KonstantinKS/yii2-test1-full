<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\factoryMethod\conceptual\ConcreteCreator1;
use app\models\factoryMethod\conceptual\ConcreteCreator2;
use app\models\factoryMethod\conceptual\Creator;
use app\models\factoryMethod\realWorld\FacebookPoster;
use app\models\factoryMethod\realWorld\LinkedInPoster;
use app\models\factoryMethod\realWorld\SocialNetworkPoster;
use yii\web\Controller;

/**
 * Class FactoryMethodControllerController
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class FactoryMethodController extends Controller
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


    public function actionConceptual(): void
    {
        /*
         * Приложение выбирает тип создателя в зависимости от конфигурации или среды.
         */
        echo "App: Launched with the ConcreteCreator1.\n";
        $this->clientCodeConceptual(new ConcreteCreator1());
        echo "\n\n";

        echo "App: Launched with the ConcreteCreator2.\n";
        $this->clientCodeConceptual(new ConcreteCreator2());
    }

    /**
     * Клиентский код работает с экземпляром конкретного создателя, хотя и через его
     * базовый интерфейс. Пока клиент продолжает работать с создателем через базовый
     * интерфейс, вы можете передать ему любой подкласс создателя.
     *
     * @param Creator $creator
     */
    private function clientCodeConceptual(Creator $creator): void
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            . $creator->someOperation();
        // ...
    }


    public function actionRealWorld(): void
    {
        /*
         * На этапе инициализации приложение может выбрать, с какой социальной сетью оно
         * хочет работать, создать объект соответствующего подкласса и передать его
         * клиентскому коду.
         */
        echo "Testing ConcreteCreator1:\n";
        $this->clientCodeRealWorld(new FacebookPoster('john_smith', '******'));
        echo "\n\n";

        echo "Testing ConcreteCreator2:\n";
        $this->clientCodeRealWorld(new LinkedInPoster('john_smith@example.com', '******'));
    }

    private function clientCodeRealWorld(SocialNetworkPoster $creator): void
    {
        // ...
        $creator->post('Hello world!');
        $creator->post('I had a large hamburger this morning!');
        // ...
    }
}
