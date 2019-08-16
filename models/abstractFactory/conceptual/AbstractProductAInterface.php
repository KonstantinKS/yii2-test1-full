<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Каждый отдельный продукт семейства продуктов должен иметь базовый интерфейс.
 * Все вариации продукта должны реализовывать этот интерфейс.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface AbstractProductAInterface
{
    public function usefulFunctionA(): string;
}
