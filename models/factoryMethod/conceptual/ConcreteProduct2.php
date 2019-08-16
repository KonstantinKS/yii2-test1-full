<?php

declare(strict_types=1);

namespace app\models\factoryMethod\conceptual;

/**
 * Конкретные Продукты предоставляют различные реализации интерфейса Продукта.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class ConcreteProduct2 implements ProductInterface
{
    public function operation(): string
    {
        return '{Result of the ConcreteProduct2}';
    }
}
