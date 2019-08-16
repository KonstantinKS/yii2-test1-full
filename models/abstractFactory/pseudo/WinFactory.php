<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * Каждая конкретная фабрика знает и создаёт только продукты
 * своей вариации
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class WinFactory implements GUIFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createButton(): ButtonInterface
    {
        return new WinButton();
    }

    /**
     * @inheritDoc
     */
    public function createCheckbox(): CheckboxInterface
    {
        return new WinCheckbox();
    }
}
