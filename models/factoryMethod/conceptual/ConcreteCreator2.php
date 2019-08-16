<?php

declare(strict_types=1);

namespace app\models\factoryMethod\conceptual;

/**
 * Конкретные Создатели переопределяют фабричный метод для того, чтобы изменить
 * тип результирующего продукта.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class ConcreteCreator2 extends Creator
{
    /**
     * Обратите внимание, что сигнатура метода по-прежнему использует тип
     * абстрактного продукта, хотя фактически из метода возвращается конкретный
     * продукт. Таким образом, Создатель может оставаться независимым от
     * конкретных классов продуктов.
     */
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct2();
    }
}
