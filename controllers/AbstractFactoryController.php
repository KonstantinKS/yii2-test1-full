<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\abstractFactory\conceptual\AbstractFactoryInterface;
use app\models\abstractFactory\conceptual\ConcreteFactory1;
use app\models\abstractFactory\conceptual\ConcreteFactory2;
use app\models\abstractFactory\pseudo\Application;
use app\models\abstractFactory\pseudo\GUIFactoryInterface;
use app\models\abstractFactory\pseudo\MacFactory;
use app\models\abstractFactory\pseudo\WinFactory;
use app\models\abstractFactory\realWorld\Page;
use app\models\abstractFactory\realWorld\PHPTemplateFactory;
use app\models\abstractFactory\realWorld\TwigTemplateFactory;
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

    public function actionConceptual(): void
    {
        /*
         * Клиентский код может работать с любым конкретным классом фабрики
         */
        echo "Client: Testing client code with the first factory type:\n";
        $this->clientCodeConceptual(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:\n";
        $this->clientCodeConceptual(new ConcreteFactory2());
    }

    /**
     * Клиентский код работает с фабриками и продуктами только через абстрактные
     * типы: Абстрактная Фабрика и Абстрактный Продукт. Это позволяет передавать
     * любой подкласс фабрики или продукта клиентскому коду, не нарушая его
     *
     * @param AbstractFactoryInterface $factory
     */
    private function clientCodeConceptual(AbstractFactoryInterface $factory): void
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }

    /**
     * Теперь в других частях приложения клиентский код может принимать фабричные объекты любого типа
     */
    public function actionPage(): void
    {
        $page = new Page('Sample page', 'This it the body.');

        echo "Testing actual rendering with the PHPTemplate factory:\n";
        echo $page->render(new PHPTemplateFactory());

        echo "Testing rendering with the Twig factory:\n";
        echo $page->render(new TwigTemplateFactory());
    }
}
