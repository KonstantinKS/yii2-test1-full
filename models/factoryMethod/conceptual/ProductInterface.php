<?php

declare(strict_types=1);

namespace app\models\factoryMethod\conceptual;

/**
 * Интерфейс Продукта объявляет операции, которые должны выполнять все
 * конкретные продукты.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface ProductInterface
{
    public function operation(): string;
}
