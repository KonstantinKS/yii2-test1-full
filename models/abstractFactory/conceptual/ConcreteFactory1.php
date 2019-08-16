<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Конкретная Фабрика производит семейство продуктов одной вариации. Фабрика
 * гарантирует совместимость полученных продуктов. Обратите внимание, что
 * сигнатуры методов Конкретной Фабрики возвращают абстрактный продукт, в то
 * время как внутри метода создается экземпляр конкретного продукта.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class ConcreteFactory1 implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductAInterface
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductBInterface
    {
        return new ConcreteProductB1();
    }
}
