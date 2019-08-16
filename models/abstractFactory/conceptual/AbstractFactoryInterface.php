<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Интерфейс Абстрактной Фабрики объявляет набор методов, которые возвращают
 * различные абстрактные продукты. Эти продукты называются семейством и связаны
 * темой или концепцией высокого уровня. Продукты одного семейства обычно могут
 * взаимодействовать между собой. Семейство продуктов может иметь несколько
 * вариаций, но продукты одной вариации несовместимы с продуктами другой.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface AbstractFactoryInterface
{
    public function createProductA(): AbstractProductAInterface;

    public function createProductB(): AbstractProductBInterface;
}
