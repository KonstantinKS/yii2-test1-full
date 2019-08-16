<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Каждая Конкретная Фабрика имеет соответствующую вариацию продукта.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class ConcreteFactory2 implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductAInterface
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductBInterface
    {
        return new ConcreteProductB2();
    }
}
