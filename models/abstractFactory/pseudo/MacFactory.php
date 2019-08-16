<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * Несмотря на то, что фабрики оперируют конкретными классами,
 * их методы возвращают абстрактные типы продуктов. Благодаря
 * этому фабрики можно взаимозаменять, не изменяя клиентский
 * код
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class MacFactory implements GUIFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createButton(): ButtonInterface
    {
        return new MacButton();
    }

    /**
     * @inheritDoc
     */
    public function createCheckbox(): CheckboxInterface
    {
        return new MacCheckbox();
    }
}
