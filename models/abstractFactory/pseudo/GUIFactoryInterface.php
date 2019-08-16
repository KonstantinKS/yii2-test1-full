<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * Абстрактная фабрика знает обо всех абстрактных типах
 * продуктов
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface GUIFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface;

    /**
     * @return CheckboxInterface
     */
    public function createCheckbox(): CheckboxInterface;
}
