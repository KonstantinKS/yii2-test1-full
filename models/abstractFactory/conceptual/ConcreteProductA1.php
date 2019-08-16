<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class ConcreteProductA1 implements AbstractProductAInterface
{
    public function usefulFunctionA(): string
    {
        return 'The result of the product A1.';
    }
}
