<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * Этот паттерн предполагает, что у вас есть несколько семейств
 * продуктов, находящихся в отдельных иерархиях классов
 * (Button/Checkbox). Продукты одного семейства должны иметь
 * общий интерфейс
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface ButtonInterface
{
    public function paint(): void;
}
