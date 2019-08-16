<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

/**
 * Interface Button
 * Паттерн Фабричный метод применим тогда, когда в программе есть иерархия классов продуктов
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface ButtonInterface
{
    /**
     * @param string|null $text
     * @param string|null $color
     * @return string
     */
    public function render(string $text = null, string $color = null): void;

    /**
     * @param string $function
     */
    public function onClick(string $function): void;
}
